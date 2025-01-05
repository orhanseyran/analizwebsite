<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;

class SaticiController extends Controller
{
    public function indexeditsatici($id){
        $satici = User::findOrFail($id);
        return view("admin.satici.saticiprofili.vendor-profile",[
            "satici"=> $satici
        ]);
    }

    public function updatesaticiuser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'Soyad' => 'required|string|max:255',
            'Email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'oldPassword' => 'nullable|string|min:8', // Eski şifre doğrulaması için eklenmiştir
            'password' => 'nullable|string|min:8|confirmed',
            'password_confirmation' => 'nullable|string|min:8', // Şifre doğrulaması
            'profilresim' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->Soyad = $request->input('Soyad');
        $user->email = $request->input('Email');

        // Eski şifrenin doğruluğunu kontrol et ve yeni şifreyi güncelle
        if ($request->filled('oldPassword') && $request->filled('password')) {
            if (Hash::check($request->input('oldPassword'), $user->password)) {
                if ($request->input('password') === $request->input('password_confirmation')) {
                    $user->password = Hash::make($request->input('password'));
                } else {
                    return back()->withErrors(['password_confirmation' => 'Yeni şifreler eşleşmiyor']);
                }
            } else {
                return back()->withErrors(['oldPassword' => 'Eski şifre yanlış']);
            }
        }

        if ($request->hasFile('profilresim')) {
            $imageName = time() . '.' . $request->profilresim->extension();
            $request->profilresim->move(public_path('images'), $imageName);
            $user->profilresim = $imageName;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profil başarıyla güncellendi.');
    }
    public function updatesaticiadmin(Request $request, $id)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'Soyad' => 'required|string|max:255',
        //     'Email' => 'required|string|email|max:255|unique:users,email,' . $id,
        //     'oldPassword' => 'nullable|string|min:8', // Eski şifre doğrulaması için eklenmiştir
        //     'password' => 'nullable|string|min:8|confirmed',
        //     'password_confirmation' => 'nullable|string|min:8', // Şifre doğrulaması
        //     'profilresim' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->Soyad = $request->input('Soyad');
        $user->email = $request->input('Email');

        // Eski şifrenin doğruluğunu kontrol et ve yeni şifreyi güncelle
        if ($request->filled('oldPassword') && $request->filled('password')) {
            if (Hash::check($request->input('oldPassword'), $user->password)) {
                if ($request->input('password') === $request->input('password_confirmation')) {
                    $user->password = Hash::make($request->input('password'));
                } else {
                    return back()->withErrors(['password_confirmation' => 'Yeni şifreler eşleşmiyor']);
                }
            } else {
                return back()->withErrors(['oldPassword' => 'Eski şifre yanlış']);
            }
        }

        if ($request->hasFile('profilresim')) {
            $imageName = time() . '.' . $request->profilresim->extension();
            $request->profilresim->move(public_path('images'), $imageName);
            $user->profilresim = $imageName;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profil başarıyla güncellendi.');
    }

    //
}
