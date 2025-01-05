<?php

namespace App\Http\Controllers;
use App\Models\header2;
use Illuminate\Support\Str;

use App\Models\seo;
use Illuminate\Support\Facades\Hash;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Header;
use App\Models\karsilastir;
use App\Models\topbar;
use Illuminate\Support\Facades\Session;
use Vonage\Client\Credentials\Basic;
use Vonage\Client;
use Vonage\Verify\Verification;
use Vonage\SMS\Message\SMS;
use ShoppingCart;

class LoginAndRegisterController extends Controller
{
    public function adminlogin()
    {

        return view("admin.login");

    }
    public function registeradmin()
    {

        return view("admin.register");

    }


    // public function registerget(){
    //     $yeni = ShoppingCart::all();
    //     $kategoriler = Kategori::latest()->get();
    //     $karsilastir = auth()->check() ? karsilastir::where("user_id", auth()->user()->id)->get() : collect();
    //     return view("sayfalar.register",compact("yeni","kategoriler","karsilastir"));

    // }
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'npassword' => 'required',
        ]);


        $user = auth()->user();


        if (Hash::check($request->current_password, $user->password)) {
            $user->update([
                'password' => bcrypt($request->npassword),
            ]);

            session()->flash("onay","Güncelleme Başarılı");

            return redirect()->back();
        } else {
            session()->flash("Hata","Eski şifreniz Hatalı ");
            return redirect()->back();
        }
    }
    public function changename(Request $request)
    {
        $request->validate([
            'name' ,
            "email",
            'current_password' => 'required',
        ]);


        $user = auth()->user();


        if (Hash::check($request->current_password, $user->password)) {
            $user->update([
                "email" => $request->email,
                "name" => $request->name,
            ]);

            session()->flash("onay","Güncelleme Başarılı");

            return redirect()->back();
        } else {
            session()->flash("Hata","Eski şifreniz Hatalı ");
            return redirect()->back();
        }
    }
    public function login(){

        return view("frontend.login.login");

    }


    public function registerr(Request $request)
    {
        // Validate request and register user
        $data = $request->only("name","email","password");
        $data["password"]=bcrypt($data["password"]);

        $email = $data ["email"];

        $user = User::where("email",$email)->first();
        if ($user) {
            // Kullanıcı zaten kayıtlı ise hata mesajını ayarlayın
            session()->flash('Hata', 'Bu E-Posta Zaten Kayıtlı');
        } else {
            // Kullanıcı kayıtlı değilse yeni kullanıcı kaydını yapın
            User::create($data);
            session()->flash('onay', 'Kullanıcı Başarı İle Eklendi');
        }
        return redirect()->back();
    }


    public function logoutadmin(Request $request)
    {
    Auth::logout();
    return redirect('/');

    }

    public function DeleteAccount($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
    public function logout(Request $request)
    {
        Auth::logout();
        // Kullanıcının oturumunu sonlandır
        // session()->flash('giris', 'Çıkış İşlemi Başarılı');
        return redirect('/'); // Kullanıcıyı anasayfaya yönlendir
    }
    public function danışman(){
        return view("user.danişman");
    }
    public function loginpost(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        // Check user role and update the "durum" attribute
        if ($user->Role == 'Admin') {
            return redirect(route('admin.index'));
        } elseif ($user->Role == 'Müşteri') {
            // $k = Kategori::where("uzman_kategori",$user->uzmanlık_alanı)->first();
            // $k->durum += 1;
            // $k->update();
            return redirect(route('musteri.index'));
        }
    } else {
        session()->flash('Hata', 'Email veya şifre yanlış');
        return redirect()->back();
    }
}

    public function adminregisterpost(Request $request){

        $data = $request->only("name","email","password","role","phone");
        $data["password"]=bcrypt($data["password"]);

        $email = $data ["email"];

        $user = User::where("email",$email)->first();
        if ($user) {
            // Kullanıcı zaten kayıtlı ise hata mesajını ayarlayın
            session()->flash('reddet', 'Bu Email Zaten Kayıtlı');
        } else {
            // Kullanıcı kayıtlı değilse yeni kullanıcı kaydını yapın
            User::create($data);
            session()->flash('onay', 'Kullanıcı Başarı İle Eklendi');
        }
        return redirect()->back();



    }



}

