<?php

namespace App\Http\Controllers;

use App\Models\GoogleComments;
use Illuminate\Http\Request;

class GoogleCommentsController extends Controller
{
    public function GoogleComments(){
        $googleComments = GoogleComments::first();

        return view("admin.GoogleComments.index",[
            "googleComments"=> $googleComments
        ]);

    }
    public function GoogleCommentsadd(Request $request){
        $request->validate([
            "script_code"=> "required",
        ]);
        GoogleComments::updateOrCreate([
            "script_code"=> $request->script_code,
        ]);

        return back()->with("success","Youtube Kanalınız Başarıyla Eklendi");


    }
}
