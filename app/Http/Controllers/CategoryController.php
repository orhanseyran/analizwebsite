<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Categorytrend;
use Illuminate\Support\Facades\Http;

class CategoryController extends Controller
{
    public function fetcharbituis($id)
    {
        // API'den veriyi çekin
        $response = Http::get('https://api.trendyol.com/sapigw/product-categories/' . $id . '/attributes');
        $data = $response->json();
        dd($data["categoryAttributes"]);

        // Ana kategorileri kaydedin


        return response()->json(['status' => 'success']);
    }

    public function fetchCategories()
    {
        // API'den veriyi çekin
        $response = Http::get('https://api.trendyol.com/sapigw/product-categories');
        $data = $response->json();

        // Ana kategorileri kaydedin
        $this->saveCategories($data['categories']);

        return response()->json(['status' => 'success']);
    }

    private function saveCategories(array $categories, $parentId = null)
    {
        foreach ($categories as $category) {
            // Kategori verilerini ayarla
            $categoryId = $category['id'] ?? null;
            $categoryName = $category['name'] ?? 'Unknown';
            $categoryParentId = $parentId ?? 0;

            // Veritabanına kaydedin
            $savedCategory = Categorytrend::updateOrCreate(
                ['id' => $categoryId],
                ['name' => $categoryName, 'parent_id' => $categoryParentId]
            );

            // Alt kategoriler varsa, rekürsif olarak kaydedin
            if (!empty($category['subCategories'])) {
                $this->saveCategories($category['subCategories'], $savedCategory->id);
            }
        }
    }


}
