<?php

namespace App\Http\Controllers;

use App\Mail\BulkMail;
use App\Models\aboneler;
use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UrunEkleController extends Controller
{
    public function ekle(Request $request)
    {
   
        // Formdan gelen verileri doğrulayalım
        $validatedData = $request->validate([
            'baslik' => 'required',
            // Diğer gerekli alanlar için doğrulama kurallarını ekleyin
        ]);

        $kategori = Category::where("name",$request->kategori)->first();

        // Urun modeli üzerinden yeni bir ürün oluşturalım
        $urun = new Product();
        $urun->baslik = $validatedData['baslik'];

        $urun->aciklama = $request->aciklama;

        $urun->kategori = $request->kategori;
        $urun->marka = $request->marka;
        $urun->kargo = $request->kargo;
        $urun->eskifiyat = $request->eskifiyat;
        $urun->fiyat = $request->fiyat;
        $urun->commission = $kategori->commission;
        $urun->kdv = $request->kdv;
        $urun->meta_aciklama = $request->meta_aciklama;

        if(auth()->check()){
            $urun->user_id = auth()->user()->id;
        }

        $urun->active = true; // Varsayılan olarak aktif olabilir, isteğe bağlı olarak değiştirilebilir
        $urun->avg = 0; // Varsayılan olarak 0 olarak ayarlanabilir, isteğe bağlı olarak değiştirilebilir
        $urun->marka = $request->marka;
        $urun->ürün_hammaddesi = $request->ürün_hammaddesi;
        $urun->stok_miktarı = $request->stok_miktarı;
        $urun->stok_kodu = rand(0, 9999);

        // Resim alanlarını kontrol edelim ve yükleyelim
        for ($i = 1; $i <= 7; $i++) {
            if ($request->hasFile('r'.$i)) {
                $imageName = time().'_'.$i.'.'.$request->{'r'.$i}->extension();

              $request->{'r'.$i}->move(public_path('images'), $imageName);

                $urun->{'r'.$i} = $imageName;

            }
        }

        // Ürünü veritabanına kaydedelim
        $urun->save();

        $users = aboneler::where("durum",1)->get();
        $data = [
            'title' => 'Yeni Hizmetimiz Yayında',
            'body' => $urun->baslik,
            'fiyat' => number_format($urun->fiyat) ,
            'photo' =>'https://bayaffluence.com/images/'.$urun->r1,
             
        ];

      
        foreach ($users as $user) {
            Mail::to($user->email)->queue(new BulkMail($data));
        }


        // Başarı mesajıyla geri dönelim veya yönlendirme yapalım
        return redirect()->route("admin.product-list")->with('success', 'Ürün başarıyla Eklendi .');
    }
    public function düzenle(Request $request,$id)
    {
        // Formdan gelen verileri doğrulayalım


        $kategori = Category::where("name",$request->kategori)->first();

        // Urun modeli üzerinden yeni bir ürün oluşturalım
        $urun = product::find($id);
        $urun->baslik = $request->baslik;

        $urun->aciklama = $request->aciklama;

        $urun->kategori = $request->kategori;
        $urun->marka = $request->marka;
        $urun->kargo = $request->kargo;
        $urun->eskifiyat = $request->eskifiyat;
        $urun->fiyat = $request->fiyat;
        $urun->commission = $kategori->commission;
        $urun->kdv = $request->kdv;
        $urun->meta_aciklama = $request->meta_aciklama;

        if(auth()->check()){
            $urun->user_id = auth()->user()->id;
        }

        $urun->active = true; // Varsayılan olarak aktif olabilir, isteğe bağlı olarak değiştirilebilir
        $urun->avg = 0; // Varsayılan olarak 0 olarak ayarlanabilir, isteğe bağlı olarak değiştirilebilir
        $urun->marka = $request->marka;
        $urun->ürün_hammaddesi = $request->ürün_hammaddesi;
        $urun->stok_miktarı = $request->stok_miktarı;
        $urun->stok_kodu = rand(0, 9999);

        // Resim alanlarını kontrol edelim ve yükleyelim
        for ($i = 1; $i <= 7; $i++) {
            if ($request->hasFile('r'.$i)) {
                $imageName = time().'_'.$i.'.'.$request->{'r'.$i}->extension();

              $request->{'r'.$i}->move(public_path('images'), $imageName);

                $urun->{'r'.$i} = $imageName;

            }
        }

        // Ürünü veritabanına kaydedelim
        $urun->update();

        // Başarı mesajıyla geri dönelim veya yönlendirme yapalım
        return redirect()->route("admin.product-list")->with('success', 'Ürün başarıyla Düzenledi.');
    }
    public function deleteproduct($id){
        $product = Product::find($id);
        if ($product)
        {
            $product->delete();
            return redirect()->back()->with('sucsess','Başarıyla Silindi');
            # code...
        }
        return redirect()->back()->with('error','Ürün Bulunamadı');


    }
}
