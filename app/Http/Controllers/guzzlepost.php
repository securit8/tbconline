<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\products as products;

class guzzlepost extends Controller
{

    public function show()
    {

        return redirect(route('show'));
    }

    public function index(Request $request)
    {
        $data['menu'] = 3;
        $sec = $request['sec'];
        $qty = $request['qty'];
        $name = $request['tourName'];
        $product = products::where('order_desc', 'kaxeti')->pluck('price');


        $data['cash_f'] = $product[0];
//        $data['yazbegi_price'] = $product[1];
//        $data['ajara_price'] = $product[2];
        $data['qty'] = $qty;
        $data['sec'] = $sec;

        //$data['cash_f'] = $data['kaxeti_price'];

        return view('postForm', $data);
    }

}
