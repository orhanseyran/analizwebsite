<?php

namespace App\Http\Controllers;

use App\Exports\ProductExport;
use App\Exports\UserExport;
use App\Models\AltKategori;
use App\Models\blog;
use App\Models\blog_kategori;
use App\Models\Cart;
use App\Models\Category;
use App\Models\kargo;
use App\Models\markalar;
use App\Models\orderdetail;
use App\Models\PanelDuyuru;
use App\Models\Pma;
use App\Models\product;
use App\Models\ReklamIstatistik;
use App\Models\Tahminler;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Maatwebsite\Excel\Facades\Excel;

class AdminFrontController extends Controller
{
    public function show404() {
        return view('admin.404');
    }
    public function jivochat() {
        return view('admin.jivochat.index');
    }


    public function dosyayöneticisi() {
        return view('admin.dosyayöneticisi.index');
    }
public function show500() {
    try {
        $response = Http::get('https://api.trendyol.com/sapigw/product-categories');

        // İsteği başarılı bir şekilde aldıysanız
        if ($response->successful()) {
            // API'den dönen veriyi JSON olarak alın
            $data = $response->json();

            $baslik =$data["categories"] ;


            // Kategorilerin isimlerini alın


            // İşlenmiş verileri geri döndürün
            return response()->json($baslik);
        } else {
            // Hata durumlarını işleyebilirsiniz
            return response()->json(['error' => 'API isteği başarısız'], $response->status());
        }
    } catch (\Exception $e) {
        // İstek sırasında bir hata oluştuysa
        return response()->json(['error' => 'API isteği sırasında bir hata oluştu: ' . $e->getMessage()], 500);
    }
}


    public function showBrandList() {
        $markalar = markalar::latest()->get();
        return view('admin.markalar.brand-list',[
            "markalar" => $markalar
        ]);
    }
    public function showCargoList() {
        $kargo = kargo::latest()->get();
        return view('admin.kargo.cargo',[
            "kargo" => $kargo
        ]);
    }

    public function showConverter() {
        // "converter html to blade.bat" dosyası için bir view oluşturulmadığı için hata döndürülebilir veya isteğe bağlı olarak başka bir işlem yapılabilir.
        abort(404);
    }

    public function showFlagIcon() {
        return view('admin.flag-icon');
    }

    public function showFontAwesome() {
        return view('admin.font-awsome-icons');
    }
    public function showIndex() {

        $duyuru = PanelDuyuru::latest()->get();
        // Son 5 saniye içindeki aktif kullanıcıları al
        $activeUsers = User::where('last_activity', '>=', Carbon::now()->subSeconds(5))->get();

        $products = product::all();
        $pmaall = Pma::all();

        $user = User::where('role', 'Satici')->count();




        // Son 24 saat içindeki PMA kayıtları
        $pma = Pma::where('created_at', '>=', now()->subDay())->latest()->get();

        // Son 24 saat içindeki siparişler
        $orderDaily = orderdetail::where('created_at', '>=', now()->subDay())->latest()->get();
        // Son 1 hafta içindeki siparişler
        $orderWeekly = orderdetail::where('created_at', '>=', now()->subWeek())->latest()->get();
        // Son 30 gün içindeki siparişler
        $order30Days = orderdetail::where('created_at', '>=', now()->subDays(30))->latest()->get();
        // Tüm siparişler
        $orderFull = orderdetail::latest()->get();

        // Verilerin sayısını hesapla
        $countOrderDaily = $orderDaily->count();

        $countOrderWeekly = $orderWeekly->count();
        $countOrder30Days = $order30Days->count();
        $countOrderFull = $orderFull->count();

        // Önceki gün verilerini almak için (günlük değişim)
        $previousDayOrderCount = orderdetail::where('created_at', '<', now()->subDay())->where('created_at', '>=', now()->subDays(2))->count();

        // Yüzdelik değişim hesapla
        $percentageChangeWeeklyDaily = ($countOrderDaily > 0) ? (($countOrderWeekly - $countOrderDaily) / $countOrderDaily) * 100 : ($countOrderWeekly > 0 ? 100 : 0);
        $percentageChange30DaysDaily = ($countOrderDaily > 0) ? (($countOrder30Days - $countOrderDaily) / $countOrderDaily) * 100 : ($countOrder30Days > 0 ? 100 : 0);
        $percentageChangeDaily = ($previousDayOrderCount > 0) ? (($countOrderDaily - $previousDayOrderCount) / $previousDayOrderCount) * 100 : ($countOrderDaily > 0 ? 100 : 0);
        $percentageChangeDailyFull = ($countOrderFull > 0) ? (($countOrderDaily - $countOrderFull) / $countOrderFull) * 100 : ($countOrderDaily > 0 ? 100 : 0);


        return view('admin.anasayfa.index2', [
            "activeUsers" => $activeUsers,
            "pma" => $pma,
            "pmaall"=> $pmaall,
            "user" => $user,
            'products' => $products,
            "orderDaily" => $orderDaily,
            "orderWeekly" => $orderWeekly,
            "countOrder30Days" => $countOrder30Days,
            "order30Days" => $order30Days,
            "orderFull" => $orderFull,
            "percentageChangeWeeklyDaily" => $percentageChangeWeeklyDaily,
            "percentageChange30DaysDaily" => $percentageChange30DaysDaily,
            "percentageChangeDaily" => $percentageChangeDaily,
            'percentageChangeDailyFull',$percentageChangeDailyFull,
            'duyuru' =>$duyuru,
        ]);
    }
    public function startIndex() {

        return view('admin.startpage.index');
    }
    public function startsayfalar() {

        return view('admin.startpage-sayfalar.index');
    }
    public function startgridIndex() {

        return view('admin.startpagegrid.index');
    }
       public function startIndextable() {

        return view('admin.startpage-table.index');
    }
    public function startIndextablemodal() {

        return view('admin.startpage-table-modal.index');
    }
    public function blogs(){
        $blogs = blog::latest()->get();


        return view("admin.blog.index",[
            "blogs"=> $blogs
        ]);
    }
    public function blogkategori(){
        $blogs = blog_kategori::latest()->get();


        return view("admin.blog.blog-kategori",[
            "blogs"=> $blogs
        ]);
    }


