<?php

namespace App\Http\Controllers;

use App\Models\GoogleAuth;
use Illuminate\Http\Request;

class SosyalMedyaController extends Controller
{
    public function sosyalmedyaindex(){
        $sosyal = GoogleAuth::where("name","google")->first();
        return view("admin.sosyalmedya.index",[
            "sosyal"=> $sosyal
        ]);

    }
    public function sosyalMedyaadd(Request $request){
        $sosyalMedya = GoogleAuth::where("name","google")->first();

        $this->validate($request,[
            "client_id"=>"required",
            "client_secret"=>"required",
            "redirect_uri"=>"required",
        ]);

        if (!$sosyalMedya ) {
            $sosyalMedya->create([
                "client_id" => $request->client_id,
                "client_secret" => $request->client_secret,
                "redirect_uri" => $request->redirect_uri,
            ]);
            # code...
        }
        else{
            $sosyalMedya->update([
                "client_id" => $request->client_id,
                "client_secret" => $request->client_secret,
                "redirect_uri" => $request->redirect_uri,
            ]);
        }

        return redirect()->back()->with("success","Güncelleme Başarılı");
    }
}
