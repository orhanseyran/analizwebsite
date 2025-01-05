<?php

namespace App\Http\Controllers;

use App\Models\GoogleAuth;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function  redirect(){
        if(auth()->check()){
            return redirect("/");
        }

        return Socialite::driver('google')->redirect();
    }
    public function callbackuser(){
        $googleuser= Socialite::driver('google')->user();

        $user = User::updateOrCreate(
             ["google_id"=>$googleuser->id],
             [
                 "name" => $googleuser->name,
                 "email" => $googleuser->email,
                 "Role" => "Müşteri",
                 "password" => str(12),
                 "email_verified" => now(),
             ]

         );
         auth()->login($user);

         if (auth()->user()->Role == "Müşteri") {
            return redirect("/");
         }else {
            return redirect()->route('admin.index');
         }




    }
    public function callbackadmin(){




        $googleuser= Socialite::driver('google')->user();

        $user = User::updateOrCreate(
             ["google_id"=>$googleuser->id],
             [
                 "name" => $googleuser->name,
                 "email" => $googleuser->email,
                 "Role" => "Admin",
                 "password" => str(12),
                 "email_verified" => now(),
             ]

         );
         auth()->login($user);

         if (auth()->user()->Role == "Admin") {
           return redirect()->route('admin.index');
         }else {
            return redirect("/");
         }






    }
}
