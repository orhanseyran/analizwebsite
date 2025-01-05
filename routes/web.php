<?php


use App\Http\Controllers\AbonelerController;
use App\Http\Controllers\CategoryPostController;
use App\Http\Controllers\AdminFrontController;
use App\Http\Controllers\ApiSportsController;
use App\Http\Controllers\BasindaBizPostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartCheckoutController;
use App\Http\Controllers\DestekController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\FrontEndServicesController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\GoogleCommentsController;
use App\Http\Controllers\IletisimController;
use App\Http\Controllers\KargoController;
use App\Http\Controllers\KuponController;
use App\Http\Controllers\LoginAndRegisterController;
use App\Http\Controllers\MarkaController;
use App\Http\Controllers\MusteriController;
use App\Http\Controllers\MusteriHikayeController;
use App\Http\Controllers\PanelDuyuruController;
use App\Http\Controllers\PmaController;
use App\Http\Controllers\ReklamController;
use App\Http\Controllers\ReklamYönetimController;
use App\Http\Controllers\ResimliYorumController;
use App\Http\Controllers\SaticiController;
use App\Http\Controllers\SayfaYönetimiController;
use App\Http\Controllers\SayfaYönetimPostController;
use App\Http\Controllers\SoruCevapController;
use App\Http\Controllers\SosyalMedyaController;
use App\Http\Controllers\UrunEkleController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VisionController;
use App\Http\Controllers\WordpressController;
use App\Http\Controllers\YoutubeChannelController;
use App\Http\Controllers\ÖdemeController;
use App\Http\Controllers\ÖzelSayfaController;
use App\Http\Controllers\ÖzelSayfaPostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/sports-tahmin', [ApiSportsController::class, 'getSportsTahmin']);
Route::get('/sports-detail-{id}', [ApiSportsController::class, 'getSportsDetail']);
Route::get('/sports', [ApiSportsController::class, 'getSports']);

Route::get("/",[FrontEndController::class,"home"])->name("home");

Route::get("/maçlar",[FrontEndController::class,"maçlar"])->name("maçlar");
Route::get("/mac-detay-{id}",[FrontEndController::class,"detail"])->name("detail");
Route::get("/about",[FrontEndController::class,"about"])->name("about");
Route::get("/contact",[FrontEndController::class,"contact"])->name("contact");
Route::get("/haberler",[FrontEndController::class,"haberler"])->name("haberler");
Route::get("/haberler-detay-{id}",[FrontEndController::class,"haberdetay"])->name("haberdetay");

Route::get("analiz-{id}",[FrontEndController::class,"analizdetay"])->name("analizdetay");
Route::get("/analizler",[FrontEndController::class,"analizler"])->name("analizler");


Route::middleware(['MusteriOrSatici'])->group(function () {
    Route::get('musteri', [MusteriController::class, 'index'])->name('musteri.index');
    Route::get('musteri-wishlist', [MusteriController::class, 'wishlist'])->name('musteri.wishlist');
    Route::get('musteri-order-history', [MusteriController::class, 'orderHistory'])->name('musteri.orderHistory');
    Route::get('/Kuponlar', [MusteriController::class,"kuponlar"])->name("kuponlar");
    Route::get('/Ayarlar', [MusteriController::class,"ayarlar"])->name("ayarlar");
    Route::get('/Yorumlarım', [MusteriController::class,"yorumlar"])->name("yorumlar");
    Route::get('/Jetonlar', [MusteriController::class,"Jetonlar"])->name("Jetonlar");
    Route::post("/addToken", [MusteriController::class,"addToken"])->name("addToken");
    Route::get("/Analizadd-{id}", action: [MusteriController::class,"Analizadd"])->name("Analizadd");
    Route::post("/Analizstore-{id}", action: [MusteriController::class,"Analizstore"])->name("Analizstore");
    Route::get("/AnalizDelete-{id}", action: [MusteriController::class,"AnalizDelete"])->name("AnalizDelete");


    Route::post('/kupon/add', [MusteriController::class, 'KuponAdd'])->name('kupon.add');
     Route::post('/kupon/edit/{id}', [MusteriController::class, 'KuponEdit'])->name('kupon.edit');

   Route::get('/kupon/delete/{id}', [MusteriController::class, 'KuponDelete'])->name('kupon.delete');

});




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/auth/{provider}/redirect",[GoogleAuthController::class,"redirect"])->name("redirect");
Route::get("/auth/{provider}/callback",[GoogleAuthController::class,"callbackadmin"])->name("callback");



