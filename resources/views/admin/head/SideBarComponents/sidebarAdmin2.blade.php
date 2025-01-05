
<style>
    @media (max-width: 768px) { /* 768px altındaki ekran genişlikleri için */
    #layout-menu {
        z-index: none; /* Mobilde z-index'i sıfırla */
    }
}
@media (max-width: 1199.98px) {
    .layout-overlay {
        z-index: 3;
    }
}
</style>



<aside id="layout-menu" style="z-index: 1" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
    <div style="max-width: 100%" class="container d-flex h-100">
        <ul class="menu-inner pb-2 pb-xl-0">
            <!-- Kupon Menüsü -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="mdi mdi-fire  px-2"></i>
                    <div>Kupon</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('admin.kupon.list') }}" class="menu-link">
                            <div>Kuponlarım</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.kupon.add') }}" class="menu-link">
                            <div>İndirim Kuponu Oluştur</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="{{ route("tahminler") }}" class="menu-link ">
                    <i class="mdi mdi-fire  px-2"></i>
                    <div>Maç Analizleri</div>
                </a>

            </li>
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link ">
                    <i class="mdi mdi-fire  px-2"></i>
                    <div>Maçları</div>
                </a>

            </li>

            <!-- Müşteri Soruları Menüsü -->
            {{-- <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="mdi mdi-account-group-outline px-2"></i>
                    <div>Müşteri Soruları</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('admin.siparis-soru') }}" class="menu-link">
                            <div>Sipariş Soruları</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('urun-soru') }}" class="menu-link">
                            <div>Ürün Soruları</div>
                        </a>
                    </li>
                </ul>
            </li> --}}

            <!-- Kullanıcılar Menüsü -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="mdi mdi-account-group px-2"></i>
                    <div>Kullanıcılar</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('admin.user-list') }}" class="menu-link">
                            <div>Kullanıcı Listesi</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Aboneler -->
            <li class="menu-item">
                <a href="/Aboneler" class="menu-link">
                    <i class="fas fa-user px-2"></i>
                    <div>Aboneler</div>
                </a>
            </li>

            <!-- E-Ticaret ve Blog Menüsü -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="mdi mdi-account-group px-2"></i>
                    <div>E-Ticaret Ve Blog</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('admin.new-order') }}" class="menu-link">
                            <div>Siparişler</div>
                        </a>
                    </li>
                    {{-- <li class="menu-item">
                        <a href="{{ route('sepetAnaliz') }}" class="menu-link">
                            <div>Sepete Ekleyen Kullanıcılar</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('adminindexpma') }}" class="menu-link">
                            <div>Potansiyel Müşteri Analizi</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.product-list') }}" class="menu-link">
                            <div>Ürünler</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.product-add') }}" class="menu-link">
                            <div>Ürün Ekle</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.main-category') }}" class="menu-link">
                            <div>Kategoriler</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.sub-category') }}" class="menu-link">
                            <div>Alt Kategoriler</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.review-list') }}" class="menu-link">
                            <div>İncelemeler</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.brand-list') }}" class="menu-link">
                            <div>Markalar</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.cargo-list') }}" class="menu-link">
                            <div>Kargo Şirketi Ekle</div>
                        </a>
                    </li> --}}
                    <li class="menu-item">
                        <a href="{{ route('blogs') }}" class="menu-link">
                            <div>Bloglar</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('blogkategori') }}" class="menu-link">
                            <div>Blog Kategorileri</div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="mdi mdi-account-group px-2"></i>
                    <div>Wordpress Web Site Yönetimi</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('wordpress.websitelerim') }}" class="menu-link">
                            <div>Wordpress Sitemi Ekle</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('getWoocommerceIndex') }}" class="menu-link">
                            <div>Woocomerce Ayalarları</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="/wordpress-bloglar" class="menu-link">
                            <div>Bloglar</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route("woocommerce.create") }}" class="menu-link">
                            <div>Ürünler</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('admin.product-list') }}" class="menu-link">
                            <div>Kullanıcılar</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.main-category') }}" class="menu-link">
                            <div>Kategoriler</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.sub-category') }}" class="menu-link">
                            <div>Alt Kategoriler</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.review-list') }}" class="menu-link">
                            <div>İncelemeler</div>
                        </a>
                    </li>


                </ul>
            </li>
            {{-- <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="mdi mdi-account-group px-2"></i>
                    <div>İlan Yönetimi</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('admin.new-order') }}" class="menu-link">
                            <div>İlanlar</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('sepetAnaliz') }}" class="menu-link">
                            <div>İlan</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.product-list') }}" class="menu-link">
                            <div>Üyelik Paketleri</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('admin.product-list') }}" class="menu-link">
                            <div>Mağaza Paketleri</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.product-list') }}" class="menu-link">
                            <div>Dopingler</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.product-list') }}" class="menu-link">
                            <div>İl & İlçe & Mahalle</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('adminindexpma') }}" class="menu-link">
                            <div>Potansiyel Müşteri Analizi</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.product-list') }}" class="menu-link">
                            <div>Ürünler</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.product-add') }}" class="menu-link">
                            <div>Ürün Ekle</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.main-category') }}" class="menu-link">
                            <div>Kategoriler</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.sub-category') }}" class="menu-link">
                            <div>Alt Kategoriler</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.review-list') }}" class="menu-link">
                            <div>İncelemeler</div>
                        </a>
                    </li>


                </ul>
            </li> --}}
            {{-- <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="mdi mdi-account-group px-2"></i>
                    <div>Eğitim Ve Kurslar</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('admin.new-order') }}" class="menu-link">
                            <div>Siparişler</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('sepetAnaliz') }}" class="menu-link">
                            <div>Sepete Ekleyen Kullanıcılar</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('adminindexpma') }}" class="menu-link">
                            <div>Potansiyel Müşteri Analizi</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.product-list') }}" class="menu-link">
                            <div>Kurslar</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('admin.product-add') }}" class="menu-link">
                            <div>Kurs Ekle</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.main-category') }}" class="menu-link">
                            <div>Kategoriler</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.sub-category') }}" class="menu-link">
                            <div>Alt Kategoriler</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.review-list') }}" class="menu-link">
                            <div>İncelemeler</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.brand-list') }}" class="menu-link">
                            <div>Dersler</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.cargo-list') }}" class="menu-link">
                            <div>Sorular</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('blogs') }}" class="menu-link">
                            <div>Kurs Sorular</div>
                        </a>
                    </li>

                </ul>
            </li> --}}
            {{-- <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="mdi mdi-account-group px-2"></i>
                    <div>Randevu Ve Sağlık Web Sitesi</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('admin.new-order') }}" class="menu-link">
                            <div>Siparişler</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('sepetAnaliz') }}" class="menu-link">
                            <div>Sepete Ekleyen Kullanıcılar</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('adminindexpma') }}" class="menu-link">
                            <div>Potansiyel Müşteri Analizi</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.product-list') }}" class="menu-link">
                            <div>Kurslar</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.product-add') }}" class="menu-link">
                            <div>Kurs Ekle</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.main-category') }}" class="menu-link">
                            <div>Kategoriler</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.sub-category') }}" class="menu-link">
                            <div>Alt Kategoriler</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.review-list') }}" class="menu-link">
                            <div>İncelemeler</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.brand-list') }}" class="menu-link">
                            <div>Dersler</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.cargo-list') }}" class="menu-link">
                            <div>Sorular</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('blogs') }}" class="menu-link">
                            <div>Kurs Sorular</div>
                        </a>
                    </li>

                </ul>
            </li> --}}

            <!-- Kurumsal Web Yönetim Menüsü -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="mdi mdi-monitor px-2"></i>
                    <div>Kurumsal Web Yönetim</div>
                </a>
                <ul class="menu-sub">
                    {{-- <li class="menu-item">
                        <a href="{{ route('BasindaBiz') }}" class="menu-link">
                            <div>Basında Biz</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('Galeri') }}" class="menu-link">
                            <div>Galeri</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('MusteriHikayeindex') }}" class="menu-link">
                            <div>Müşteri Hikaye</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('Seminer') }}" class="menu-link">
                            <div>Seminer Verilen Kurumlar</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('resimliyorum.index') }}" class="menu-link">
                            <div>Resimli Yorum Ekle</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.biz-kimiz.index') }}" class="menu-link">
                            <div>Biz Kimiz Sayfası</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.hizmetlerimiz.index') }}" class="menu-link">
                            <div>Hizmetlerimiz Sayfası</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('admin.gizlilik.index') }}" class="menu-link">
                            <div>Gizlilik Politikası Sayfası</div>
                        </a>
                    </li> --}}
                    <li class="menu-item">
                        <a href="{{ route('slider-yonetimi') }}" class="menu-link">
                            <div>Slider Yönetimi</div>
                        </a>
                    </li>
                    {{-- <li class="menu-item">
                        <a href="{{ route('projelerimiz') }}" class="menu-link">
                            <div>Projelerimiz</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('portfolyo-yonetimi') }}" class="menu-link">
                            <div>Portfolyo Yönetimi</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('ss') }}" class="menu-link">
                            <div>En Çok Sorulan Sorular</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('partnerlerimiz') }}" class="menu-link">
                            <div>Partnerlerimiz</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('referanslarimiz') }}" class="menu-link">
                            <div>Referanslarımız</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('ekibimiz') }}" class="menu-link">
                            <div>Ekibimiz</div>
                        </a>
                    </li> --}}
                </ul>
            </li>

            <!-- Finans Menüsü -->
            {{-- <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="mdi mdi-briefcase px-2"></i>
                    <div>Finans</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('indexödemeadmin') }}" class="menu-link">
                            <div>Ödemelerim</div>
                        </a>
                    </li>
                </ul>
            </li> --}}

            <!-- İletişim Menüsü -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="mdi mdi-contact px-2"></i>
                    <div>İletişim</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('admin.iletisim.index') }}" class="menu-link">
                            <div>İletişim Mesajları</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Site Ayarları Menüsü -->
            <li class="menu-item">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="mdi mdi-settings px-2"></i>
                    <div>Site Ayarları</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="/sosyalmedyaindex" class="menu-link">
                            <div>Sosyal Medya Giriş</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('GoogleComments') }}" class="menu-link">
                            <div>Google Yorumlar Entegrasyonu</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('YoutubeChannel') }}" class="menu-link">
                            <div>Youtube Kanal Entegrasyonu</div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>

