<?php
/**
 * Created by PhpStorm.
 * User: tazom
 * Date: 1/28/2019
 * Time: 11:13 PM
 */

namespace App\Gateway;


class Tbc
{

    private $payment;

    /**
     * Tbc constructor.
     */
    public function __construct()
    {
        if (!array_key_exists('REMOTE_ADDR', $_SERVER)) {
            $remoteAddress = "139.59.208.66";
        } else {
            $remoteAddress = $_SERVER['REMOTE_ADDR'];
        }

        $this->payment = new TbcPayProcessor(public_path().config('tbc.cert-path'), config('tbc.cert-key'), $remoteAddress);
    }


    public function getTransactionResult($transactionID)
    {
        return $this->payment->get_transaction_result($transactionID);
    }

    /**
     * Pay.
     *
     * @param $order
     * @return array
     */
    public function pay($order)
    {
        $this->payment->amount = $order->getAmount();
        $this->payment->currency = $order->getCurrency();
        $this->payment->description = "Donation";
        $this->payment->language = "GE";

        // Do request.
        $response = $this->payment->sms_start_transaction();

        return $response;
    }

    /**
     * Register card.
     *
     * @param $order
     * @return array
     */
    public function registerCard($order)
    {
        $this->payment->amount = $order->getAmount();
        $this->payment->currency = $order->getCurrency();
        $this->payment->description = "Donation";
        $this->payment->language = "GE";

        // Do request.
        $response = $this->payment->regular($order->getRegularID());

        return $response;
    }

    /**
     * Execute money.
     *
     * @param $card
     * @return array
     */
    public function regularExecute($card){

        $this->payment->amount = $card->getAmount();
        $this->payment->currency = $card->getCurrency();
        $this->payment->description = "Donation";

        $result = $this->payment->regularPay($card->getRegularID());

        return $result;
    }

}