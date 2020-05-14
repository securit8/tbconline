<?php

namespace App\Http\Controllers\Admin;

use App\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CardController extends Controller
{
    /**
     * @Card $card
     */
    private $card;

    /**
     * @var int
     */
    private $pageSize = 20;

    public function __construct(Card $card){
        $this->card = $card;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['cards'] = $this->card->where('status', 1)->paginate($this->pageSize);

        return view('admin.cards.index', $data);
    }
}
