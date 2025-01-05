


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div style="background-color: #d47509" class="">
  <ul
    class="nav justify-content-end  "
  >
  <li class="nav-item">
    <a class="nav-link active" href="/admin-index" aria-current="page">
      <i class="fas fa-user"></i> Yönetim Paneli
    </a>
  </li>
    <li class="nav-item">
      <a class="nav-link active" href="/" aria-current="page">
        <i class="fas fa-store"></i> Siteme Git
      </a>
    </li>
    <li class="nav-item d-none d-lg-block">
      <a class="nav-link active" href="/admin-product-add" aria-current="page">
        <i class="fas fa-plus"></i> Ürün Ekle
      </a>
    </li>
    <li class="nav-item mx-3 {{ request()->is('admin-user-*') ? 'active' : '' }}">
        <a class="nav-link " href="/dosyayöneticisi" role="button">
            <i class="mdi mdi-file"></i> Dosya Yöneticisi
        </a>
    </li>
    <li class="nav-item d-none d-lg-block">
        <a class="nav-link active" href="/Panel-Duyuru" aria-current="page">
          <i class="mdi mdi-code-tags-check"></i> Panel Duyuru Sistemi
        </a>
     </li>

    <li class="nav-item d-none d-lg-block">
      <a class="nav-link active" href="{{ route("indexdestek") }}" aria-current="page">
        <i class="fas fa-question-circle"></i> Destek
      </a>
    </li>
    <li class="nav-item">
      <li class="dropdown ">
        <div class="dropdown">
          <button class="dropdown-toggle nav-link ec-drop" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <img width="30" src="assets/img/user/user.png" class="user-image" alt="User Image">
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Profil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ route("user.logout") }}" id="logoutBtn">Çıkış Yap</a></li>
          </ul>
        </div>

      </li>
    </li>

  </ul>



</div>





