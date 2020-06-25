<?php

namespace App\Http\Controllers;
use App\products;
use Illuminate\Http\Request;
use DB;

class guzzlepost extends Controller
{

public function show(){

    return redirect(route('show'));
}
public function index(Request $request){
    $data['menu']= 3;

    $qty=$request['qty'];
    $product=DB::table('products')->pluck('price');
    $data['kaxeti_price']=$product[0];
    $data['yazbegi_price']=$product[1];
    $data['ajara_price']=$product[2];
    $data['qty']=$qty;
    $data['cash_f']= $data['kaxeti_price']*$qty;

    return view('postForm',$data);
}
//    public function getCURL()
//
//    {
//
//        // Make Post Fields Array
//        $data2 = [
//            'cash_f' => 200,
//            'name' => 'ushangi',
/*            'sec' => '<?=md5(md5(time())."flytaxi");?>',*/
//            '' => 'send',
//
//        ];
/*        $time="<?=md5(md5(time()).\"flytaxi\");?>";*/
//        $curl = curl_init();
//
//        curl_setopt_array($curl, array(
/*            CURLOPT_URL => "https://www.flytaxi.ge/taxicall.php?md_time=<?=md5(time());?>",*/
//            CURLOPT_RETURNTRANSFER => true,
//            CURLOPT_ENCODING => "",
//            CURLOPT_MAXREDIRS => 10,
//            CURLOPT_TIMEOUT => 30000,
//            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//            CURLOPT_CUSTOMREQUEST => "POST",
//            CURLOPT_POSTFIELDS => $data2,
//            CURLOPT_HTTPHEADER => array(
//                // Set here requred headers
//                "accept: */*",
//                "accept-language: en-US,en;q=0.8",
//                "content-type: application/json",
//            ),
//        ));
//
//        $response = curl_exec($curl);
//        $err = curl_error($curl);
//
//        curl_close($curl);
//
//        if ($err) {
//            echo "cURL Error #:" . $err;
//        } else {
//            print_r("olaaaa");
//        }
//
/*return redirect("https://www.flytaxi.ge/taxicall.php?md_time=<?=md5(time());?>",$time);*/
//    }

}
