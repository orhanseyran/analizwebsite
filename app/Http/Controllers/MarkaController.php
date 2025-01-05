<?php

namespace App\Http\Controllers;

use App\Models\markalar;
use Illuminate\Http\Request;

class MarkaController extends Controller
{
    public function ekle(Request $request)
    {
        $validatedData = $request->validate([
            'marka_adi' => 'required',
            'resim' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max 2MB ve sadece belirtilen uzantılara izin veriyoruz
        ]);

        $imageName = null;

        if ($request->hasFile('resim')) {
            $imageName = time().'.'.$request->resim->extension();
            $request->resim->move(public_path('images'), $imageName);
        }

        $marka = new markalar();
        $marka->marka_adi = $validatedData['marka_adi'];
        $marka->resim = $imageName;
        $marka->save();

        return redirect()->back();
    }

    public function sil($id)
    {
        $marka = markalar::find($id);
        if (!$marka) {
            return response()->json(['message' => 'Marka bulunamadı'], 404);
        }

        $marka->delete();

        return redirect()->back();
    }
}
