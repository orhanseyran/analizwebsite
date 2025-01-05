<?php

namespace App\Http\Controllers;

use App\Models\ReklamYönetim;
use Illuminate\Http\Request;

class ReklamYönetimController extends Controller
{
    public function addbakiye(Request $request){
        $bakiye = new ReklamYönetim();

        $toplam_bakiye = ReklamYönetim::where("user_id", auth()->user()->id)->latest()->first();


        if($request->reklam_bakiyesi_1){

            $bakiye->reklam_bakiyesi_1 = $request->reklam_bakiyesi_1;


            $bakiye->toplam_reklam_bakiyesi += $request->reklam_bakiyesi_1;


        }
        elseif($request->reklam_bakiyesi_2){
            $bakiye->reklam_bakiyesi_2 = $request->reklam_bakiyesi_2;
            $bakiye->toplam_reklam_bakiyesi = $toplam_bakiye->toplam_reklam_bakiyesi + $request->reklam_bakiyesi_2;
        }
        elseif($request->reklam_bakiyesi_3){
            $bakiye->reklam_bakiyesi_3 = $request->reklam_bakiyesi_3;
            $bakiye->toplam_reklam_bakiyesi = $toplam_bakiye->toplam_reklam_bakiyesi + $request->reklam_bakiyesi_3;
        }
        elseif($request->reklam_bakiyesi_4){
            $bakiye->reklam_bakiyesi_4 = $request->reklam_bakiyesi_4;
            $bakiye->toplam_reklam_bakiyesi = $toplam_bakiye->toplam_reklam_bakiyesi + $request->reklam_bakiyesi_4;
        }
        elseif($request->reklam_bakiyesi_5){
            $bakiye->reklam_bakiyesi_5 = $request->reklam_bakiyesi_5;
            $bakiye->toplam_reklam_bakiyesi = $toplam_bakiye->toplam_reklam_bakiyesi + $request->reklam_bakiyesi_5;
        }



        $bakiye->user_id = auth()->user()->id;

        $bakiye->save();
        return redirect()->back()->with("success", "Reklam Bakiyesi Başarıyla Güncellendi");


    }
}
