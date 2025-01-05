<?php

namespace App\Http\Controllers;

use App\Models\ResimliYorum;

use Illuminate\Http\Request;

class ResimliYorumController extends Controller
{
    public function ResimliYorumindex(){
        $resim = ResimliYorum::latest()->get();
        return view("admin.resimliyorum.index",[
            "resim"=> $resim
        ]);
    }
    public function ResimliYorumdetail($id){
        $resim = ResimliYorum::find($id);
        $resimlast = ResimliYorum::latest()->get();

        return view("frontend.müsteri.detail.detail",[
            "resim"=> $resim,
            "resimlast"=> $resimlast
        ]);
    }

    public function Add(Request $request){
      $validate =  $request->validate([
            'resim'=> "required",
        ]);

        if(!$validate ){
            return back()->withErrors($validate)->withInput();
        }
        $data = $request->all();
        ResimliYorum::create($data);
        return back()->with("success","Başarıyla Eklendi");
    }
    public function ResimliYorumEdit(Request $request,$id){
        $data = $request->all();

        // Find the record by ID
        $record = ResimliYorum::find($id);

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
    public function ResimliYorumDelete($id){
        $record = ResimliYorum::find($id)->delete();
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
