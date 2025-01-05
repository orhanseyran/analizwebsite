<?php

namespace App\Http\Controllers;

use App\Models\Sayfa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SayfaYönetimiController extends Controller
{
    public function TümSayfalarİndex(){
        $sayfa = Sayfa::latest()->get();

        return view("admin.KurumsalYönetim.Sayfalar.TümSayfalar.index",[
            "sayfa" => $sayfa
        ]);
    }
    public function TümSayfalaradd(){

        return view("admin.KurumsalYönetim.Sayfalar.TümSayfalar.ekle.add");
    }
    public function TümSayfalaredit($id){
        return view("admin.KurumsalYönetim.Sayfalar.TümSayfalar.düzenle.edit");
    }

    public function Hakkımızdaİndex(){
        $sayfa = Sayfa::where("sayfa_adi","Hakkımızda")->latest()->first();

        return view("admin.KurumsalYönetim.Sayfalar.Hakkımızda.index",[
            "sayfa" => $sayfa
        ]);
    }
    public function Hakkımızdaadd(){


        return view("admin.KurumsalYönetim.Sayfalar.Hakkımızda.ekle.add");
    }
    public function Hakkımızdaedit($id){

        return view("admin.KurumsalYönetim.Sayfalar.Hakkımızda.düzenle.edit");
    }
    public function Gizlilikİndex(){
        $gizlilik = DB::table("sayfalar")->where("sayfa_adi","Gizlilik")->latest()->first();

        return view("admin.KurumsalYönetim.Sayfalar.Gizlilik.index",[
            "gizlilik" => $gizlilik
        ]);
    }
    public function Gizlilikadd(){



        return view("admin.KurumsalYönetim.Sayfalar.Gizlilik.ekle.add");
    }
    public function Gizlilikedit($id){
        $get = DB::table("sayfalar")->find($id);

        return view("admin.KurumsalYönetim.Sayfalar.Gizlilik.düzenle.edit",[
            "get" => $get
        ]);
    }
    public function BizKimizİndex(){
        $sayfa = Sayfa::where("sayfa_adi","Tüm Sayfalar")->latest()->first();
        return view("admin.KurumsalYönetim.Sayfalar.BizKimiz.index",[
            "sayfa"=> $sayfa
        ]);
    }
    public function BizKimizadd(){
        return view("admin.KurumsalYönetim.Sayfalar.BizKimiz.ekle.add");
    }
    public function BizKimizedit($id){
        return view("admin.KurumsalYönetim.Sayfalar.BizKimiz.düzenle.edit");
    }
}
