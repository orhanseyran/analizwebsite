<?php

namespace App\Http\Controllers;

use App\Models\Iletisim;
use Illuminate\Http\Request;

class IletisimController extends Controller
{
   public function indexiletisimadmin(){
    $data = Iletisim::latest()->get();
    return view("admin.İletişimYönetimi.index",[
        "data"=> $data
    ]);
   }
   public function okundu($id){
    $data = Iletisim::find($id);

    if ($data->durum == 0) {
        $data->durum = 1;
    }
    elseif ($data->durum == 1) {
        $data->durum = 0;
    }



    $data->update();

    return redirect()->back()->with("success","Okundu Durumu Güncellendi");
   }
   public function sil($id){
    $data = Iletisim::find($id);
    if ($data == null) {
        return redirect()->back()->with("success","İletişim Formu Bulunamadı");

    }
    $data->delete();

    return redirect()->back()->with("success","İletişim Formu Silindi");
   }
   public function createiletisimfront(Request $request){
    $request->validate([
        "namesurname"=> "required",
        "email"=> "required",
        "soru"=> "required",
    ]);

    $soru = new Iletisim();
    $soru->namesurname = $request->namesurname;
    $soru->email = $request->email;
    $soru->soru = $request->soru;
    $soru->save();

    return redirect()->back()->with("success","İletişim Formunuz Başarıyla iletildi");


   }
}
