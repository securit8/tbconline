<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\PayRequest;
use App\Order;
use App\Card;
use App\Gateway\Tbc;
// use GuzzleHttp\Client;

class TbcController extends Controller
{

    private $order;
    private $card;
    private $tbc;

    // Constructor
    public function __construct
    (
        Order $order,
        Card $card,
        Tbc $tbc
    )
    {
        $this->tbc = $tbc;
        $this->order = $order;
        $this->card = $card;
    }

    public function ok(Request $request)
    {
        Log::info($request->all());

        $transactionID = $request->get('trans_id');
        $result = $this->tbc->getTransactionResult($transactionID);
        Log::info($result);

        $orderStatus = $result['RESULT'];

        if (array_key_exists('RESULT_CODE', $result)) {
            $order = $this->order->where('trans_id', $transactionID)->first();   
            if (!is_null($order)) {
                $order->setStatus($orderStatus);
                $order->setAfterResponse($result);
                $order->save();
            }
        }

        $message = __('front.pay_error');
        $status = "error";

        if ( array_key_exists('RESULT_CODE', $result) && $result['RESULT_CODE'] == "000") {

            if (!is_null($order)) {
                if (!is_null($order->card)) {
                    $card = $order->card;
                    $card->setStatus(1);
                    $card->save();
                }
            }

            $message = __('front.pay_success');
            $status = "success";
        }

        \Session::flash($status, $message);

        return redirect()->route('donation.index');
    }

    public function fail(Request $request)
    {
        Log::info($request->all());
        $message = __('front.pay_error');

        \Session::flash('error', $message);

        return redirect()->route('donation.index');
    }

    public function process(PayRequest $request)
    {
        $order = $this->order->initializeOrder($request->except(['_token']));

        if ( $order->type == 0) {

            // Send pay request.
            $start = $this->tbc->pay($order);

        } else {
            // Generate regularpay id and save card to database.
            $regularId = uniqid();
            $order->setRegularID($regularId);
            $card = $this->card->initialize($request->except(['_token']), $regularId);
            $order->setCardID($card->id);
            $order->save();

            // Send card register request to tbc.
            $start = $this->tbc->registerCard($order);
        }

        Log::info($start);

        $order->setBeforeResponse($start);
        $order->setTransID($start['TRANSACTION_ID']);
        $order->save();        

        return view('api.tbc', $start);
    }

}