<div class="row">
    <nav class="navbar navbar-expand-xl bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand mt-3 mb-3 my-3" href="{{ route('admin.index') }}">
                <img width="90" class="mx-5" src="logoblack.png" alt="logo185dijital">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="fa fa-bars"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <a class="navbar-brand mt-3 mb-3 my-3 text-center" href="{{ route('admin.index') }}">
                        <img width="90" class="mx-5" src="logoblack.png" alt="logo185dijital">
                    </a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="menu-container">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-nowrap" id="main-menu">
                            <!-- Kupon Menüsü -->
                            <li class="nav-item dropdown mx-3 {{ request()->is('admin-vendor-*') ? 'active' : '' }}">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-fire"></i> Kupon
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('admin.kupon.list') }}">Kuponlarım</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.kupon.add') }}">İndirim Kuponu Oluştur</a></li>
                                </ul>
                            </li>
                            <!-- Müşteri Soruları Menüsü -->
                            <li class="nav-item dropdown mx-3 {{ request()->is('admin-vendor-*') ? 'active' : '' }}">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-account-group-outline"></i> Müşteri Soruları
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('admin.siparis-soru') }}">Sipariş Soruları</a></li>
                                    <li><a class="dropdown-item" href="{{ route('urun-soru') }}">Ürün Soruları</a></li>
                                </ul>
                            </li>
                            <!-- Kullanıcılar Menüsü -->
                            <li class="nav-item dropdown mx-3 {{ request()->is('admin-user-*') ? 'active' : '' }}">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-account-group"></i> Kullanıcılar
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('admin.user-list') }}">Kullanıcı Listesi</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/Aboneler" aria-current="page">
                                  <i class="fas fa-user"></i> Aboneler
                                </a>
                              </li>
                            {{-- <li class="nav-item dropdown mx-3 {{ request()->is('admin-user-*') ? 'active' : '' }}">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-account-group"></i> Satıcılar
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/admin-vendor-list">Satıcı Listesi</a></li>
                                </ul>
                            </li> --}}
                            <!-- Sipariş ve Kargo Menüsü -->
                            <li class="nav-item dropdown mx-3 {{ request()->is('admin-user-*') ? 'active' : '' }}">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-account-group"></i> E-Ticaret Ve Blog
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('admin.new-order') }}">Siparişler</a></li>
                                    <li><a class="dropdown-item" href="{{ route('sepetAnaliz') }}">Sepete Ekleyen Kullanıcılar</a></li>
                                    <li><a class="dropdown-item" href="{{ route('adminindexpma') }}">Potansiyel Müşteri Analizi</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.product-list') }}">Ürünler</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.product-add') }}">Ürün Ekle</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.main-category') }}">Kategoriler</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.sub-category') }}">Alt Kategoriler</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.review-list') }}">İncelemeler</a></li>

                                    <li><a class="dropdown-item" href="{{ route('admin.brand-list') }}">Markalar</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.cargo-list') }}">Kargo Şirketi Ekle</a></li>
                                    <li><a class="dropdown-item" href="{{ route('blogs') }}">Bloglar</a></li>
                                    <li><a class="dropdown-item" href="{{ route('blogkategori') }}">Blog Kategorileri</a></li>
                                </ul>
                            </li>
                            <!-- More menu items... -->
                            <li class="nav-item dropdown mx-3 {{ request()->is('admin-user-*') ? 'active' : '' }}">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-monitor"></i> Kurumsal Web Yönetim
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('BasindaBiz') }}">Basında Biz</a></li>
                                    <li><a class="dropdown-item" href="{{ route('Galeri') }}">Galeri</a></li>
                                    <li><a class="dropdown-item" href="{{ route('MusteriHikayeindex') }}">Müşteri Hikaye</a></li>
                                    <li><a class="dropdown-item" href="{{ route('Seminer') }}">Seminer Verilen Kurumlar</a></li>
                                    <li><a class="dropdown-item" href="{{ route('resimliyorum.index') }}">Resimli Yorum Ekle</a></li>

                                    <li><a class="dropdown-item" href="{{ route('admin.biz-kimiz.index') }}">Biz Kimiz Sayfası</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.hizmetlerimiz.index') }}">Hizmetlerimiz Sayfası</a></li>
                                    <li><a class="dropdown-item" href="{{ route('admin.gizlilik.index') }}">Gizlilik Politikası Sayfası</a></li>
                                    <li><a class="dropdown-item" href="{{ route('slider-yonetimi') }}">Slider Yönetimi</a></li>
                                    <li><a class="dropdown-item" href="{{ route('projelerimiz') }}">Projelerimiz</a></li>
                                    <li><a class="dropdown-item" href="{{ route('portfolyo-yonetimi') }}">Portfolyo Yönetimi</a></li>
                                    <li><a class="dropdown-item" href="{{ route('ss') }}">En Çok Sorulan Sorular</a></li>
                                    <li><a class="dropdown-item" href="{{ route('partnerlerimiz') }}">Partnerlerimiz</a></li>
                                    <li><a class="dropdown-item" href="{{ route('referanslarimiz') }}">Referanslarımız</a></li>
                                    <li><a class="dropdown-item" href="{{ route('ekibimiz') }}">Ekibimiz</a></li>
                                </ul>
                            </li>

                            <!-- Finans Menüsü -->
                            <li class="nav-item dropdown mx-3 {{ request()->is('admin-user-*') ? 'active' : '' }}">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-briefcase"></i> Finans
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route("indexödemeadmin") }}">Ödemelerim</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown mx-3 {{ request()->is('admin-user-*') ? 'active' : '' }}">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-contact"></i> İletişim
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route("admin.iletisim.index") }}">İletişim Mesajları</a></li>
                                </ul>
                            </li>

                            <!-- Site Ayarları Menüsü -->
                            <li class="nav-item dropdown mx-3 {{ request()->is('admin-vendor-*') ? 'active' : '' }}">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-settings"></i> Site Ayarları
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/sosyalmedyaindex">Sosyal Medya Giriş</a></li>
                                    <li><a class="dropdown-item" href="{{ route("GoogleComments") }}">Google Yorumlar Entegrasyonu</a></li>
                                    <li><a class="dropdown-item" href="{{ route("YoutubeChannel") }}">Youtube Kanal Entegrasyonu</a></li>
                                    {{-- <li><a class="dropdown-item" href="#">Sosyal Medya Giriş Ayarları</a></li>
                                    <li><a class="dropdown-item" href="#">İndirim Kuponu Oluştur</a></li> --}}
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const nav = document.querySelector('.navbar-nav');
    let isDown = false;
    let startX;
    let scrollLeft;

    nav.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.pageX - nav.offsetLeft;
        scrollLeft = nav.scrollLeft;
    });

    nav.addEventListener('mouseleave', () => {
        isDown = false;
    });

    nav.addEventListener('mouseup', () => {
        isDown = false;
    });

    nav.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - nav.offsetLeft;
        const walk = (x - startX) * 3; // Hızı ayarlamak için 3 ile çarpılıyor
        nav.scrollLeft = scrollLeft - walk;
    });
});

</script>




{{-- <div class="">

  <div  id="salesInfo" style="background-image: url('images/tob.png'); padding-bottom: 3px; padding-top: 3px;" class="row">

    <div>
        <p id="salesText" style="color: #ffffff; font-weight: bold;" class="text-center mt-3 mb-3"></p>
    </div>
</div> --}}



