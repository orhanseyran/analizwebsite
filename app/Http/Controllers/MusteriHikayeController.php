<?php

namespace App\Http\Controllers;

use App\Models\MusteriHikaye;
use Illuminate\Http\Request;

class MusteriHikayeController extends Controller
{
    public function MusteriHikayeindex(){
        $hikaye = MusteriHikaye::latest()->get();
        return view("admin.müsteri.index",[
            "hikaye"=> $hikaye
        ]);
    }
    public function MusteriHikayedetail($id){
        $hikaye = MusteriHikaye::find($id);
        $hikayelast = MusteriHikaye::latest()->get();

        return view("frontend.müsteri.detail.detail",[
            "hikaye"=> $hikaye,
            "hikayelast"=> $hikayelast
        ]);
    }

    public function MüsteriHikayeAdd(Request $request){
      $validate =  $request->validate([
            "ad_soyad"=> "required",
            'hikaye'=> "required",
            'resim'=> "required",
            'video_link'=> "required",
            'ciro'=> "required",
            'kar_oranı'=> "required",
        ]);

        if(!$validate ){
            return back()->withErrors($validate)->withInput();
        }
        $data = $request->all();
        MusteriHikaye::create($data);
        return back()->with("success","Başarıyla Eklendi");
    }
    public function MüsteriHikayeEdit(Request $request,$id){
        $data = $request->all();

        // Find the record by ID
        $record = MusteriHikaye::find($id);

        // Check if the record exists
        if ($record) {
            // Update the record
            $record->update($data);

            // Redirect back with a success message
            return back()->with("success", "Başarıyla Güncellendi");
        } else {
            // Record not found, redirect back with an error message
            return back()->with("error", "Kayıt bulunamadı");
        }


    }
    public function MüsteriHikayeDelete($id){
        $record = MusteriHikaye::find($id)->delete();
        if ($record) {
            // Update the record
            $record->delete();

            // Redirect back with a success message
            return back()->with("success", "Başarıyla Silindi");
        } else {
            // Record not found, redirect back with an error message
            return back()->with("error", "Kayıt bulunamadı");
        }


    }
}
