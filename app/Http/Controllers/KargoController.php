<?php

namespace App\Http\Controllers;

use App\Models\kargo;
use Illuminate\Http\Request;

class KargoController extends Controller
{
    public function ekle(Request $request)
    {
        $validatedData = $request->validate([
            'kargo_adi' => 'required',
            'resim' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB ve sadece belirtilen uzantılara izin veriyoruz
        ]);

        $imageName = null;

        if ($request->hasFile('resim')) {
            $imageName = time().'.'.$request->resim->extension();
            $request->resim->move(public_path('images'), $imageName);
        }

        $marka = new kargo();
        $marka->kargo_adi = $validatedData['kargo_adi'];
        $marka->resim = $imageName;
        $marka->save();

        return redirect()->back();
    }

    public function sil($id)
    {
        $marka = kargo::find($id);
        if (!$marka) {
            return response()->json(['message' => 'kargo bulunamadı'], 404);
        }

        $marka->delete();

        return redirect()->back();
    }
    //
}
