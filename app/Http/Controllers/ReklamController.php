<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Reklam;
use App\Models\ReklamYönetim;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReklamController extends Controller

{
    protected $reklamAdi;
    protected $reklamlatest;

    public function __construct()
    {
        $this->configure();
        $this->reklamlatest = new Reklam();
    }

    protected function configure(){
        $this->reklamAdi = rand(0, 99999) . " " . "Nolu Reklam";
    }


    public function index(){
        $reklamyönetim = ReklamYönetim::where("user_id", auth()->user()->id)->latest()->firstOrCreate();
        $reklamlar = Reklam::latestForUser()->get();

        return view('admin.reklam-yönetimi.reklamyönetimi',[
            'reklamlar' => $reklamlar,
            'reklamyönetim' => $reklamyönetim,
        ]);
    }
    public function adsadd(){
        $ürünler = product::where('stok_miktarı', '>', 0)->latest()->get();

        $toplam_bakiye = ReklamYönetim::where("user_id", auth()->user()->id)->latest()->first();

        $reklamadı = $this->reklamAdi;
        return view('admin.reklam-yönetimi.reklamekle',[
            'ürünler' => $ürünler,
            'reklamadı' => $reklamadı,
            'toplam_bakiye' => $toplam_bakiye,
        ]);
    }

    public function store(Request $request)
    {
        $reklam_başlangic = Carbon::parse($request->input('reklam_başlangic'));
        $reklam_bitiş = Carbon::parse($request->input('reklam_bitiş'));

        if ($reklam_bitiş->lt($reklam_başlangic)) {
            return redirect()->back()->with('hata', 'Reklam Başlangıç tarihi reklam bitiş tarihinden büyük olamaz');
        }

        $toplam_bakiye = ReklamYönetim::where("user_id", auth()->user()->id)->latest()->first();

        if ($request->reklam_bütce > $toplam_bakiye->toplam_reklam_bakiyesi) {
            session()->flash('Hata', 'Reklam Bütçesi Toplam Reklam Bütçesinden büyük olamaz');
            return redirect()->back();
            # code...
        }
        // Formdan gelen verileri doğrulayın


        // Yeni reklam kaydı oluşturun
        $reklam = new Reklam();
        $reklam->reklam_tipi = $request->reklam_tipi;
        $reklam->reklam_adi = $request->reklam_adi;

        $reklam->günlük_bütce = $request->günlük_bütce ? 1 : 0;
        $reklam->toplam_bütce = $request->toplam_bütce ? 1 : 0;


        $reklam->reklam_başlangic = $request->reklam_başlangic;
        $reklam->tbm = $request->tbm;


        $reklam->reklam_bitiş = $request->reklam_bitiş;
        $reklam->reklam_bütce = $request->reklam_bütce;
        $reklam->user_id = auth()->user()->id;


        if(Carbon::parse($request->reklam_başlangic)->isToday()){
            $reklam->Aktif = "Aktif";
            $toplam_bakiye->create([
                'user_id' => auth()->user()->id,
                'toplam_reklam_bakiyesi' => $toplam_bakiye->toplam_reklam_bakiyesi - $request->reklam_bütce,
            ]);

        }
        else{
            $reklam->Aktif = "Beklemede";
        }







        $ürünler = $request->input('ürünler');
        if(is_array($ürünler)){
            $reklam->ürünler = implode(",", $request->input('ürünler'));

            foreach ($ürünler as $ürün) {
                if (Carbon::parse($request->reklam_başlangic)->isToday()) {

                    $ürün = product::where('id', $ürün)->update([
                        'reklam' => "Aktif",
                        "tbm" => $request->tbm,
                    ]);

                }
                else{
                    $ürün = product::where('id', $ürün)->update([
                        'reklam' => "Beklemede",
                    ]);

                }
            }

        }else{
            $reklam->ürünler = $ürünler;
        }

        $reklam->tbm = $request->tbm;
    
        $reklam->save();

        // Seçilen ürünler için reklam ilişkisi oluşturun
        // $reklam->products()->sync($request->ürün_id);

        return redirect()->back()->with('success', 'Reklam başarıyla oluşturuldu!');
    }
}
