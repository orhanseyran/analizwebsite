<?php

namespace App\Http\Controllers;
use App\Models\UrunRenk;
use App\Models\UrunBoyut;
use App\Models\Malzeme;

use Illuminate\Http\Request;

class VaryasyonController extends Controller
{
    public function Varyasyonİndex()
    {
        $urunrenk = UrunRenk::latest()->get();
        $urunboyut = UrunBoyut::latest()->get();
        $malzeme = Malzeme::latest()->get();
        return view("admin.VaryasyonUrun.index",[
            "urunrenk" => $urunrenk,
            "urunboyut" => $urunboyut,
            "malzeme" => $malzeme,
        ]);

    }
    public function RenkEkle(Request $request){
        $get = $request->all();

        UrunRenk::Create($get);

        session()->flash("onay", "Renk Eklendi");

        return Redirect()->Back();

    }
    public function BoyutEkle(Request $request){
        $get = $request->all();

        UrunBoyut::Create($get);

        session()->flash("onay", "Boyut Eklendi");

        return Redirect()->Back();

    }
    public function DeleteRenk($id)
    {
        $get = UrunRenk::findorfail($id);

        $get->delete();
        session()->flash("onay", "Renk Silindi");

        return Redirect()->Back();



    }
    public function DeleteBoyut($id)
    {
        $get = UrunBoyut::findorfail($id);

        $get->delete();
        session()->flash("onay", "Boyut Silindi");

        return Redirect()->Back();



    }
    public function MalzemeEkle (Request $request) {
        $get = $request->all();
        Malzeme::Create($get);
        session()->flash("onay", "Malzeme Eklendi");
        return Redirect()->Back();

    }
    public function MalzemeSil($id)
    {
        $get = Malzeme::findorfail($id);
        $get->delete();
        session()->flash("onay", "Malzeme Silindi");
        return Redirect()->Back();
    }

}
