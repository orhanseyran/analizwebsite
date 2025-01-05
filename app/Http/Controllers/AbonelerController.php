<?php

namespace App\Http\Controllers;

use App\Models\aboneler;
use Illuminate\Http\Request;

class AbonelerController extends Controller
{
    public function indexaboneler(){
        $aboneler = aboneler::latest()->get();

        return view("admin.aboneler.index",[
            "aboneler"=> $aboneler
        ]);
    }
    public function addabone(Request $request, $id){
        $aboneler = new aboneler();
        $aboneler->name = $request->name;
        $aboneler->email = $request->email;
        $aboneler->phone = $request->phone;
        $aboneler->durum = $request->durum;

        $aboneler->save();

        return redirect()->back()->with("success","Abone Başarıyla Eklendi.");



    }
    public function editabone(Request $request, $id){
        $aboneler = aboneler::find($id);
        $aboneler->name = $request->name;
        $aboneler->email = $request->email;
        $aboneler->phone = $request->phone;
        $aboneler->durum = $request->durum;

        $aboneler->update();

        return redirect()->back()->with("success","Abone Başarıyla Güncellendi.");



    }
    public function deleteabone(Request $request, $id){
        $aboneler = aboneler::find($id);


        $aboneler->delete();

        return redirect()->back()->with("success","Abone Başarıyla Silindi.");



    }
}
