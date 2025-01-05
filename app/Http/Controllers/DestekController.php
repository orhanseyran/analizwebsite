<?php

namespace App\Http\Controllers;

use App\Models\Destek;
use App\Models\destek_mesajlar;
use App\Models\User;
use Illuminate\Http\Request;

class DestekController extends Controller
{
    public function indexdestek(){

        if (auth()->user()->Role == "Müşteri" ||auth()->user()->Role == "Satici" ) {
            $destek = Destek::where("user_id",auth()->user()->id)->latest()->get();
            return view("admin.destek.index",[
                "destek" => $destek,
            ]);
        }
        if (auth()->user()->Role == "Admin") {
            $destek = Destek::latest()->get();
            return view("admin.destek.index",[
                "destek" => $destek,
            ]);
        }


    }
    public function indexchat(){

        return view("admin.destek.destekoluştur.chatapp");
    }
    public function indexchatcevap($id){
        $destek = Destek::find($id);

        $destek_mesajlar = destek_mesajlar::where("destek_id",$destek->id)->get();

        $user= User::where("Role","Admin")->get();

        return view("admin.destek.destekcevap.chatapp",[
            "destek" => $destek,
            "destek_mesajlar" => $destek_mesajlar,
            "user" => $user

        ]);
    }
    public function indexdestekolustur(Request $request){
        $request->validate([
            "konu" => "required",
            "baslik" => "required",
        ]);
        $destek = new Destek();
        $destek->user_id = auth()->user()->id;
        $destek->durum = 1;
        $destek->konu = $request->konu;
        $destek->baslik = $request->baslik;
        $destek->öncelik = $request->öncelik;
        $destek->destek_numarasi = rand(99,9999);
        $destek->atanan = null;
        $destek->save();

        $request->validate([
            "mesaj" => "required",
        ]);

        $destek_mesaj = new destek_mesajlar();
        $destek_mesaj->destek_id = $destek->id;
        $destek_mesaj->mesaj = $request->mesaj;
        $destek_mesaj->user_id = auth()->user()->id;
        $destek_mesaj->user_name = auth()->user()->name;

        $destek_mesaj->save();

        return redirect(route("indexchatcevap",$destek->id))->with("success","Destek Talebi oluşturuldu");
    }

    public function destekcevap(Request $request,$id){
        $destek = Destek::find($id);
        $destek->user_id = auth()->user()->id;
        $destek->durum = $request->durum;
        $destek->konu = $request->konu;
        $destek->baslik = $request->baslik;
        $destek->öncelik = $request->öncelik;
        $destek->atanan = $request->atanan;
        $destek->update();

        $destek = new destek_mesajlar();
        $destek->destek_id = $destek->id;
        $destek->mesaj = $request->mesaj;
        $destek->user_id = auth()->user()->id;
        $destek->mesaj_cevap = $request->mesaj_cevap;
        $destek->save();

        return redirect()->back()->with("success","Destek Cevapi oluşturuldu");





    }


    //
}