Route::get('/admin-404', [AdminFrontController::class, 'show404'])->name('satici.404');

Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});



Route::middleware(['Admin'])->group(function(){

    Route::post("getJwt",[WordpressController::class, "getJwt"])->name("getJwt");
    Route::post("getWoocommerceIndexPost",[WordpressController::class, "getWoocommerceIndexPost"])->name("getWoocommerceIndexPost");
    Route::post("addBlog",[WordpressController::class, "addBlog"])->name("addBlog");
    Route::post("deleteBlog",[WordpressController::class, "deleteBlog"])->name("deleteBlog");

    Route::post("updateBlog",[WordpressController::class, "updateBlog"])->name("updateBlog");

    // WooCommerce ürün oluşturma sayfasını gösteren rota
Route::get('/woocommerce-create', [WordpressController::class, 'getWoocommerceCreate'])->name('woocommerce.create');

// WooCommerce yeni ürün ekleme işlemi
Route::post('/woocommerce/store', [WordpressController::class, 'getWoocommerceIndexPost'])->name('woocommerce.store');

// WooCommerce mevcut ürünü güncelleme işlemi
Route::post('/woocommerce/update/{id}', [WordpressController::class, 'getWoocomerceIndexPostUpdate'])->name('woocommerce.update');


    Route::get( 'getWoocommeractive-{id}',[WordpressController::class, "getWoocommeractive"])->name("getWoocommeractive");
    Route::get( 'getWoocommerceDelete-{id}',[WordpressController::class, "getWoocommerceDelete"])->name("getWoocommerceDelete");


Route::get('wordpress-websitelerim',[WordpressController::class, "index"])->name("wordpress.websitelerim");
Route::get('wordpress-woocomerce-ayarlari',[WordpressController::class, "getWoocommerceIndex"])->name("getWoocommerceIndex");
Route::get('wordpress-bloglar',[WordpressController::class, "getBlog"])->name("getBlog");
Route::get('wordpress-ketegoriler',[WordpressController::class, "getCategory"])->name("getCategory");
Route::get('wordpress-getUsers',[WordpressController::class, "getUsers"])->name("getUsers");
Route::post('/users/create', [WordPressController::class, 'getUsersCreate'])->name('users.create');
Route::post('/users/update/{id}', [WordPressController::class, 'getUsersUpdate'])->name('users.update');
Route::get('/users/delete/{id}', [WordPressController::class, 'deleteUsers'])->name('users.delete');


    Route::get('/admin-flag-icon', [AdminFrontController::class, 'showFlagIcon'])->name('admin.flag-icon');
    Route::get('/startsayfalar', [AdminFrontController::class, 'startsayfalar'])->name('startsayfalar');
    Route::get('/show500', [AdminFrontController::class, 'show500'])->name('show500');
    Route::get('/admin-font-awesome-icons', [AdminFrontController::class, 'showFontAwesome'])->name('admin.font-awesome-icons');
    Route::get('/admin-index', [AdminFrontController::class, 'showIndex'])->name('admin.index');
    Route::get('/admin-order-invoice', [AdminFrontController::class, 'showInvoice'])->name('admin.invoice');
    Route::get('/admin-category-category', [AdminFrontController::class, 'showMainCategory'])->name('admin.main-category');
    Route::get('/admin-category-category-edit-{id}', [AdminFrontController::class, 'showMainCategoryedit'])->name('admin.main-categoryedit');
    Route::get('/admin-material-icon', [AdminFrontController::class, 'showMaterialIcon'])->name('admin.material-icon');
    Route::get('/admin-order-order', [AdminFrontController::class, 'showNewOrder'])->name('admin.new-order');
    Route::get('/admin-order-detail', [AdminFrontController::class, 'showOrderDetail'])->name('admin.order-detail');
    Route::get('/admin-order-history', [AdminFrontController::class, 'showOrderHistory'])->name('admin.order-history');
    Route::get('/admin-product-add', [AdminFrontController::class, 'showProductAdd'])->name('admin.product-add');
    Route::get('/admin-product-edit-{id}', [AdminFrontController::class, 'showProductedit'])->name('admin.product-edit');
    Route::get('/admin-product-detail', [AdminFrontController::class, 'showProductDetail'])->name('admin.product-detail');
    Route::get('/admin-product-grid', [AdminFrontController::class, 'showProductGrid'])->name('admin.product-grid');
    Route::get('/admin-product-list', [AdminFrontController::class, 'showProductList'])->name('admin.product-list');
    Route::get('/productexport', [AdminFrontController::class, 'productexport'])->name('productexport');
    Route::get('/userexport', [AdminFrontController::class, 'userexport'])->name('userexport');
    Route::get('/jivochat', [AdminFrontController::class, 'jivochat'])->name('jivochat');





    Route::get('/admin-review-list', [AdminFrontController::class, 'showReviewList'])->name('admin.review-list');
    Route::get('/admin-category-sub', [AdminFrontController::class, 'showSubCategory'])->name('admin.sub-category');
    Route::get('/admin-category-sub-edit-{id}', [AdminFrontController::class, 'showSubCategoryedit'])->name('admin.sub-category-edit');



    Route::get('/admin-user-card', [AdminFrontController::class, 'showUserCard'])->name('admin.user-card');
    Route::get('/admin-user-list', [AdminFrontController::class, 'showUserList'])->name('admin.user-list');
    Route::get('/admin-user-profile', [AdminFrontController::class, 'showUserProfile'])->name('admin.user-profile');



    Route::get('/admin-vendor-card', [AdminFrontController::class, 'showVendorCard'])->name('admin.vendor-card');
    Route::get('/admin-vendor-list', [AdminFrontController::class, 'showVendorList'])->name('admin.vendor-list');
    Route::get('/admin-vendor-profile-{id}', [SaticiController::class, 'indexeditsatici'])->name('indexeditsatici');
    Route::post('/updatesaticiadmin-{id}', [SaticiController::class, 'updatesaticiadmin'])->name('updatesaticiadmin');



    Route::get('/sepetAnaliz', [AdminFrontController::class, 'sepetAnaliz'])->name('sepetAnaliz');



    Route::post("admin-CategoriAdd",[CategoryPostController::class, "CategoryAdd"])->name('AdminCategoryAdd');
    Route::post("admin-CategoryEdit-{id}",[CategoryPostController::class, "CategoryEdit"])->name('CategoryEdit');
    Route::get("admin-KategoriDelete-{id}",[CategoryPostController::class, "Categorydelete"])->name('Categorydelete');
    Route::post('/admin-alt-category/add', [CategoryPostController::class, 'AltCategoryAdd'])->name('admin.alt-category.add');
    Route::post('/admin-alt-category/edit/{id}', [CategoryPostController::class, 'AltCategoryEdit'])->name('admin.alt-category.edit');
    Route::get('/admin-altkategorisil{id}', [CategoryPostController::class, 'AltCategoryDelete'])->name('admin.alt-category.delete');
    Route::get('/admin-admin-brand-list', [AdminFrontController::class, 'showBrandList'])->name('admin.brand-list');
    Route::post('/admin-marka/ekle', [MarkaController::class, 'ekle'])->name('marka.ekle');
    Route::get('/admin-marka/sil/{id}', [MarkaController::class, 'sil'])->name('marka.sil');
    Route::get('/admin-kargo-ekle', [AdminFrontController::class, 'showCargoList'])->name('admin.cargo-list');
    Route::post('/admin-kargo/ekle', [KargoController::class, 'ekle'])->name('kargo.ekle');
    Route::get('/admin-kargo/sil/{id}', [KargoController::class, 'sil'])->name('kargo.sil');
    Route::post('/admin-urun/ekle', [UrunEkleController::class, 'ekle'])->name('urun.ekle');
    Route::post('/admin-urun/düzenle-{id}', [UrunEkleController::class, 'düzenle'])->name('düzenle');
    Route::get('/deleteproduct-{id}', [UrunEkleController::class, 'deleteproduct'])->name('deleteproduct');
    Route::get('/admin-Ads-Product', [ReklamController::class, 'index'])->name('index.reklam');
    Route::get('/admin-Ads-Product-add', [ReklamController::class, 'adsadd'])->name('index.reklamadd.admin');
    Route::post('/admin-Ads-Product-store', [ReklamController::class, 'store'])->name('index.reklamstore');
    Route::post('/admin-Ads-Reklam-Bakiye', [ReklamYönetimController::class, 'addbakiye'])->name('index.addbakiye');
    Route::post("admin-Add-User",[UsersController::class, "addUser"])->name('addUser');
    Route::post("admin-updateUser-{id}",[UsersController::class, "updateUser"])->name('updateUser');
    Route::get('/admin-urun-soruları', [SoruCevapController::class, 'ÜrünSoru'])->name('urun-soru');
    Route::get('/admin-siparis-soru-genel', [SoruCevapController::class, 'SiparişSoru'])->name('admin.siparis-soru');
    Route::post('/admin-siparis-Ürüncevap-{id}', [SoruCevapController::class, 'Ürüncevap'])->name('Ürüncevap');
    Route::get('/Boş', [AdminFrontController::class, 'startIndex'])->name('startIndex');
    Route::get('/Boş-table', [AdminFrontController::class, 'startIndextable'])->name('startIndextable');
    Route::get('/Boş-table-modal', [AdminFrontController::class, 'startIndextablemodal'])->name('startIndextablemodal');
    Route::get('/startgridIndex', [AdminFrontController::class, 'startgridIndex'])->name('startgridIndex');
    Route::get('/sosyalmedyaindex', [SosyalMedyaController::class, 'sosyalmedyaindex'])->name('sosyalmedyaindex');
    Route::post('/sosyalmedyaindex-post', [SosyalMedyaController::class, 'sosyalMedyaadd'])->name('sosyalMedyaadd');

    Route::get('kupon-add', [KuponController::class, 'indexkuponadd'])->name('admin.kupon.add');
    Route::get('/kupon-list', [KuponController::class, 'indexkuponlist'])->name('admin.kupon.list');
    Route::get('/kupondelete-{id}', [KuponController::class, 'kupondelete'])->name('kupondelete');

    Route::get('/Ödeme', [ÖdemeController::class, 'indexödemeadmin'])->name('indexödemeadmin');


    Route::get("/Destek",[DestekController::class,"indexdestek"])->name("indexdestek");
    Route::get("/destek-chat",[DestekController::class,"indexchat"])->name("indexchat");
    Route::get("/destek-chat-cevap-{id}",[DestekController::class,"indexchatcevap"])->name("indexchatcevap");
    Route::post("/destek",[DestekController::class,"indexdestekolustur"])->name("indexdestekolustur");
    Route::post("/destek-cevap-{id}}",[DestekController::class,"destekcevap"])->name("destekcevap");


        Route::get('/dosyayöneticisi', [AdminFrontController::class, 'dosyayöneticisi'])->name('dosyayöneticisi');


        Route::get('admin-kurumsal-yonetim-sayfalar-tum-sayfalar', [SayfaYönetimiController::class, 'TümSayfalarİndex'])->name('admin.tum-sayfalar.index');
        Route::get('admin-kurumsal-yonetim-sayfalar-tum-sayfalar-ekle', [SayfaYönetimiController::class, 'TümSayfalaradd'])->name('admin.tum-sayfalar.add');
        Route::get('admin-kurumsal-yonetim-sayfalar-tum-sayfalar-duzenle/{id}', [SayfaYönetimiController::class, 'TümSayfalaredit'])->name('admin.tum-sayfalar.edit');

        // Hizmetlerimiz Routes
        Route::get('admin-kurumsal-yonetim-sayfalar-hakkımızda', [SayfaYönetimiController::class, 'Hakkımızdaİndex'])->name('admin.hizmetlerimiz.index');
        Route::get('admin-kurumsal-yonetim-sayfalar-hakkımızda-ekle', [SayfaYönetimiController::class, 'Hakkımızdaadd'])->name('admin.hizmetlerimiz.add');
        Route::get('admin-kurumsal-yonetim-sayfalar-hakkımızda-duzenle/{id}', [SayfaYönetimiController::class, 'Hakkımızdaedit'])->name('admin.hizmetlerimiz.edit');

        // Gizlilik Routes
        Route::get('admin-kurumsal-yonetim-sayfalar-gizlilik', [SayfaYönetimiController::class, 'Gizlilikİndex'])->name('admin.gizlilik.index');
        Route::get('admin-kurumsal-yonetim-sayfalar-gizlilik-ekle', [SayfaYönetimiController::class, 'Gizlilikadd'])->name('admin.gizlilik.add');
        Route::get('admin-kurumsal-yonetim-sayfalar-gizlilik-duzenle-{id}', [SayfaYönetimiController::class, 'Gizlilikedit'])->name('admin.gizlilik.edit');

        // Biz Kimiz Routes
        Route::get('admin-kurumsal-yonetim-sayfalar-biz-kimiz', [SayfaYönetimiController::class, 'BizKimizİndex'])->name('admin.biz-kimiz.index');
        Route::get('admin-kurumsal-yonetim-sayfalar-biz-kimiz-ekle', [SayfaYönetimiController::class, 'BizKimizadd'])->name('admin.biz-kimiz.add');
        Route::get('admin-kurumsal-yonetim-sayfalar-biz-kimiz-duzenle-{id}', [SayfaYönetimiController::class, 'BizKimizedit'])->name('admin.biz-kimiz.edit');

        Route::post('/sayfa-ekle', [SayfaYönetimPostController::class, 'sayfaadd'])->name('sayfa.ekle');
        Route::post('/sayfa-duzenle/{id}', [SayfaYönetimPostController::class, 'sayfaedit'])->name('sayfa.duzenle');
        Route::get('/sayfa-sil/{id}', [SayfaYönetimPostController::class, 'sayfadelete'])->name('sayfa.sil');

        Route::post('/ozelsayfa-ekle', [ÖzelSayfaPostController::class, 'özelsayfaadd'])->name('ozelsayfa.ekle');
        Route::post('/ozelsayfa-duzenle/{id}', [ÖzelSayfaPostController::class, 'özelsayfaedit'])->name('ozelsayfa.duzenle');
        Route::get('/ozelsayfa-sil/{id}', [ÖzelSayfaPostController::class, 'özelsayfadelete'])->name('ozelsayfa.sil');





        Route::get('/admin-kurumsal-ozelsayfalar-slideryonetimi', [ÖzelSayfaController::class, 'SliderYönetimi'])->name('slider-yonetimi');
        Route::get('/admin-kurumsal-ozelsayfalar-projelerimiz', [ÖzelSayfaController::class, 'Projelerimiz'])->name('projelerimiz');
        Route::get('/admin-kurumsal-ozelsayfalar-iletisimsayfasi', [ÖzelSayfaController::class, 'İletişimSayfasi'])->name('iletisim-sayfasi');
        Route::get('/admin-kurumsal-ozelsayfalar-portfolyoyonetimi', [ÖzelSayfaController::class, 'PortfolyoYönetimi'])->name('portfolyo-yonetimi');
        Route::get('/admin-kurumsal-ozelsayfalar-ss', [ÖzelSayfaController::class, 'SS'])->name('ss');
        Route::get('/admin-kurumsal-ozelsayfalar-partnerlerimiz', [ÖzelSayfaController::class, 'Partnerlerimiz'])->name('partnerlerimiz');
        Route::get('/admin-kurumsal-ozelsayfalar-referanslarimiz', [ÖzelSayfaController::class, 'Referanslarımız'])->name('referanslarimiz');
        Route::get('/admin-kurumsal-ozelsayfalar-ekibimiz', [ÖzelSayfaController::class, 'Ekibimiz'])->name('ekibimiz');
        Route::get('/admin-kurumsal-ozelsayfalar-BasindaBiz', [ÖzelSayfaController::class, 'BasindaBiz'])->name('BasindaBiz');
        Route::get('/admin-kurumsal-ozelsayfalar-Seminer', [ÖzelSayfaController::class, 'Seminer'])->name('Seminer');
        Route::get('/admin-kurumsal-ozelsayfalar-Galeri', [ÖzelSayfaController::class, 'Galeri'])->name('Galeri');

        Route::post('/haber/add', [BasindaBizPostController::class, 'HaberAdd'])->name('haber.add');
        Route::post('/haber/edit/{id}', [BasindaBizPostController::class, 'HaberEdit'])->name('haber.edit');
        Route::get('/haber/delete/{id}', [BasindaBizPostController::class, 'HaberDelete'])->name('haber.delete');


        Route::get("/blog-listesi",[AdminFrontController::class,"blogs"])->name("blogs");
        Route::get("/blog-kategoriler",[AdminFrontController::class,"blogkategori"])->name("blogkategori");

        // Blog Ekleme, Düzenleme, Silme
        Route::post('/blog/adds', [BlogController::class, 'blogadd'])->name('blog.add');
        Route::post('/blog/edits/{id}', [BlogController::class, 'blogedit'])->name('blog.edit');
        Route::get('/blog/deletes/{id}', [BlogController::class, 'blogdel'])->name('blog.delete');

        // Blog Kategori Ekleme, Düzenleme
        Route::post('/blog/kategori/add', [BlogController::class, 'BlogKategoriadd'])->name('blog.kategori.add');
        Route::post('/blog/kategori/edit/{id}', [BlogController::class, 'BlogKategoriedit'])->name('blog.kategori.edit');
        Route::get('/blog/kategori/delete/{id}', [BlogController::class, 'blogKategoridelete'])->name('blogKategoridelete');


        Route::get('/admin-iletisim', [IletisimController::class, 'indexiletisimadmin'])->name('admin.iletisim.index');
        Route::get('/admin-okundu-{id}', [IletisimController::class, 'okundu'])->name('okundu');
        Route::get('/admin-sil-{id}', [IletisimController::class, 'sil'])->name('sil');



        Route::get('/adminindexpma', [PmaController::class, 'adminindexpma'])->name('adminindexpma');
        Route::get('/pmaexport', [PmaController::class, 'pmaexport'])->name('pmaexport');
        Route::get('/Youtube-Channel',[YoutubeChannelController::class,'YoutubeChannel'])->name('YoutubeChannel');
        Route::post('/Youtube-Channel-post',[YoutubeChannelController::class,'videoChannel'])->name('videoChannel');
        Route::get('/Google-Comments',[GoogleCommentsController::class,'GoogleComments'])->name('GoogleComments');
        Route::post('/GoogleCommentsadd-post',[GoogleCommentsController::class,'GoogleCommentsadd'])->name('GoogleCommentsadd');

         Route::get('/Panel-Duyuru',[PanelDuyuruController::class,'panelduyuruindex'])->name('panelduyuruindex');
         Route::get('/admin/panel-duyuru', [PanelDuyuruController::class, 'panelduyuruindex'])->name('panelduyuru.index');
         Route::post('/admin/panel-duyuru/add', [PanelDuyuruController::class, 'addindexduyuru'])->name('panelduyuru.add');
         Route::post('/admin/panel-duyuru/edit/{id}', [PanelDuyuruController::class, 'editindexduyuru'])->name('panelduyuru.edit');
         Route::get('/admin/panel-duyuru/delete/{id}', [PanelDuyuruController::class, 'deleteduyuru'])->name('panelduyuru.delete');


         // Route for adding new records
        Route::post('/musteri-hikaye/add', [MusteriHikayeController::class, 'MüsteriHikayeAdd'])->name('musterihikaye.add');
        Route::post('/MüsteriHikayeEdit-{id}', [MusteriHikayeController::class, 'MüsteriHikayeEdit'])->name('müsteriedit');
        Route::get('/musteri-hikaye/delete/{id}', [MusteriHikayeController::class, 'MusteriHikayeDelete'])->name('musteriHikaye.delete');
        Route::get('/MusteriHikayeindex', [MusteriHikayeController::class, 'MusteriHikayeindex'])->name('MusteriHikayeindex');



        Route::get('/admin-resimliyorum', [ResimliYorumController::class, 'ResimliYorumindex'])->name('resimliyorum.index');
        Route::post('/admin/resimliyorum/add', [ResimliYorumController::class, 'Add'])->name('resimekleyorum');
        Route::post('/admin/resimliyorum/edit/{id}', [ResimliYorumController::class, 'ResimliYorumEdit'])->name('yorum.edit');
        Route::get('/admin/resimliyorum/delete/{id}', [ResimliYorumController::class, 'ResimliYorumDelete'])->name('yorum.delete');

        Route::get('/Aboneler', [AbonelerController::class, 'indexaboneler'])->name('indexaboneler');
        Route::post('/abonepost', [FrontEndController::class, 'abonepost'])->name('abonepost');
        Route::post('/aboneler/addabone', [AbonelerController::class, 'addabone'])->name('add.abone');

        Route::post('/aboneler/{id}/edit', [AbonelerController::class, 'editabone'])->name('aboneler.edit');
        Route::get('/aboneler/{id}', [AbonelerController::class, 'deleteabone'])->name('aboneler.delete');

        Route::get("/Tahminler",[AdminFrontController::class,"MacAnalizler"])->name("tahminler");
        Route::post("/editMacAnaliz-{id}",[AdminFrontController::class,"editMacAnaliz"])->name("editMacAnaliz");
    });





    // Route::middleware(['Satici'])->group(function(){
    //     // Route::get('/satici-flag-icon', [AdminFrontController::class, 'showFlagIcon'])->name('satici.flag-icon');
    //     // Route::get('/satici-show500', [AdminFrontController::class, 'show500'])->name('show500');
    //     // Route::get('/satici-font-awesome-icons', [AdminFrontController::class, 'showFontAwesome'])->name('satici.font-awesome-icons');
    //     Route::get('/satici-index', [AdminFrontController::class, 'showIndex'])->name('satici-satici.index');
    //     Route::get('/satici-order-invoice', [AdminFrontController::class, 'showInvoice'])->name('satici.invoice');
    //     Route::get('/satici-category-category', [AdminFrontController::class, 'showMainCategory'])->name('satici.main-category');
    //     Route::get('/satici-category-category-edit-{id}', [AdminFrontController::class, 'showMainCategoryedit'])->name('satici.main-categoryedit');
    //     // Route::get('/satici-material-icon', [AdminFrontController::class, 'showMaterialIcon'])->name('satici.material-icon');
    //     Route::get('/satici-order-order', [AdminFrontController::class, 'showNewOrder'])->name('satici.new-order');
    //     Route::get('/satici-order-detail', [AdminFrontController::class, 'showOrderDetail'])->name('satici.order-detail');
    //     Route::get('/satici-order-history', [AdminFrontController::class, 'showOrderHistory'])->name('satici.order-history');
    //     Route::get('/satici-product-add', [AdminFrontController::class, 'showProductAdd'])->name('satici.product-add');
    //     Route::get('/satici-product-edit-{id}', [AdminFrontController::class, 'showProductedit'])->name('satici.product-edit');
    //     Route::get('/satici-product-detail', [AdminFrontController::class, 'showProductDetail'])->name('satici.product-detail');
    //     Route::get('/satici-product-grid', [AdminFrontController::class, 'showProductGrid'])->name('satici.product-grid');
    //     Route::get('/satici-product-list', [AdminFrontController::class, 'showProductList'])->name('satici.product-list');
    //     Route::get('/satici-review-list', [AdminFrontController::class, 'showReviewList'])->name('satici.review-list');
    //     // Route::get('/satici-category-sub', [AdminFrontController::class, 'showSubCategory'])->name('satici.sub-category');
    //     // Route::get('/satici-category-sub-edit-{id}', [AdminFrontController::class, 'showSubCategoryedit'])->name('satici.sub-category-edit');



    //     // Route::get('/satici-user-card', [AdminFrontController::class, 'showUserCard'])->name('satici.user-card');
    //     // Route::get('/satici-user-list', [AdminFrontController::class, 'showUserList'])->name('satici.user-list');
    //     // Route::get('/satici-user-profile', [AdminFrontController::class, 'showUserProfile'])->name('satici.user-profile');



    //     // Route::get('/satici-vendor-card', [AdminFrontController::class, 'showVendorCard'])->name('satici.vendor-card');
    //     // Route::get('/satici-vendor-list', [AdminFrontController::class, 'showVendorList'])->name('satici.vendor-list');
    //     // Route::get('/satici-vendor-profile-{id}', [SaticiController::class, 'indexeditsatici'])->name('indexeditsatici');
    //     // Route::post('/satici-updatesaticiadmin-{id}', [SaticiController::class, 'updatesaticiadmin'])->name('updatesaticiadmin');







    //     // Route::post("satici-CategoriAdd",[CategoryPostController::class, "CategoryAdd"])->name('AdminCategoryAdd');
    //     // Route::post("satici-CategoryEdit-{id}",[CategoryPostController::class, "CategoryEdit"])->name('CategoryEdit');
    //     // Route::get("satici-KategoriDelete-{id}",[CategoryPostController::class, "Categorydelete"])->name('Categorydelete');
    //     // Route::post('/satici-alt-category/add', [CategoryPostController::class, 'AltCategoryAdd'])->name('satici.alt-category.add');
    //     // Route::post('/satici-alt-category/edit/{id}', [CategoryPostController::class, 'AltCategoryEdit'])->name('satici.alt-category.edit');
    //     // Route::get('/satici-altkategorisil{id}', [CategoryPostController::class, 'AltCategoryDelete'])->name('satici.alt-category.delete');
    //     // Route::get('/satici-brand-list', [AdminFrontController::class, 'showBrandList'])->name('satici.brand-list');
    //     Route::post('/satici-marka/ekle', [MarkaController::class, 'ekle'])->name('marka.ekle');
    //     Route::get('/satici-marka/sil/{id}', [MarkaController::class, 'sil'])->name('marka.sil');
    //     Route::get('/satici-kargo-ekle', [AdminFrontController::class, 'showCargoList'])->name('satici.cargo-list');
    //     Route::post('/satici-kargo/ekle', [KargoController::class, 'ekle'])->name('kargo.ekle');
    //     Route::get('/satici-kargo/sil/{id}', [KargoController::class, 'sil'])->name('kargo.sil');
    //     Route::post('/satici-urun/ekle', [UrunEkleController::class, 'ekle'])->name('urun.ekle');
    //     Route::post('/satici-urun/düzenle-{id}', [UrunEkleController::class, 'düzenle'])->name('u9');
    //     Route::get('/satici-Ads-Product', [ReklamController::class, 'index'])->name('index.reklam');
    //     Route::get('/satici-Ads-Product-add', [ReklamController::class, 'adsadd'])->name('index.reklamadd.admin');
    //     Route::post('/satici-Ads-Product-store', [ReklamController::class, 'store'])->name('index.reklamstore');
    //     Route::post('/satici-Ads-Reklam-Bakiye', [ReklamYönetimController::class, 'addbakiye'])->name('index.addbakiye');
    //     Route::post("satici-Add-User",[UsersController::class, "addUser"])->name('addUser');
    //     Route::post("satici-updateUser-{id}",[UsersController::class, "updateUser"])->name('updateUser');
    //     Route::get('/satici-urun-soruları', [SoruCevapController::class, 'ÜrünSoru'])->name('urun-soru');
    //     Route::get('/satici-siparis-soru-genel', [SoruCevapController::class, 'SiparişSoru'])->name('satici.siparis-soru');
    //     Route::post('/satici-siparis-Ürüncevap-{id}', [SoruCevapController::class, 'Ürüncevap'])->name('Ürüncevap');
    //     // Route::get('/satici-Boş', [AdminFrontController::class, 'startIndex'])->name('startIndex');
    //     // Route::get('/satici-Boş-table', [AdminFrontController::class, 'startIndextable'])->name('startIndextable');
    //     // Route::get('/satici-sosyalmedyaindex', [SosyalMedyaController::class, 'sosyalmedyaindex'])->name('sosyalmedyaindex');
    //     // Route::post('/satici-sosyalmedyaindex-post', [SosyalMedyaController::class, 'sosyalMedyaadd'])->name('sosyalMedyaadd');

    //     Route::get('satici-kupon-add', [KuponController::class, 'indexkuponadd'])->name('satici.kupon.add');
    //     Route::get('/satici-kupon-list', [KuponController::class, 'indexkuponlist'])->name('satici.kupon.list');

    //     Route::get('/satici-Ödeme', [ÖdemeController::class, 'indexödeme'])->name('indexödeme');

    //     Route::get("/satici-Destek",[DestekController::class,"indexdestek"])->name("indexdestek");
    //     Route::get("/satici-destek-chat",[DestekController::class,"indexchat"])->name("indexchat");
    //     Route::get("/satici-destek-chat-cevap-{id}",[DestekController::class,"indexchatcevap"])->name("indexchatcevap");
    //     Route::post("/satici-destek",[DestekController::class,"indexdestekolustur"])->name("indexdestekolustur");
    //     Route::post("/satici-destek-cevap-{id}}",[DestekController::class,"destekcevap"])->name("destekcevap");



    //     });




