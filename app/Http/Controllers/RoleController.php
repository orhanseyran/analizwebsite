<?php

namespace App\Http\Controllers;
use App\Models\Role;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function roleget(){
        $role = Role::latest()->get();
        return view("admin.rol_yönetimi.index",[
            "role"=> $role
        ]);
    }
    public function rolepost(Request $request){
        $validate =  $request->validate([
            "yetki"=> "required",
            "durum"=> "required",
        ]);
        if(!$validate ){
            return back()->withErrors($validate)->withInput();
        }
        $data = $request->all();
        if ($data == null) {
           return redirect()->back()->with("error","Lütfen Boş Alan Bırakmayınız");
        }

        Role::create($data);

        session()->flash("success","Rol Başarıyla Eklendi");



        return redirect()->back();
    }
    public function roleupdate(Request $request,$id){
        $data = $request->all();
        $role = Role::find($id);
        $role->update($data);
        session()->flash("success","Rol Başarıyla Güncellendi");
        return redirect()->back();
    }
    public function roleDelete($id){
        $role = Role::find($id);
        $role->delete();
        session()->flash("success","Rol Başarıyla Silindi");
        return redirect()->back();
    }

}