    public function showInvoice() {
        return view('admin.invoice');
    }
    public function showMainCategory() {
        // Tüm kategorileri al
        $get = Category::latest()->get();

        $altKategori = AltKategori::latest()->get();






        // Her kategori için ilişkili ana kategoriyi (parent category) al



        // İşlem tamamlandıktan sonra view'e tüm kategorileri gönderin
        return view('admin.katagori.main-category', [
            'get' => $get,
             'altKategori' => $altKategori
        ]);
    }
    public function showMainCategoryedit($id)
    {
        $edit = Category::findOrFail($id);


        // Tüm kategorileri al
        $get = Category::latest()->get();

        $altKategori = AltKategori::latest()->get();






        // Her kategori için ilişkili ana kategoriyi (parent category) al



        // İşlem tamamlandıktan sonra view'e tüm kategorileri gönderin
        return view('admin.katagori.main-categoryedit', [
            'get' => $get,
             'edit' => $edit,
             'altKategori' => $altKategori
        ]);
    }


    public function showMaterialIcon() {
        return view('admin.material-icon');
    }

    public function showNewOrder() {
        $order = orderdetail::latest()->get();
        return view('admin.sipariş-yönetimi.yeni-sipariş.new-order',[
            'order' => $order
        ]);
    }

    public function showOrderDetail() {
        return view('admin.sipariş-yönetimi.sipariş-detay.order-detail');
    }

    public function showOrderHistory() {
        return view('admin.sipariş-yönetimi.sipariş-geçmişi.order-history');
    }

