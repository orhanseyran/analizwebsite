<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\blog_kategori;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   public function blogadd(Request $request){
    $request->validate([
        'baslik' =>'required',
        'icerik' =>'required',
    ]);

    $blog = new blog();
    $blog->baslik = $request->baslik;
    $blog->icerik = $request->icerik;
    $blog->resim = $request->resim;
    $blog->user_name = auth()->user()->name;
    $blog->anahtar_kelime = $request->anahtar_kelime;
    $blog->Meta_aciklama = $request->Meta_aciklama;
    $blog->kategori = $request->kategori;

    $blog->save();

    return redirect()->back()->with('success','Blog başarıyla eklendi');

   }

   public function blogedit(Request $request,$id){


    $blog = blog::find($id);
    $blog->baslik = $request->baslik;
    $blog->icerik = $request->icerik;
    $blog->resim = $request->resim;
    $blog->anahtar_kelime = $request->anahtar_kelime;
    $blog->Meta_aciklama = $request->Meta_aciklama;
    $blog->kategori = $request->kategori;

    $blog->update();

    return redirect()->back()->with('success','Blog başarıyla Düzenlendi');

   }

   public function blogdel($id){
    $blog = blog::find($id);
    $blog->delete();
    return redirect()->back()->with('success','Blog başarıyla Silindi');

   }

   public function BlogKategoriadd(Request $request){
    $request->validate([
        'baslik'=> 'required',
    ]);

    $upload = $request->all();
    $blog = blog_kategori::create($upload);

    $blog->user_name = auth()->user()->name;


    $blog->save();

    return redirect()->back()->with('success','Blog Başarıyla Eklendi');
   }
   public function BlogKategoriedit(Request $request,$id){

    $upload = $request->all();
    $blog = blog_kategori::find($id);
    $blog->user_name = auth()->user()->name;
    $blog->update();

    $blog->update($upload);

    return redirect()->back()->with('success','Blog Başarıyla Güncellendi');
   }
   public function blogKategoridelete($id){
    $blog = blog_kategori::find($id);
    $blog->delete();
    return redirect()->back()->with('success','Blog Başarıyla Silindi');
   }



}
