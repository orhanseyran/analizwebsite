<?php

namespace App\Http\Controllers;
use App\Models\SaticiBasvuru;
use App\Models\User;

use Illuminate\Http\Request;

class SaticiBasvuruController extends Controller
{
    public function index()
    {
        $satici = SaticiBasvuru::all();

        return view('admin.SaticiBasvuru.satici_basvuru',
    compact('satici'));
    }
    public function satici_basvuru_ekle(Request $request)
    {
        $request->validate([
            'satici_adi' => 'required',
            'satici_soyadi' => 'required',
            'satici_email' => 'required',
            'satici_telefon' => 'required',
            'satici_adres' => 'required',
            'satici_tck' => 'required',
            'satici_firma_vkn' => 'required',
            'satici_firma_türü' => 'required',
            'satici_firma_adres' => 'required',
            'satici_firma_telefon' => 'required',
            'satici_firma_email' => 'required',
            'satici_firma_web' => 'required',
            'satici_firma_mağazaadı' => 'required',
        ]);
        $get = $request->all();
        SaticiBasvuru::create($get);
        sesion()->flash("onay", "Basvuru Eklendi");
        return redirect()->route('satici_basvuru');


    }
    public function saticionay($id)
    {
        $satici = SaticiBasvuru::find($id);
        $satici->durum = 1;


        $satici->save();
        if ($satici->durum == 0) {
            $user = new User();
            $user->name = $satici->satici_adi;
            $user->email = $satici->satici_email;
            $user->Role = "Satici";
            $user->password = bcrypt(rand(100000, 999999));
            $user->save();
            Mail::to($satici->satici_email)->queue(new SaticiOnayMail($user));

            # code...
        }

        return redirect()->back();


    }
    public function satici_basvuru_red($id)
    {
        $satici = SaticiBasvuru::find($id);
        $satici->durum = 2;
        $satici->save();
        return redirect()->back();
    }
    public function satici_basvuru_sil($id)
    {
        $satici = SaticiBasvuru::find($id);
        $satici->delete();
        return redirect()->back();
    }

}
