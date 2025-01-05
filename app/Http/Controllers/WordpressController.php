<?php

namespace App\Http\Controllers;

use App\Models\WooCommereWordpress;
use App\Models\WordpresJwt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Automattic\WooCommerce\Client;
use Illuminate\Pagination\LengthAwarePaginator;

class WordpressController extends Controller
{


    protected $woocommerce;

    public function __construct(){

    }




    public function index()
    {
       $wordpress= WordpresJwt::latest()->get();


       return view('admin.wordpress.index', compact('wordpress'));
    }
    public function getJwt(Request $request){

        $response = Http::post("{$request->site_url}/wp-json/jwt-auth/v1/token", [
            'username' => $request->username,
            'password' => $request->password,
        ]);
        if ($response->successful()) {
            $token = $response->json();

            $site_url = WordpresJwt::where('site_url', $request->site_url)->first();
            if ($site_url) {
                $site_url->update([
                    'token' => $token['token'],
                    'username' => $request->username,
                    'password' => $request->password,
                ]);
            }
            else{
                WordpresJwt::create([
                    'site_url' => $request->site_url,
                    'token' => $token['token'],
                    'username' => $request->username,
                    'password' => $request->password,
                ]);
            }



            session()->flash('success', 'WordPress JWT token Başarıyla alındı.');

            return redirect()->back();
        }
        else {
            session()->flash('error', 'WordPress JWT token alınamadı.');
            return redirect()->back();
         }
    }
    public function getBlog()
    {
        $wordpress = WordpresJwt::where('durum', 1)->first();

        $response = Http::get("{$wordpress->site_url}/posts");
        $posts = $response->json();


// dd($posts);


        return view('admin.wordpress.blog',[
            'wordpress' => $wordpress,
            'posts' => $posts,
        ]);
    }
    public function getCategory()
    {
        $wordpress = WordpresJwt::where('durum', 1)->first();

        $response = Http::get("{$wordpress->site_url}/posts");

        dd($categories);
    }
    public function addBlog(Request $request)
    {

        // Gerekli validasyonları ekleyin
        $request->validate([
            'site_url' => 'required|url',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => 'required|string|in:publish,draft',
            'featured_media' => 'nullable|file|mimes:jpg,jpeg,png|max:2048', // Resim için kontrol
        ]);

        // JWT kontrolü
        $jwt = WordpresJwt::where('site_url', $request->site_url)->first();
        if (!$jwt) {
            session()->flash('error', 'Geçerli bir site URL veya token bulunamadı.');
            return redirect()->back();
        }

        // Görsel yükleme işlemi
        $featuredMediaId = null;
        if ($request->hasFile('featured_media')) {
            $file = $request->file('featured_media');
            $response = Http::withToken($jwt->token)
                ->attach('file', fopen($file->getRealPath(), 'r'), $file->getClientOriginalName())
                ->post("{$request->site_url}/wp-json/wp/v2/media");

            if ($response->successful()) {
                $featuredMediaId = $response->json()['id']; // Yüklenen görselin ID'si
            } else {
                session()->flash('error', 'Görsel yükleme başarısız: ' . $response->body());
                return redirect()->back();
            }
        }

        // Blog gönderisi oluşturma
        $postResponse = Http::withToken($jwt->token)->post("{$request->site_url}/wp-json/wp/v2/posts", [
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status,
            'featured_media' => $featuredMediaId, // Görsel ID'si (null olabilir)
        ]);

        // Blog gönderisi kontrolü
        if ($postResponse->successful()) {
            session()->flash('success', 'Blog başarıyla oluşturuldu.');
            return redirect()->back();
        }

        // Hata durumunda geri dön
        session()->flash('error', 'Blog oluşturulurken bir hata oluştu: ' . $postResponse->body());
        return redirect()->back();
    }
    public function updateBlog(Request $request)
{

    // Gerekli validasyonları ekleyin
    $request->validate([
        'site_url' => 'required|url',
        'post_id' => 'required|integer', // Güncellenecek yazının ID'si
        'title' => 'nullable|string|max:255',
        'content' => 'nullable|string',
        'status' => 'nullable|string|in:publish,draft',
        'featured_media' => 'nullable|file|mimes:jpg,jpeg,png|max:2048', // Resim için kontrol
    ]);

    // JWT kontrolü
    $jwt = WordpresJwt::where('site_url', $request->site_url)->first();

    if (!$jwt) {
        session()->flash('error', 'Geçerli bir site URL veya token bulunamadı.');
        return redirect()->back();
    }

    // Görsel güncelleme işlemi
    $featuredMediaId = null;
    if ($request->hasFile('featured_media')) {
        $file = $request->file('featured_media');
        $response = Http::withToken($jwt->token)
            ->attach('file', fopen($file->getRealPath(), 'r'), $file->getClientOriginalName())
            ->post("{$request->site_url}/wp-json/wp/v2/media");

        if ($response->successful()) {
            $featuredMediaId = $response->json()['id']; // Yüklenen görselin ID'si
        } else {
            session()->flash('error', 'Görsel yükleme başarısız: ' . $response->body());
            return redirect()->back();
        }
    }

    // Blog gönderisi güncelleme
    $postData = array_filter([
        'title' => $request->title,
        'content' => $request->content,
        'status' => $request->status,
        'featured_media' => $featuredMediaId,
    ]);

    $postResponse = Http::withToken($jwt->token)
        ->post("{$request->site_url}/wp-json/wp/v2/posts/{$request->post_id}", $postData);

    // Blog gönderisi kontrolü
    if ($postResponse->successful()) {
        session()->flash('success', 'Blog başarıyla güncellendi.');
        return redirect()->back();
    }

    // Hata durumunda geri dön
    session()->flash('error', 'Blog güncellenirken bir hata oluştu: ' . $postResponse->body());
    return redirect()->back();
}

public function deleteBlog(Request $request)
{
    $token = WordpresJwt::where('site_url', $request->site_url)->first();
    $response = Http::withToken($token->token)
    ->delete("{$request->site_url}/wp-json/wp/v2/posts/{$request->post_id}");

    if ($response) {
        session()->flash('success', 'Blog başarıyla silindi.');
        return redirect()->back();
        # code...
    }
    else {
        session()->flash('error', 'Blog silinirken bir hata oluştu.');
        return redirect()->back();
    }



}
    public function getWoocommerceIndex()
    {
        $wordpress = WooCommereWordpress::latest()->get();
        return view('admin.wordpress.woocomerce', compact('wordpress'));
    }
    public function getWoocommerceCreate(Request $request)
    {
        $get = WooCommereWordpress::where("durum", 1)->first();
        if ($get) {
            $woocommerce = new Client(
                $get->site_url,
                $get->key,
                $get->secret,
                [
                    'version' => 'wc/v3',
                ]
            );

            // Sayfa numarası (Laravel'in sayfalama sisteminden alıyoruz)
            $page = $request->get('page', 1);
            $perPage = 20; // Sayfa başına ürün sayısı

            // WooCommerce API'den ürünleri çek
            $products = $woocommerce->get('products', [
                'per_page' => $perPage,
                'page' => $page,
            ]);

            // Toplam ürün sayısını alın
            $totalProducts = $woocommerce->http->getResponse()->getHeaders()['X-WP-Total'][0] ?? 0;

            // Laravel Paginator ile ürünleri dön
            $wordpress = new LengthAwarePaginator(
                collect($products), // Veriler
                $totalProducts,     // Toplam ürün sayısı
                $perPage,           // Sayfa başına ürün sayısı
                $page,              // Şu anki sayfa
                [
                    'path' => $request->url(),        // Sayfa URL'si
                    'query' => $request->query(),    // Sorgu parametreleri
                ]
            );
            // dd($wordpress);


            return view('admin.wordpress.woocomerce-create', compact('wordpress'));
        }
        else {
            return redirect(route("getWoocommerceIndex"))->with('error', 'Lütfen WooCommerce ayarlarını yapınız. Veya  Web Sitenizi Aktif Edin');
        }


    }
    public function getWoocommerceIndexPost(Request $request)

