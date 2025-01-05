<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function addUser(Request $request){
        $data = $request->only("name","Soyad","email","Doğum_Tarihi","Adres","password","TelefonNumarası");
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
    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
    public function updateUser(Request $request,$id){
        $data = $request->only("name","Soyad","email","Doğum_Tarihi","Adres","TelefonNumarası");
        $user = User::find($id);
        $user->update($data);
        session()->flash('onay', 'Kullanıcı Başarı İle Güncellendi');
        return redirect()->back();

    }

}
