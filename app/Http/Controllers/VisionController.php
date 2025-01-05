<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GoogleVisionService;

class VisionController extends Controller
{
    protected $visionService;

    public function __construct(GoogleVisionService $visionService)
    {
        $this->visionService = $visionService;
    }

    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
        ]);

        $path = $request->file('image')->store('images');

        $texts = $this->visionService->detectText(storage_path('app/' . $path));

        return view('result', compact('texts'));
    }
}
