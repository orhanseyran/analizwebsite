<?php

namespace App\Http\Controllers;

use App\Models\Ozelsayfalar;
use Illuminate\Http\Request;

class ÖzelSayfaPostController extends Controller
{
    public function özelsayfaadd(Request $request){

        $request->validate([
            "sayfa_adi" => "required",
        ]);
        $data = $request->all();





        Ozelsayfalar::create($data);

        return redirect()->back()->with("success","İcerik başarıyla eklendi.");
    }
    public function özelsayfaedit(Request $request, $id){

        Ozelsayfalar::findOrFail($id)->update($request->all());


        return redirect()->back()->with("success","İcerik başarıyla düzenlendi.");
    }
    public function özelsayfadelete($id){
        Ozelsayfalar::findOrFail($id)->delete();
        return redirect()->back()->with("success","İcerik başarıyla silindi.");
    }
}
