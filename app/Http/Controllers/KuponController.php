<?php

namespace App\Http\Controllers;

use App\Models\kuponlar;
use Illuminate\Http\Request;

class KuponController extends Controller
{
    public function indexkuponadd(){
        return view('admin.kupon.kupon-oluştur.kupon-add');

    }
    public function indexkuponlist(){
        $kupon = kuponlar::kupons();

        return view('admin.kupon.kuponlarım.kuponlar',[
            'kupon'=> $kupon
        ]);

    }
    public function kupondelete($id){
        $kupon = kuponlar::find($id);
        $kupon->delete();
        return redirect()->back()->with('success','Kupon Başarıyla Silindi');
    }
}
