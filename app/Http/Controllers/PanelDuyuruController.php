<?php

namespace App\Http\Controllers;

use App\Models\PanelDuyuru;
use Illuminate\Http\Request;

class PanelDuyuruController extends Controller
{
    public function panelduyuruindex(){
        $panelduyuru = PanelDuyuru::latest()->get();
        return view("admin.PanelDuyuruSistemi.index",[
            "panelduyuru"=> $panelduyuru
        ]);
    }
    public function addindexduyuru(Request $request){
        $request->validate([
            "duyuru_resim"=> "required",
        ]);
        $data = $request->all();
        PanelDuyuru::create($data);
        return redirect()->back()->with("success","Duyuru Başarıyla Eklendi");
    }
    public function editindexduyuru(Request $request, $id){
        $data = PanelDuyuru::find($id);
        $data->duyuru_resim = $request->duyuru_resim;
        $data->aktif = $request->aktif;

        $data->update();
        return redirect()->back()->with("success","Duyuru Başarıyla Güncellendi");


    }
    public function deleteduyuru($id){
        $data = PanelDuyuru::find($id);
        if ($data == null) {
            return redirect()->back()->with("error","Duyuru Bulunamadı");
            # code...
        }
        $data->delete();
        return redirect()->back()->with("success","Duyuru Başarıyla silindi");
    }

}
