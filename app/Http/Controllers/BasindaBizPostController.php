<?php

namespace App\Http\Controllers;

use App\Models\BasindaBizCreate;
use Illuminate\Http\Request;

class BasindaBizPostController extends Controller
{
    public function HaberAdd(Request $request){
        $request->validate([
            "baslik"=> "required",
            "link"=> "required",
            "kisa_aciklama"=> "required",
            "resim"=> "required",
        ]);
        $data = $request->all();

        BasindaBizCreate::create($data);

        return back()->with("success","Başarıyla Eklendi");
    }
    public function HaberEdit(Request $request,$id){
        $data = $request->all();

        // Find the record by ID
        $record = BasindaBizCreate::find($id);

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
     public function HaberDelete($id){
        $record = BasindaBizCreate::find($id)->delete();

        return back()->with("success","Başarıyla Silindi");


    }


}
