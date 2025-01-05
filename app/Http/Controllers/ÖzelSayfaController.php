<?php

namespace App\Http\Controllers;

use App\Models\BasindaBizCreate;
use App\Models\Ozelsayfalar;
use Illuminate\Http\Request;

class ÖzelSayfaController extends Controller
{
    public function BasindaBiz(){
        $basin = BasindaBizCreate::latest()->get();
        return view("admin.KurumsalYönetim.ÖzelSayfalar.BasindaBiz.index",[
            "basin"=> $basin
        ]);
    }
    public function SliderYönetimi(){
        $sayfa = Ozelsayfalar::where("sayfa_adi", "Slider")->get();


        return view("admin.KurumsalYönetim.ÖzelSayfalar.SliderYönetimi.index",[
            "sayfa" => $sayfa
        ]);
    }
    public function Projelerimiz(){
        $sayfa = Ozelsayfalar::where("sayfa_adi", "Projeler")->get();

        return view("admin.KurumsalYönetim.ÖzelSayfalar.Projelerimiz.index",[
            "sayfa" => $sayfa
        ]);
    }
    public function Galeri(){
        $sayfa = Ozelsayfalar::where("sayfa_adi", "Galeri")->get();

        return view("admin.KurumsalYönetim.ÖzelSayfalar.Galeri.index",[
            "sayfa" => $sayfa
        ]);
    }
    public function İletişimSayfasi(){
        $sayfa = Ozelsayfalar::where("sayfa_adi", "İletişim")->get();

        return view("admin.KurumsalYönetim.ÖzelSayfalar.İletişim.index",[
            "sayfa" => $sayfa
        ]);
    }
    public function PortfolyoYönetimi(){
        $sayfa = Ozelsayfalar::where("sayfa_adi", "Portfolyo")->get();



        return view("admin.KurumsalYönetim.ÖzelSayfalar.PortfolyoYönetimi.index",[
            "sayfa" => $sayfa
        ]);
    }
    public function SS(){
        $sayfa = Ozelsayfalar::where("sayfa_adi", "SSS")->get();

        return view("admin.KurumsalYönetim.ÖzelSayfalar.SS.index",[
            "sayfa" => $sayfa
        ]);
    }
    public function Partnerlerimiz(){
        $sayfa = Ozelsayfalar::where("sayfa_adi", "Partner")->get();

        return view("admin.KurumsalYönetim.ÖzelSayfalar.Partnerlerimiz.index",[
            "sayfa" => $sayfa
        ]);
    }
    public function Referanslarımız(){
        $sayfa = Ozelsayfalar::where("sayfa_adi", "Referans")->get();

        return view("admin.KurumsalYönetim.ÖzelSayfalar.Referanslarımız.index",[
            "sayfa" => $sayfa
        ]);
    }
    public function Ekibimiz(){
        $sayfa = Ozelsayfalar::where("sayfa_adi", "Ekip")->get();

        return view("admin.KurumsalYönetim.ÖzelSayfalar.Ekibimiz.index",[
            "sayfa" => $sayfa
        ]);
    }
    public function Seminer(){
        $sayfa = Ozelsayfalar::where("sayfa_adi", "Seminer")->get();

        return view("admin.KurumsalYönetim.ÖzelSayfalar.Seminer.index",[
            "sayfa" => $sayfa
        ]);
    }

}
