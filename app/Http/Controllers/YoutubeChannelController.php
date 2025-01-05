<?php

namespace App\Http\Controllers;

use App\Models\YoutubeChannel;
use Illuminate\Http\Request;

class YoutubeChannelController extends Controller
{
    public function YoutubeChannel(){
        $YoutubeChannel = YoutubeChannel::first();
        return view("admin.YoutubeChannel.index",[
            "YoutubeChannel"=> $YoutubeChannel
        ]);

    }
    public function videoChannel(Request $request){
        $request->validate([
            "script_code"=> "required",
        ]);
        YoutubeChannel::updateOrCreate([
            "script_code"=> $request->script_code,
        ]);

        return back()->with("success","Youtube Kanalınız Başarıyla Eklendi");


    }
    //
}
