<?php

namespace App\Http\Controllers;

use App\Models\AltKategori;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryPostController extends Controller
{
    public function CategoryAdd(Request $request ){

        $this->validate($request,[
            'name' =>'required',
            'commission' =>'required',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->commission = $request->commission;

        $category->slug = $request->slug;
        $category->full_description = $request->full_description;
        $category->shortdescription = $request->shortdescription;

        session()->flash("onay",$category->name. " "."Adlı Kategori Başarıyla Eklendi");
        $category->save();

        return redirect()->back()->with('success','Category Added Successfully');

    }
    public function CategoryEdit(Request $request,$id ){



        $category = Category::findOrFail($id);
        $category->name = $request->name;

        $category->slug = $request->slug;
        $category->full_description = $request->full_description;
        $category->shortdescription = $request->shortdescription;

        session()->flash("onay",$category->name. " "."Adlı Kategori Başarıyla Güncellendi");
        $category->update();

        return redirect()->back();

    }


    public function Categorydelete($id){
        $category = Category::find($id);

        $category->delete();
        session()->flash("onay",$category->name. " "."Adlı Kategori Başarıyla Silindi");
        return redirect(route("admin.main-category"));
    }

    public function AltCategoryAdd(Request $request ){

        $this->validate($request,[
            'name' =>'required',
        ]);

        $category = new AltKategori();
        $category->name = $request->name;

        $category->slug = $request->slug;
        $category->parent_category = $request->parent_category;

        $category->full_description = $request->full_description;
        $category->shortdescription = $request->shortdescription;

        session()->flash("onay",$category->name. " "."Adlı Alt Kategori Başarıyla Eklendi");
        $category->save();

        return redirect()->back()->with('success','Category Added Successfully');

    }
    public function AltCategoryEdit(Request $request,$id ){



        $category = AltKategori::findOrFail($id);
        $category->name = $request->name;

        $category->slug = $request->slug;
        $category->full_description = $request->full_description;
        $category->parent_category = $request->parent_category;
        $category->shortdescription = $request->shortdescription;

        session()->flash("onay",$category->name. " "."Adlı Alt Kategori Başarıyla Güncellendi");
        $category->update();

        return redirect()->back();

    }


    public function AltCategorydelete($id){
        $ct = AltKategori::findOrFail($id);

        $ct->delete();
        session()->flash("onay",$ct->name. " "." Adlı Alt Kategori Başarıyla Silindi");
        return redirect(route("admin.sub-category"));
    }
}