    {

        $get = WooCommereWordpress::where("durum", 1)->first();
        if ($get->site_url == null) {

            # code...
        }
        $woocommerce = new Client(
            $get->site_url == null ? "deneme" : $get->site_url , // WooCommerce site URL
            $get->key, // WooCommerce Consumer Key
            $get->secret, // WooCommerce Consumer Secret




            [
                'version' => 'wc/v3',
            ]
        );

        $imageUrls = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $uploadedImage = $this->uploadImageToWooCommerce($image, $woocommerce);
                if ($uploadedImage) {
                    $imageUrls[] = ['src' => $uploadedImage];
                }
            }
        }

        $data = [
            'name' => $request->name,
            'type' => $request->type,
            'regular_price' => $request->regular_price,
            'description' => $request->description,
            'short_description' => $request->short_description,
            'categories' => [
                [

                    'id' => $request->category, // Kategori ID'si
                ],
            ],
            'images' => $imageUrls,
        ];
        try {
            $product = $woocommerce->post('products', $data);

            return redirect()->back()->with('success', 'Ürün başarıyla eklendi: ID ' . $product['id']);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Hata: ' . $e->getMessage());
        }




    }
    public function getWoocomerceIndexPostUpdate(Request $request, $id)
    {
        // WooCommerce bağlantı bilgilerini al
        $get = WooCommereWordpress::where("durum", 1)->first();

        if (!$get) {
            return redirect()->back()->with('error', 'WooCommerce bağlantı bilgileri bulunamadı.');
        }

        $woocommerce = new Client(
            $get->site_url, // WooCommerce site URL
            $get->key,      // WooCommerce Consumer Key
            $get->secret,   // WooCommerce Consumer Secret
            [
                'version' => 'wc/v3',
            ]
        );

        // Resim yükleme ve URL'leri hazırlama
        $imageUrls = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $uploadedImage = $this->uploadImageToWooCommerce($image, $woocommerce);
                if ($uploadedImage) {
                    $imageUrls[] = ['src' => $uploadedImage];
                }
            }
        }

        // Güncelleme verilerini hazırlama
        $data = [
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'price' => $request->input('price'),
            'regular_price' => $request->input('regular_price'),
            'description' => $request->input('description'),
            'short_description' => $request->input('short_description'),
            'categories' => $request->input('category') ? [
                [
                    'id' => $request->input('category'), // Kategori ID'si
                ],
            ] : null,
            'images' => !empty($imageUrls) ? $imageUrls : null,
        ];

        // Boş değerleri filtrele
        $data = array_filter($data, function ($value) {
            return $value !== null && $value !== '';
        });

        try {
            // Ürünü güncelle
            $product = $woocommerce->put("products/{$id}", $data);
            return redirect()->back()->with('success', 'Ürün başarıyla güncellendi: ID ' . $product->id);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Hata: ' . $e->getMessage());
        }
    }

    private function uploadImageToWooCommerce($image, $woocommerce)
    {
        $get = WooCommereWordpress::where("durum", 1)->first();

        $mediaEndpoint = $get->site_url . '/wp-json/wp/v2/media';

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Basic ' . base64_encode($woocommerce->getConsumerKey() . ':' . $woocommerce->getConsumerSecret()),
                'Content-Disposition' => 'attachment; filename="' . $image->getClientOriginalName() . '"',
            ])->attach(
                'file',
                file_get_contents($image->getRealPath()),
                $image->getClientOriginalName()
            )->post($mediaEndpoint);

            if ($response->successful()) {
                $data = $response->json();
                return $data['source_url']; // Yüklenen resmin URL'si
            }

            return null;
        } catch (\Exception $e) {
            // Hata durumunda null döndür
            return null;
        }
    }



    public function getWoocommeractive($id)
    {

        $woocommerce = WooCommereWordpress::latest()->get();
        foreach ($woocommerce as $get) {
            if ($get->id == $id) {
                if ($get->durum == 0) {
                    $get->update([
                        'durum' => 1,
                    ]);
                } else {
                    $get->update([
                        'durum' => 0,
                    ]);
                }

                # code...
            }else{
                $get->update([
                    'durum' => 0,
                ]);


        }
    }
        session()->flash('success', 'WordPress WooCommerce Siteniz Aktif Edildi.');
        return redirect()->back();
    }
    public function getWoocommerceDelete($id)
    {
        $woocommerce = WooCommereWordpress::find($id);
        $woocommerce->delete();
        session()->flash('success', 'WordPress WooCommerce Başarıyla Silindi.');
        return redirect()->back();
    }
    public function getWoocommerce(Request $request)
    {
        $active = WooCommereWordpress::where('durum', 1)->first();

        $woocommerce = new Client($active->url, $active->key, $active->secret, [
            'wp_api' => true,
            'version' => 'wc/v3',
        ]);

        $this->woocommerce = $woocommerce;

        $response = $this->woocommerce->get('products');
        return view('admin.wordpress.woocomerceproducts', compact('response'));


    }
    public function getUsers()
    {
        $wordpress = WordpresJwt::where('durum', 1)->first();


        $response = Http::get("{$wordpress->site_url}wp-json/wp/v2/users");

        $users = $response->json();

        return view('admin.wordpress.users', compact('users'));


    }
    public function getUsersCreate(Request $request)
    {
        $wordpress = WordpresJwt::where('durum', 1)->first();
        $response = Http::post("{$wordpress->site_url}wp-json/wp/v2/users", [
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        if ($response->successful()) {
            session()->flash('success', 'Kullanıcı başarıyla oluşturuldu.');
        } else {
            session()->flash('error', 'Kullanıcı oluşturulurken bir hata oluştu.');
        }
        return redirect()->back();
    }
    public function getUsersUpdate(Request $request, $id)
    {
        $wordpress = WordpresJwt::where('durum', 1)->first();
        $response = Http::put("{$wordpress->site_url}wp-json/wp/v2/users/{$id}", [
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        if ($response->successful()) {
            session()->flash('success', 'Kullanıcı başarıyla güncellendi.');
        } else {
            session()->flash('error', 'Kullanıcı güncellenirken bir hata oluştu.');
        }
        return redirect()->back();
    }
    public function deleteUsers($id)
    {
        $wordpress = WordpresJwt::where('durum', 1)->first();
        $response = Http::delete("{$wordpress->site_url}wp-json/wp/v2/users/{$id}");
        if ($response->successful()) {
            session()->flash('success', 'Kullanıcı başarıyla silindi.');
        } else {
            session()->flash('error', 'Kullanıcı silinirken bir hata oluştu.');
        }
        return redirect()->back();
    }
}
