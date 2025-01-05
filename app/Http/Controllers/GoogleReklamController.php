<?php

namespace App\Http\Controllers;

use App\Models\GoogleReklam;

use Illuminate\Http\Request;

class GoogleReklamController extends Controller
{
    public function GoogleReklamIndex()
    {
        $googleads = GoogleReklam::latest()->get();

        return view('admin.GoogleReklam.index',compact('googleads'));
    }
    public function GoogleReklamCreate(Request $request)
    {
       $get = $request->all();

       GoogleReklam::Create($get);

       session()->flash("onay","Google Reklam Başarıyla Eklandı");

       return redirect()->back();


    }
    public function GoogleReklamDelete($id)
    {
        $get = GoogleReklam::findorfail($id);

        $get->delete();

        session()->flash("onay","Google Reklam Başarıyla Silindi");

        return redirect()->back();
    }
}
