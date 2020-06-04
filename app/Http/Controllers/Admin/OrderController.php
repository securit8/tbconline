<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{

    /**
     * @Order $order
     */
    private $order;

    /**
     * @var int
     */
    private $pageSize = 20;

    public function __construct(Order $order){
        $this->order = $order;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['orders'] = $this->order->paginate($this->pageSize);

        return view('admin.orders.index', $data);
    }


}
