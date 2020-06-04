<?php

namespace App;

use App\Gateway\Tbc;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class Card extends Model
{
    use SoftDeletes;

    protected $table = "cards";

    protected $fillable = [
        'amount',
        'name',
        'lastname',
        'currency',
        'regular_id',
        'status'
    ];

    protected $dates = [ 'deleted_at' ];

    public function orders(){
        return $this->hasMany('App\Order');
    }

    /**
     * Execute money from save card.
     *
     * @param null $date
     */
    public static function RegularExecute($date = null){

        if(!is_null($date)) {
            $date = Carbon::now();
        }

        Log::info("Starting execute process");

        foreach(self::all() as $card) {

            $cardDate = Carbon::parse($card->created_at);

            if ( $cardDate->format('d') ==  $date->format('d') && $card->getStatus() == 1){

                Log::info($card);

                $params = [
                    'name'  => $card->getName(),
                    "lastname"  => $card->getLastname(),
                    "amount"    => (float)$card->amount,
                    "type"  => 1
                ];

                // Initialize order.
                $order = new Order();
                $order = $order->initializeOrder($params, false);
                $order->setCardID($card->id);
                $order->setRegularId($card->getRegularID());
                $order->save();

                // Execute money.
                $tbc = new Tbc();
                $response = $tbc->regularExecute($card);
                Log::info($response);

                $order->setAfterResponse($response);
                $order->setTransID($response['TRANSACTION_ID']);
                $order->setStatus($response['RESULT']);
                $order->save();
            }

        }

        Log::info("End execute process");
    }

    public function initialize($params, $regularID)
    {
        $this->setName($params['name']);
        $this->setLastname($params['lastname']);
        $this->setAmount((float)$params['amount'] * 100);
        $this->setCurrency();
        $this->setRegularID($regularID);
        $this->save();

        return $this;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setRegularID($regularID)
    {
        $this->regular_id = $regularID;
    }

    public function setCurrency($currency = '981')
    {
        $this->currency = $currency;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    ////

    public function getRegularID()
    {
        return $this->regular_id;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getStatus()
    {
        return $this->status;
    }

}
