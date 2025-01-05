<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\orderdetail;
use App\Models\product;
use Illuminate\Http\Request;

class ÖdemeController extends Controller
{
    public function indexödeme(){
        $sepettoplam= Cart::where('kullanıcı', request()->ip())->get();
        return view('frontend.services.ödeme.ödeme',[
            'sepettoplam'=> $sepettoplam
        ]);
    }
    public function indexödemeadmin(){
        $sepettoplam= Cart::where('kullanıcı', request()->ip())->get();
        return view('admin.ödemeYönetimi.index');
    }
    public function ödeme(Request $request)
    {
        $siparişler = Cart::where('kullanıcı', request()->ip())->get();

        // Check if the cart is empty
        if ($siparişler->isEmpty()) {
            session()->flash("hata", "Sepetiniz Boş");
            return redirect(route("cart"));
        }

        // Process each item in the cart
        foreach ($siparişler as $al) {
            $orderdetail = new orderdetail();
            $orderdetail->fill($request->all());

            $orderdetail->ürün_id = $al->product_id;
            $orderdetail->per_price = $al->product_price;
            $orderdetail->urun_adı = $al->product_name;
            $orderdetail->email = $request->email;
            $orderdetail->active = 0;
            $orderdetail->qty = $al->product_quantity;
            $orderdetail->sub_total = $al->product_price * $al->product_quantity;
            $orderdetail->sipariş_takip_no = rand(1000, 9999);

            // Save order detail
            $orderdetail->save();
        }

        // Other payment processing logic here
        $merchant_id = '202803';
        $merchant_key = '9qiDf6erMK797zfZ';
        $merchant_salt = 'NiZhSJpfjrWtpp1m';

        // Prepare payment details
        $email = $request->input("email");
        $total = $siparişler->sum('total_price'); // Assuming 'total_price' exists in Cart model

        $payment_amount = $total * 100; // Convert to kuruş

        $merchant_oid = rand();

        $merchant_ok_url = route("products");
        $merchant_fail_url = route("products");

        $user_basket = "";
        $detail_basket = [];

        foreach ($siparişler as $k) {
            $detail_basket[] = array($k->product_name, $k->product_price, $k->product_quantity);
        }

        $user_basket = base64_encode(json_encode($detail_basket));

        // Get user IP address
        if (isset($_SERVER["HTTP_CLIENT_IP"])) {
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        } elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
            $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else {
            $ip = $_SERVER["REMOTE_ADDR"];
        }

        $user_ip = $ip;

        $timeout_limit = "30";
        $debug_on = 1;
        $test_mode = 0;
        $no_installment = 0;
        $max_installment = 0;
        $currency = "TL";

        // Generate PayTR token
        $hash_str = $merchant_id . $user_ip . $merchant_oid . $email . $payment_amount . $user_basket . $no_installment . $max_installment . $currency . $test_mode;
        $paytr_token = base64_encode(hash_hmac('sha256', $hash_str . $merchant_salt, $merchant_key, true));
        $yeni = Cart::where('kullanıcı', request()->ip())->get();
        // Prepare POST data for PayTR
        $post_vals = [
            'merchant_id' => $merchant_id,
            'user_ip' => $user_ip,
            'merchant_oid' => $merchant_oid,
            'email' => $email,
            'payment_amount' => $payment_amount,
            'paytr_token' => $paytr_token,
            'user_basket' => $user_basket,
            'debug_on' => $debug_on,
            'no_installment' => $no_installment,
            'max_installment' => $max_installment,
            'user_name' => $request->input("name"),
            'user_address' => $request->input("adress"),
            'user_phone' => $request->input("phone"),
            'merchant_ok_url' => $merchant_ok_url,
            'merchant_fail_url' => $merchant_fail_url,
            'timeout_limit' => $timeout_limit,
            'currency' => $currency,
            'test_mode' => $test_mode
        ];

        // Send data to PayTR
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.paytr.com/odeme/api/get-token");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_vals);
        curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);

        // Execute curl
        $result = curl_exec($ch);

        if (curl_errno($ch)) {
            die("PAYTR IFRAME connection error. err:" . curl_error($ch));
        }

        curl_close($ch);

        // Handle PayTR response
        $result = json_decode($result, true);

        if ($result['status'] == 'success') {
            $token = $result['token'];
        } else {
            die("PAYTR IFRAME failed. reason:" . $result['reason']);
        }

        // Return view with PayTR token and any additional data needed
        return view("frontend.services.ödeme.ödeme", compact("token", "yeni"));
    }
    public function ödemedemo(Request $request)
    {
        $sipariş = Cart::where('kullanıcı', request()->ip())->get();

        // Mail::to($request->email)->send(new OrderMail($sipariş));

        foreach ($sipariş as $al) {

            $orderdetail = new orderdetail();


            $orderdetail->fill($request->all());
            $orderdetail->product_id = $al->id;
            $orderdetail->per_price = $al->price;
            $orderdetail->urun_adı = $al->name;
            $orderdetail->user_id= auth()->check() ? auth()->user()->id : 0;
            $orderdetail->email = $al->email;





            $orderdetail->active = 0;


            // $orderdetail->user_id = auth()->check() ?  auth()->user()->id : 0 ;
            $orderdetail->qty = $al->qty;
            $orderdetail->sub_total = $al->price * $al->qty;
            $orderdetail->ordernote = $request->ordernote;



            $orderdetail->save();

           $product =  product::where('id', $al->id)->get();


           if ($al->count() == 1) {
            $product->satis_miktari = $product->satis_miktari + $al->qty ;
            $k->save;
           }
           foreach ($product as $k) {
           $k->satis_miktari = $k->satis_miktari + $al->qty ;
            $k->save();                # code...


           }








            // $orderdetail->işletmeinfo = $request->işletmeinfo;



            //sipariş sayısına göre ürüne sipariş sayısı ekleme
            $yeni = Cart::where('kullanıcı', request()->ip())->get();
            if ($yeni->count() == 0) {
                session()->flash("hata", "Sepetiniz Boş");
                return redirect(route("cart"));
            }
            Cart::where('kullanıcı', request()->ip())->delete();
            $urun = product::findorfail($al->id);

            $urun->stok_miktarı = $urun->stok_miktarı - $al->qty;

            $urun->update();

            return redirect("/");
        }



    }
}
