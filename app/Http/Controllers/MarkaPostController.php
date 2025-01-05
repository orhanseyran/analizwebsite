<?php

namespace App\Http\Controllers;

use App\Models\Marka;
use Illuminate\Http\Request;

class MarkaPostController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'marka_name' => 'required|string',

        ]);

        if ($request->hasFile('marka_image')) {
            $image = $request->file('marka_image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/marka_images', $imageName); // veya başka bir disk veya yol kullanabilirsiniz
            $data['marka_image'] = $imageName;
        }

        Marka::create($data);

        return redirect()->back()->with('success', 'Marka başarıyla eklendi.');
    }

    // Bir markayı güncellemek için
    public function update(Request $request, Marka $marka)
    {
        $data = $request->validate([
            'marka_name' => 'required|string',

        ]);

        if ($request->hasFile('marka_image')) {
            $image = $request->file('marka_image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/marka_images', $imageName); // veya başka bir disk veya yol kullanabilirsiniz
            $data['marka_image'] = $imageName;
        }

        $marka->update($data);

        return redirect()->back()->with('success', 'Marka başarıyla güncellendi.');
    }

    // Bir markayı silmek için
    public function destroy(Marka $marka)
    {
        $marka->delete();

        return redirect()->back()->with('success', 'Marka başarıyla silindi.');
    }
}
