<?php

namespace App\Http\Controllers;

use App\Models\Sayfa;
use Illuminate\Http\Request;

class SayfaYönetimPostController extends Controller
{
    public function sayfaadd(Request $request){
        $data = $request->all();

        Sayfa::create($data);

        return redirect()->back()->with("success","Sayfa başarıyla eklendi.");
    }
    public function sayfaedit(Request $request, $id){
        Sayfa::findOrFail($id)->updateOrCreate($request->all());
        return redirect()->back()->with("success","Sayfa başarıyla düzenlendi.");
    }
    public function sayfadelete($id){
        Sayfa::findOrFail($id)->delete();
        return redirect()->back()->with("success","Sayfa başarıyla silindi.");
    }
}