</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Satış bilgisi için kullanılacak rastgele yazılar dizisi
        var salesTexts = [
            "Bilgi : Satişlarınızı Arttımak için Ürün Açıklamasını En Detaylı Şekilde Giriniz",
            "Bilgi : E-ticaret başarınızı artırmak için doğru ürün stratejileri belirleyin",
            "Bilgi : Müşteri memnuniyeti odaklı hizmetler sunarak satışlarınızı artırın",
            "Bilgi : Yeni ürün tanıtımlarıyla müşteri ilgisini canlı tutun",
            "Bilgi : Sosyal medya stratejilerinizi güçlendirerek marka bilinirliğinizi artırın",
            "Bilgi : Veri analizi yaparak müşteri tercihlerini daha iyi anlayın ve satış stratejilerinizi optimize edin",
            "Bilgi : Rakiplerinizi inceleyerek pazarlama stratejilerinizi güncelleyin ve rekabet avantajı sağlayın",
            "Bilgi : Müşteri geri bildirimlerini dikkate alarak ürün ve hizmetlerinizi geliştirin",
            "Bilgi : Kampanyalar ve indirimlerle müşteri çekiciliğinizi artırın",
            "Bilgi : SEO stratejileri kullanarak online görünürlüğünüzü artırın",
            "Bilgi : Dönüşüm oranlarınızı artırmak için kullanıcı deneyimini iyileştirin",
            "Bilgi : Hedef kitlenizle etkili iletişim kurarak sadık müşteri tabanı oluşturun",
            "Bilgi : Mobil ticaret trendlerini takip ederek satışlarınızı mobil platformlarda artırın",
            "Bilgi : Ürünlerinizi öne çıkaracak görseller ve videolar kullanın",
            "Bilgi : E-posta pazarlama stratejileriyle müşteri ilişkilerinizi güçlendirin",
            "Bilgi : Sosyal medya reklamlarıyla potansiyel müşteri kitlenize ulaşın",
            "Bilgi : A/B testleri yaparak en etkili pazarlama yöntemlerini belirleyin",
            "Bilgi : Tedarik zinciri yönetimini optimize ederek stok yönetimini iyileştirin",
            "Bilgi : Yerel pazarlama stratejileriyle yerel müşteri kitlenize odaklanın",
            "Bilgi : Çapraz satış yöntemleriyle müşteri harcamalarını artırın",
            "Bilgi : Sürdürülebilirlik ve sosyal sorumluluk projeleriyle marka imajınızı güçlendirin",
            "Bilgi : Hızlı ve güvenilir teslimat seçenekleri sunarak müşteri memnuniyetini artırın",
            "Bilgi : Influencer işbirlikleriyle ürünlerinizi tanıtın",
            "Bilgi : Abonelik modelleri ve sadakat programlarıyla tekrarlayan satışlarınızı artırın",
            "Bilgi : Müşteri destek süreçlerinizi optimize ederek müşteri memnuniyetini sağlayın",
            "Bilgi : Dijital pazarlama stratejileriyle geniş bir müşteri kitlesine ulaşın",
            "Bilgi : E-ticaret platformlarınızı güncelleyerek kullanıcı deneyimini iyileştirin",
            "Bilgi : Rekabet analizi yaparak farklılaşma stratejileri geliştirin",
            "Bilgi : Satış hunisi optimizasyonu yaparak dönüşüm oranlarınızı artırın"
            // İstediğiniz kadar yazı ekleyebilirsiniz
        ];

        // Rastgele bir yazı seçme
        var randomIndex = Math.floor(Math.random() * salesTexts.length);
        var randomSalesText = salesTexts[randomIndex];

        // Yazıyı HTML içine yerleştirme
        var salesTextElement = document.getElementById('salesText');
        salesTextElement.textContent = randomSalesText;

        // Elementi görünür yapma
        var salesInfoDiv = document.getElementById('salesInfo');
        salesInfoDiv.style.display = 'block';
    });
</script>
{{-- <script>
  document.addEventListener('DOMContentLoaded', function() {
  const mainMenu = document.getElementById('main-menu');
  const extraMenu = document.getElementById('extra-menu');
  const extraMenuList = document.getElementById('extra-menu-list');
  const navbar = document.querySelector('.navbar');

  function checkOverflow() {
    const navbarWidth = navbar.offsetWidth;
    const mainMenuWidth = mainMenu.offsetWidth;
    const extraMenuWidth = extraMenu.offsetWidth;

    // Reset the extra menu
    extraMenuList.innerHTML = '';
    extraMenu.style.display = 'none';

    let totalWidth = 0;
    const menuItems = Array.from(mainMenu.children);
    for (let i = 0; i < menuItems.length; i++) {
      totalWidth += menuItems[i].offsetWidth;
      if (totalWidth > navbarWidth - extraMenuWidth) {
        extraMenu.style.display = 'block';
        while (i < menuItems.length) {
          extraMenuList.appendChild(menuItems[i]);
        }
        break;
      }
    }
  }

  window.addEventListener('resize', checkOverflow);
  checkOverflow();
});

</script> --}}
