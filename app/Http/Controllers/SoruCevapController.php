<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\SoruCevap;
use Illuminate\Http\Request;

class SoruCevapController extends Controller
{
    public function ÜrünSoru(){
        $soru = SoruCevap::where("satici_id",auth()->user()->id)->where("soru_türü","Ürün")->get();
        $ürün = product::where("user_id",auth()->user()->id)->get();






        return view('admin.soru-cevap.ürün-soru.ürünsorulari',[
            "soru" => $soru,
            "ürün" => $ürün,
        ]);

    }
    public function Ürüncevap(Request $request, $id)
        {
            // Güvenlik kontrolleri
            $soruCevap = SoruCevap::where("satici_id", auth()->user()->id)
                                ->where("id", $id)
                                ->first();

            if (!$soruCevap) {
                return redirect()->back()->withErrors(['error' => 'Bu kayıt sizin değil veya bulunamadı.']);
            }

            // Request validasyonu
            $validatedData = $request->validate([
                'cevap' => 'required|string',
            ]);

            // Cevap güncelleme
            try {
                $soruCevap->update([
                    "cevap" => $validatedData['cevap'],
                    "durum" => 1,
                ]);

                return redirect()->back()->with('success', 'Cevap başarıyla güncellendi.');
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['error' => 'Cevap güncellenirken bir hata oluştu.']);
            }
        }
        public function siparişcevap(Request $request, $id)
        {
            // Güvenlik kontrolleri
            $soruCevap = SoruCevap::where("satici_id", auth()->user()->id)
                                ->where("id", $id)
                                ->first();

            if (!$soruCevap) {
                return redirect()->back()->withErrors(['error' => 'Bu kayıt sizin değil veya bulunamadı.']);
            }

            // Request validasyonu
            $validatedData = $request->validate([
                'cevap' => 'required|string',
            ]);

            // Cevap güncelleme
            try {
                $soruCevap->update([
                    "cevap" => $validatedData['cevap'],
                    "durum" => 1,
                ]);

                return redirect()->back()->with('success', 'Cevap başarıyla güncellendi.');
            } catch (\Exception $e) {
                return redirect()->back()->withErrors(['error' => 'Cevap güncellenirken bir hata oluştu.']);
            }
        }

    public function SiparişSoru(){
        $soru = SoruCevap::where("satici_id",auth()->user()->id)->where("soru_türü","Sipariş")->get();
        $ürün = product::where("user_id",auth()->user()->id)->get();
        return view('admin.soru-cevap.sipariş-soru.siparişsorulari',[
            "soru" => $soru,
            "ürün" => $ürün,
        ]);

    }
}