    public function showProductAdd() {
        $altkt = AltKategori::latest()->get();
        $category = Category::latest()->get();
        $markalar = markalar::latest()->get();
        $kargo = kargo::latest()->get();
        return view('admin.ürün-yönetimi.ürün-ekle.product-add',[
            'altkt' => $altkt,
            'category' => $category,
            "markalar" => $markalar,
            "kargo" => $kargo
        ]);
    }
    public function showProductedit($id) {



        $product = Product::findOrFail($id); // Ürünü bul
        $userId = auth()->id(); // Aktif kullanıcının ID'sini al

        $reklam = ReklamIstatistik::where("reklam_id", $product->id)
        ->where("ip_adress", $userId)
        ->first(); // Reklam istatistiğini bul

    if ($reklam) {
        // Reklam istatistiği varsa devam edin

        // Bugünün başlangıç zamanını al
        $startOfDay = Carbon::now()->startOfDay();

        // Eğer tıklama istatistiği bugün için henüz yoksa, yeni bir kayıt oluşturun
        if (!$reklam->updated_at || $reklam->updated_at < $startOfDay) {
            $reklam->günlük_reklam_tiklamasi++; // Günlük reklam tıklamalarını bir artır
            $reklam->updated_at = Carbon::now(); // Son tıklama zamanını güncelle
            $reklam->save(); // Değişiklikleri kaydet
        }
    }










        $altkt = AltKategori::latest()->get();
        $category = Category::latest()->get();
        $markalar = markalar::latest()->get();
        $kargo = kargo::latest()->get();
        return view('admin.ürün-yönetimi.ürün-düzenle.product-edit',[
            "product" => $product,
            'altkt' => $altkt,
            'category' => $category,
            "markalar" => $markalar,
            "kargo" => $kargo
        ]);
    }


    public function showProductDetail() {
        return view('admin.ürün-yönetimi.ürün-detay.product-detail');
    }

    public function showProductGrid() {
        return view('admin.ürün-yönetimi.ürün-grid.product-grid');
    }


    public function showProductList(Request $request) {




       $product = product::latest()->get();



        return view('admin.ürün-yönetimi.ürün-listesi.product-list', compact('product'));


    }
    public function productexport(){
        return  Excel::download(new ProductExport, 'Product.xlsx', );
    }
    public function userexport(){
        return  Excel::download(new UserExport, 'Users.xlsx', );
    }

    public function showReviewList() {
        return view('admin.ürün-inceleme.review-list');
    }

    public function showSignIn() {
        return view('admin.login-register.sign-in');
    }

    public function showSignUp() {
        return view('admin.login-register.sign-up');
    }

    public function showSubCategory() {
        $get = AltKategori::latest()->get();
        $category = Category::latest()->get();
        return view('admin.katagori.altkatagori.sub-category',[
            'get' => $get,
            "category" => $category
        ]);
    }
    public function showSubCategoryedit($id) {
        $edit = AltKategori::findOrFail($id);
        $get = AltKategori::latest()->get();
        $category = Category::latest()->get();
        return view('admin.katagori.altkatagori.sub-categoryedit',[
            'get' => $get,
            "category" => $category,
            "edit" => $edit

        ]);
    }

    public function showUserCard() {
        $users = User::latest()->paginate(12);
        return view('admin.kullanıcılar.kullanıcıcard.user-card',[
            "users" => $users
        ]);
    }

    public function showUserList() {
        $users = User::latest()->get();
        return view('admin.kullanıcılar.kullanıcılistesi.user-list',[
            "users" => $users
        ]);
    }

    public function showUserProfile() {
        return view('admin.kullanıcılar.kullanıcıprofili.user-profile');
    }

    public function showVendorCard() {
        return view('admin.satici.saticicard.vendor-card');
    }

    public function showVendorList() {
        $vendor = User::where("Role","Satici")->latest()->get();

        return view('admin.satici.saticilistesi.vendor-list',[
            "vendor" => $vendor
        ]);
    }

    public function showVendorProfile() {
        return view('admin.satici.saticiprofili.vendor-profile');
    }
    public function sepetAnaliz() {
        $sepet = Cart::latest()->get();
        return view('admin.sepetanaliz.index',[
            "sepet" => $sepet
        ]);
    }
    public function MacAnalizler() {
        $mac = Tahminler::latest()->get();

        $tahmin = [];

        foreach ($mac as $key => $value) {
            // Tahmin metnindeki yeni satır karakterlerini <br> etiketi ile değiştir
            $value->tahmin = str_replace("\n", "<br>", $value->tahmin);

            // Düzenlenmiş tahmini $tahmin dizisine ekle
            $tahmin[] = [
                "tahmin" => $value->tahmin,
                "tahmin_id" => $value->id,
            ];
        }








        // Sonuçları ekrana yazdır



        return view('admin.macanaliz.index',[
            "mac" => $mac,
            "tahmin" => $tahmin
        ]);
    }
    public function editMacAnaliz(Request $request,$id) {
        $mac = Tahminler::findOrFail($id);
        $mac->tahmin = $request->input('tahmin');
        $mac->update();
        return redirect()->back()->with('success', 'Tahmin başarıyla güncellendi.');
    }
}
