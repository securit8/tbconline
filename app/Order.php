<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{

    use SoftDeletes;

    protected $table = "orders";

    protected $fillable = [
        'trans_id',
        'amount',
        'name',
        'lastname',
        'type',
        'currency',
        'status',
        'regular_id',
        'before_response',
        "after_response",
        "card_id"
    ];

    protected $dates = [ 'deleted_at' ];

    public function card(){
        return $this->belongsTo('App\Card', 'card_id');
    }

    public function initializeOrder($params, $amountMultiple = true)
    {

        if ($amountMultiple) {
            $amount = (float)$params['amount'] * 100;
        } else {
            $amount = $params['amount'];
        }

        $this->setStatus("NOT_FINISHED");
        $this->setName($params['name']);
        $this->setLastname($params['lastname']);
        $this->setAmount($amount);
        $this->setType($params['type']);
        $this->setCurrency();
        $this->save();

        return $this;
    }

    public function setCardID($cardID)
    {
        $this->card_id = $cardID;
    }

    public function setRegularID($regularID)
    {
        $this->regular_id = $regularID;
    }

    public function setBeforeResponse($response)
    {
        $this->before_response = json_encode($response);
    }

    public function setAfterResponse($response)
    {
        $this->after_response = json_encode($response);
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function setCurrency($currency = '981')
    {
        $this->currency = $currency;
    }

    public function setType($type)
    {
        $this->type = $type;
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

    public function setTransID($transID)
    {
        $this->trans_id = $transID;
    }

    ////

    public function getRegularID()
    {
        return $this->regular_id;
    }

    public function getAfterResponse()
    {
        return json_decode($this->after_response,true);
    }

    public function getBeforeResponse()
    {
        return json_decode($this->before_response,true);
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function getType()
    {
        return $this->type;
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

    public function getTransID()
    {
        return $this->trans_id;
    }

}
