<div class="col-lg-3">
    <!-- Start Dashboard Sidebar  -->
    <div class="rbt-default-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
        <div class="inner">
            <div class="content-item-content">

                <div class="rbt-default-sidebar-wrapper">
                    <div class="section-title mb--20">
                        <h6 class="rbt-title-style-2">Hoşgeldin, {{ auth()->user()->name }}</h6>
                    </div>
                    <nav class="mainmenu-nav">
                        <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                            <!-- Buradaki linkleri kendi dosya isimlerinize göre uyarlayın -->
                            <li><a href="{{ route("musteri.index") }}"><i class="feather-home"></i><span>Ana Sayfa</span></a></li>
                            <li><a href="{{ route("Jetonlar") }}"><i class="feather-dolar"></i><span>Jetonlarım</span></a></li>

                            {{-- <li><a href="kullanici-profil.html"><i class="feather-user"></i><span>Profilim</span></a></li>
                            <li><a href="kullanici-takip-edilen-kuponlar.html"><i class="feather-book-open"></i><span>Takip Edilen Kuponlar</span></a></li> --}}
                            <li><a href="{{ route("musteri.wishlist") }}"><i class="feather-bookmark"></i><span>Favorilerim</span></a></li>
                            <li><a href="/Yorumlarım"><i class="feather-star"></i><span>Kupon Yorumlarım</span></a></li>
                            {{-- <li><a href="kullanici-tahmin-denemeler.html"><i class="feather-help-circle"></i><span>Tahmin Denemelerim</span></a></li> --}}
                            <li><a href="{{ route("kuponlar") }}"><i class="feather-shopping-bag"></i><span>Kupon Geçmişi</span></a></li>
                        </ul>
                    </nav>

                    <div class="section-title mt--40 mb--20">
                        <h6 class="rbt-title-style-2">Kullanıcı</h6>
                    </div>

                    <nav class="mainmenu-nav">
                        <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                            <li><a href="{{ route("ayarlar") }}"><i class="feather-settings"></i><span>Ayarlar</span></a></li>
                            <li><a href="index.html"><i class="feather-log-out"></i><span>Çıkış Yap</span></a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
    <!-- End Dashboard Sidebar  -->
</div>
