<?php

namespace App\Http\Controllers;

use App\Models\AnalizOlustur;
use App\Models\CouponMatch;
use App\Models\Fixture;
use App\Models\User;
use App\Models\UserToken;
use Illuminate\Http\Request;

class MusteriController extends Controller
{

    public function index()
    {
        $tokenget = null;
        if (auth()->check()) {
            $token = UserToken::where('user_id', auth()->user()->id)->first();
            $tokenget = $token->token;
        }

        return view('frontend.Müşteri.musteri',[
            "tokenget" =>   $tokenget
        ]);
    }
    public function wishlist()
    {
        $tokenget = null;
        if (auth()->check()) {
            $token = UserToken::where('user_id', auth()->user()->id)->first();

            $tokenget = $token->token;
        }

        return view('frontend.Müşteri.wishlist',[
            "tokenget" =>   $tokenget
        ]);
    }
    public function orderHistory()
    {
        if (auth()->check()) {
            $token = UserToken::where('user_id', auth()->user()->id)->first();

            $tokenget = $token->token;
        }
        return view('frontend.Müşteri.order-history',[
            "tokenget" =>   $tokenget
        ]);
    }
    public function kuponlar()
    {
        $tokenget = null;
        if (auth()->check()) {
            $token = UserToken::where('user_id', auth()->user()->id)->first();

            $tokenget = $token->token;
        }
        $kuponget = AnalizOlustur::where('user_id', auth()->user()->id)->get();
        return view('frontend.Müşteri.order-history',[
            "tokenget" =>   $tokenget,
            "kuponget" =>$kuponget
        ]);
    }
    public function KuponAdd(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        AnalizOlustur::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'description' => $request->description,
            'token' => $request->token,
        ]);
        return redirect()->back()->with('success', 'Kupon başarıyla oluşturuldu.');
    }
    public function KuponEdit(Request $request,  $id)
    {

        $analiz = AnalizOlustur::find($id);
        $analiz->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        return redirect()->back()->with('success', 'Kupon başarıyla Güncellendi.');
    }
    public function KuponDelete($id)
    {
        $analiz = AnalizOlustur::find($id);
        $analiz->delete();
        return redirect()->back()->with('success', 'Kupon başarıyla Silindi.');
    }

    public function ayarlar(){
        $tokenget = null;
        if (auth()->check()) {
            $token = UserToken::where('user_id', auth()->user()->id)->first();

            $tokenget = $token->token;
        }
        return view("frontend.Müşteri.settings",[
            "tokenget" =>   $tokenget
        ]);
    }
    public function yorumlar(){
        $tokenget = null;
        if (auth()->check()) {
            $token = UserToken::where('user_id', auth()->user()->id)->first();

            $tokenget = $token->token;
        }
        return view("frontend.Müşteri.yorumlar",[
            "tokenget" =>   $tokenget
        ]);
    }
    public function Jetonlar(){
        $tokenget = null;

        if (auth()->check()) {
            $token = UserToken::where('user_id', auth()->user()->id)->first();

            $tokenget = $token->token;
        }

        return view("frontend.Müşteri.jetonlar",[
            "tokenget" => $tokenget
        ]);
    }
    public function addToken(Request $request)
    {
        $token = $request->input('token');
        if ($token == null) {
            session()->flash('error', 'Lütfen jeton giriniz.');
            return redirect()->back();
            # code...
        }
        if ($token < 1) {
            session()->flash('error', 'Lütfen geçerli bir jeton giriniz.');
            return redirect()->back();
        }
        if ($token < 100) {
            session()->flash('error', 'Lütfen 100 jeton veya daha fazla jeton giriniz.');
            return redirect()->back();
            # code...
        }
        $user = auth()->user()->id;
        $existingToken = UserToken::where('user_id', $user)->first();
        if ($existingToken) {
            $existingToken->token += $token;
            $existingToken->save();
            session()->flash('success', 'Jetonunuz başarıyla eklendi.');
            return redirect()->back();
        } else {
            UserToken::create([
                'user_id' => $user,
                'token' => $token,
            ]);
            session()->flash('success', 'Jetonunuz başarıyla eklendi.');
            return redirect()->back();
        }


    }
    public function Analizadd($id){
        $Cupon = CouponMatch::where('kupon_id', $id)->where("user_id",auth()->user()->id)->get();




                $tokenget = null;
        if (auth()->check()) {
            $token = UserToken::where('user_id', auth()->user()->id)->first();
            $tokenget = $token->token;
        }
        $fixtures = Fixture::query()

        ->whereBetween('date', [now(), now()->addDays(4)])// Bugünden sonraki 3 gün
        ->orderBy('date', 'asc') // Tarihe göre sıralama (artarak)

        ->get( );
        return view("frontend.Müşteri.analizadd",[
            "tokenget" => $tokenget,
            "fixtures" => $fixtures,
            "Cupon" => $Cupon,
            "id" => $id
        ]);
    }

    public function Analizstore(Request $request,$id)
{

    // Validation örneği
    // $request->validate([
    //     'couponName' => 'required|string|max:255',
    //     'matchName'  => 'required|string|max:255',
    //     'prediction' => 'required|string|max:10',
    //     'analysis'   => 'required|string|min:100',
    // ]);

    if ($request->analysis < 100) {
        session()->flash('error', 'Lütfen Açıkllamayı 100 karakterden daha az yazmayınız.');;
        return redirect()->back();
    }

    $vuponfirst = CouponMatch::where('user_id', auth()->user()->id)->where('match_name', $request->match_name)->first();

    if ($vuponfirst) {
        session()->flash('error', 'Bu maça ait bir Analiz zaten var.');
        return redirect()->back();
    }


    // Kayıt işlemi
    CouponMatch::create([
        'user_id'     => auth()->user()->id,
        'coupon_name' => $request->coupon_name,
        'match_name'  => $request->match_name,
        'prediction'  => $request->prediction,
        'analysis'    => $request->analysis,
        'kupon_id'  => $id,
    ]);

    // Redirect veya başka işlemler
    return redirect()->back()->with('success', 'Kupon bilgisi başarıyla kaydedildi!');
}
public function AnalizDelete($id)
{
    $analiz = CouponMatch::where('user_id', auth()->user()->id)->where('id', $id)->first();
    $analiz->delete();
    return redirect()->back()->with('success', 'Kupon başarıyla Silindi.');

}
}