Route::post('/upload', [VisionController::class, 'upload'])->name('upload');



Route::middleware(["Guest"])->group(function(){
    Route::get('/login-admin', [LoginAndRegisterController::class, 'adminlogin'])->name('satici.login');
    // Admin Registration
    Route::get('registeradmin', [LoginAndRegisterController::class, 'registeradmin'])->name('satici.register');
    Route::get('/admin/register/get', [LoginAndRegisterController::class, 'registerget'])->name('satici.register.get');
    Route::post('/admin/register', [LoginAndRegisterController::class, 'registerr'])->name('satici.register.post');
    // Admin Logout
    Route::post('/admin/logout', [LoginAndRegisterController::class, 'logoutadmin'])->name('satici.logout');
    // User Registration
    Route::get('/register', [LoginAndRegisterController::class, 'registerget'])->name('user.register.get');

    Route::post('/register', [LoginAndRegisterController::class, 'registerr'])->name('user.register.post');
    // User Logout

    // User Danışman Page
    Route::get('/login-user', [LoginAndRegisterController::class, 'login'])->name('user.login');

    Route::get('/danisman', [LoginAndRegisterController::class, 'danışman'])->name('user.danisman');
    Route::get('/admin-sign-in', [AdminFrontController::class, 'showSignIn'])->name('satici.sign-in');
    Route::get('/admin-sign-up', [AdminFrontController::class, 'showSignUp'])->name('satici.sign-up');
    Route::post('/login', [LoginAndRegisterController::class, 'loginpost'])->name('user.login.post');
    // Admin Registration
    Route::post('/admin/register', [LoginAndRegisterController::class, 'adminregisterpost'])->name('satici.register.post');
});
Route::get('/logout', [LoginAndRegisterController::class, 'logout'])->name('user.logout');

