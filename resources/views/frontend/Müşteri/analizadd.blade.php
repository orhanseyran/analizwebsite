<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Student Dashboard - Online Courses & Education Bootstrap5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets2/images/favicon.png">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="assets2/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets2/css/vendor/slick.css">
    <link rel="stylesheet" href="assets2/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets2/css/plugins/sal.css">
    <link rel="stylesheet" href="assets2/css/plugins/feather.css">
    <link rel="stylesheet" href="assets2/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="assets2/css/plugins/euclid-circulara.css">
    <link rel="stylesheet" href="assets2/css/plugins/swiper.css">
    <link rel="stylesheet" href="assets2/css/plugins/magnify.css">
    <link rel="stylesheet" href="assets2/css/plugins/odometer.css">
    <link rel="stylesheet" href="assets2/css/plugins/animation.css">

    <link rel="stylesheet" href="assets2/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets2/css/plugins/magnigy-popup.min.css">
    <link rel="stylesheet" href="assets2/css/plugins/plyr.css">
    <link rel="stylesheet" href="assets2/css/style.css">
</head>

<body>

    <!-- Start Header Area -->
    @include('frontend.components.header.headernew')

    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
    </div>
    <!-- Start Card Style -->
    <div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Dashboard Top  -->

                        @include('frontend.Müşteri.head.dashboard-content')


                    <!-- End Dashboard Top  -->

                    <div class="row g-5">
                        @include('frontend.Müşteri.head.sidebar')


                        <div class="col-lg-9">
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @elseif (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>

                            @endif
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb--60">
                                <div class="content">
                                    <div class="section-title">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="rbt-title-style-3">Kupon Oluştur & Analiz Ekle</h4>

                                            </div>
                                            <div class="col-md-6 text-end">
                                                <a class="rbt-btn btn-md hover-icon-reverse" href="/Kuponlar">
                                                    <span class="icon-reverse-wrapper">
                                                        <span class="btn-icon"><i class="feather-arrow-left"></i></span>
                                                        <span class="btn-text text-end">Analizlerim</span>

                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row g-5">

                                        <!-- Start Single Card  -->

                                        <!-- End Single Card  -->

                                        <!-- Start Single Card  -->
                                        <div class="container my-5">


                                            <form action="{{ route("Analizstore",$id) }}" method="POST" class="border p-4 mb-5">
                                                @csrf
                                              <div class="row g-3">
                                                {{-- <div class="col-md-12">
                                                    <label for="matchName" class="form-label">Analiz Adı</label>
                                                    <input
                                                      type="text"
                                                      class="form-control"
                                                      id="matchName"
                                                      name="coupon_name"
                                                      value="{{ old('coupon_name') }}"
                                                      placeholder="Ör. Ben Sizin için La Liga Günün Maç Analizi Yapıyorum"
                                                    />
                                                  </div> --}}
                                                  <div class="col-md-6">
                                                    <label for="prediction" class="form-label">Karşılaşma Adı</label>
                                                    <select class="form-select" name="match_name" id="match_name" >
                                                      <option value="" disabled selected>Karşılaşma Seçiniz</option>
                                                      @foreach ($fixtures as $get)
                                                      <optgroup label="{{ $get->league_name }}">
                                                      <option value="{{ $get->home_team_name }} vs {{ $get->away_team_name }}">{{ $get->home_team_name }} vs {{ $get->away_team_name }}</option>
                                                    </optgroup>
                                                      @endforeach
                                                    </select>
                                                  </div>

                                                <style>
                                                    .form-select {
                                                        display: block;
                                                        width: 100%;
                                                        padding: .375rem 2.25rem .375rem .75rem;
                                                        -moz-padding-start: calc(0.75rem - 3px);
                                                        font-size: 19px;
                                                        font-weight: 400;
                                                        line-height: 1.5;
                                                        color: #212529;
                                                        background-color: #fff;
                                                        background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e);
                                                        background-repeat: no-repeat;
                                                        background-position: right .75rem center;
                                                        background-size: 16px 12px;
                                                        border: 1px solid #ced4da;
                                                        border-radius: .25rem;
                                                        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
                                                        -webkit-appearance: none;
                                                        -moz-appearance: none;
                                                        appearance: none;
                                                    }
                                                    .form-control {
                                                        display: block;
                                                        width: 100%;
                                                        padding: .375rem .75rem;
                                                        font-size: 18px;
                                                        font-weight: 400;
                                                        line-height: 1.5;
                                                        color: #212529;
                                                        background-color: #fff;
                                                        background-clip: padding-box;
                                                        border: 1px solid #ced4da;
                                                        -webkit-appearance: none;
                                                        -moz-appearance: none;
                                                        appearance: none;
                                                        border-radius: .25rem;
                                                        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
                                                    }
                                                </style>
                                                <div class="col-md-6">
                                                    <label for="prediction" class="form-label">Tahmin</label>
                                                    <select class="form-select" id="prediction" name="prediction">
                                                        <option value="" disabled selected>Tüm Bahis Seçenekleri</option>

                                                        <!-- Maç Sonucu (MS) -->
                                                        <optgroup label="Maç Sonucu (MS)">
                                                          <option value="1 (Ev Sahibi Kazanır)">1 (Ev Sahibi Kazanır)</option>
                                                          <option value="0 (Beraberlik)">0 (Beraberlik)</option>
                                                          <option value="2 (Deplasman Kazanır)">2 (Deplasman Kazanır)</option>
                                                        </optgroup>

                                                        <!-- Çifte Şans (ÇŞ) -->
                                                        <optgroup label="Çifte Şans (ÇŞ)">
                                                          <option value="1X (Ev Sahibi veya Beraberlik)">1X (Ev Sahibi veya Beraberlik)</option>
                                                          <option value="12 (Ev Sahibi veya Deplasman)">12 (Ev Sahibi veya Deplasman)</option>
                                                          <option value="X2 (Beraberlik veya Deplasman)">X2 (Beraberlik veya Deplasman)</option>
                                                        </optgroup>

                                                        <!-- Üst / Alt (Gol) -->
                                                        <optgroup label="Üst / Alt (Gol)">
                                                          <option value="Üst (1.5)">Üst (1.5)</option>
                                                          <option value="Alt (1.5)">Alt (1.5)</option>
                                                          <option value="Üst (2.5)">Üst (2.5)</option>
                                                          <option value="Alt (2.5)">Alt (2.5)</option>
                                                          <option value="Üst (3.5)">Üst (3.5)</option>
                                                          <option value="Alt (3.5)">Alt (3.5)</option>
                                                        </optgroup>

                                                        <!-- Karşılıklı Gol (KG Var/Yok) -->
                                                        <optgroup label="Karşılıklı Gol">
                                                          <option value="KG Var (İki takım da gol atar)">KG Var (İki takım da gol atar)</option>
                                                          <option value="KG Yok (En az bir takım gol atamaz)">KG Yok (En az bir takım gol atamaz)</option>
                                                        </optgroup>

                                                        <!-- Takım Gol Bahisleri -->
                                                        <optgroup label="Takım Gol Bahisleri">
                                                          <option value="Ev Sahibi 1.5 Üst">Ev Sahibi 1.5 Üst</option>
                                                          <option value="Ev Sahibi 1.5 Alt">Ev Sahibi 1.5 Alt</option>
                                                          <option value="Deplasman 0.5 Üst">Deplasman 0.5 Üst</option>
                                                          <option value="Deplasman 0.5 Alt">Deplasman 0.5 Alt</option>
                                                        </optgroup>

                                                        <!-- Korner Bahisleri -->
                                                        <optgroup label="Korner Bahisleri">
                                                          <option value="Kornerler 8.5 Üst">Kornerler 8.5 Üst</option>
                                                          <option value="Kornerler 8.5 Alt">Kornerler 8.5 Alt</option>
                                                        </optgroup>

                                                        <!-- Handikaplı Bahisler (Örnek) -->
                                                        <optgroup label="Handikaplı Bahisler (Örnek)">
                                                          <option value="H1 (Ev Sahibi Handikaplı Kazanır)">H1 (Ev Sahibi Handikaplı Kazanır)</option>
                                                          <option value="H0 (Handikapla Beraberlik)">H0 (Handikapla Beraberlik)</option>
                                                          <option value="H2 (Deplasman Handikaplı Kazanır)">H2 (Deplasman Handikaplı Kazanır)</option>
                                                        </optgroup>

                                                        <!-- İlk Yarı Sonucu (İY) -->
                                                        <optgroup label="İlk Yarı Sonucu (İY)">
                                                          <option value="İY 1 (Ev Sahibi Önde)">İY 1 (Ev Sahibi Önde)</option>
                                                          <option value="İY 0 (Beraberlik)">İY 0 (Beraberlik)</option>
                                                          <option value="İY 2 (Deplasman Önde)">İY 2 (Deplasman Önde)</option>
                                                        </optgroup>

                                                        <!-- İkinci Yarı Sonucu (İY2) -->
                                                        <optgroup label="İkinci Yarı Sonucu (İY2)">
                                                          <option value="İY 2. Yarı 1 (Ev Sahibi Önde)">İY 2. Yarı 1 (Ev Sahibi Önde)</option>
                                                          <option value="İY 2. Yarı 0 (Beraberlik)">İY 2. Yarı 0 (Beraberlik)</option>
                                                          <option value="İY 2. Yarı 2 (Deplasman Önde)">İY 2. Yarı 2 (Deplasman Önde)</option>
                                                        </optgroup>
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="my-3">
                                                <label for="analysis" class="form-label">Analiz Yazısı</label>
                                                <textarea
                                                  class="form-control"
                                                  id="analysis"
                                                  name="analysis"
                                                  rows="4"
                                                  placeholder="Maç ile ilgili düşüncelerinizi yazın..."
                                                ></textarea>
                                              </div>

                                              <button style="width: 250px; height:40px; font-size:18px; border-radius:20px;" type="submit" class="btn btn-primary btn-lg">Kuponu Kaydet</button>
                                            </form>

                                            <!-- Statik Kupon Listesi - Örnek tablo -->
                                            <h4 class="rbt-title-style-3">Kupon Listesi</h4>

                                            <table class="table table-striped table-hover">
                                              <thead class="table-dark">
                                                <tr>
                                                  <th scope="col">Karşılaşma</th>
                                                  <th scope="col">Tahmin</th>
                                                  <th scope="col">Analiz</th>
                                                  <th scope="col">İşlemler</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                @foreach ($Cupon as $get )
                                                <tr>
                                                    <td>{{ $get->match_name }}</td>
                                                    <td>{{ $get->prediction }}</td>
                                                    <td>{{ Str::limit($get->analysis,50, '...') }}</td>
                                                    <td>
                                                        <a
                                                          href="{{ route('AnalizDelete', $get->id) }}"
                                                          onclick="return confirm('Silmek istediğinize emin misiniz?')"
                                                          class="btn btn-danger btn-lg"
                                                        >
                                                          Sil
                                                        </a>
                                                      </td>
                                                  </tr>

                                                @endforeach
                                                <!-- Modal trigger button -->


                                                <!-- Modal Body -->
                                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->

                                                <!-- Optional: Place to the bottom of scripts -->


                                                <!-- Burada statik örnek verilmiştir. Veriler dinamik olarak backend üzerinden çekilebilir -->


                                              </tbody>
                                            </table>
                                          </div>
                                        <!-- End Single Card  -->



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- Start Footer aera -->

    @include('frontend.components.footer.footernew')

    <!-- End Footer aera -->
    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="assets2/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets2/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets2/js/vendor/bootstrap.min.js"></script>
    <!-- sal.js -->
    <script src="assets2/js/vendor/sal.js"></script>
    <script src="assets2/js/vendor/swiper.js"></script>
    <script src="assets2/js/vendor/magnify.min.js"></script>
    <script src="assets2/js/vendor/jquery-appear.js"></script>
    <script src="assets2/js/vendor/odometer.js"></script>
    <script src="assets2/js/vendor/backtotop.js"></script>
    <script src="assets2/js/vendor/isotop.js"></script>
    <script src="assets2/js/vendor/imageloaded.js"></script>

    <script src="assets2/js/vendor/wow.js"></script>
    <script src="assets2/js/vendor/waypoint.min.js"></script>
    <script src="assets2/js/vendor/easypie.js"></script>
    <script src="assets2/js/vendor/text-type.js"></script>
    <script src="assets2/js/vendor/jquery-one-page-nav.js"></script>
    <script src="assets2/js/vendor/jquery-ui.js"></script>
    <script src="assets2/js/vendor/magnify-popup.min.js"></script>
    <script src="assets2/js/vendor/paralax-scroll.js"></script>
    <script src="assets2/js/vendor/paralax.min.js"></script>
    <script src="assets2/js/vendor/countdown.js"></script>
    <script src="assets2/js/vendor/plyr.js"></script>
    <!-- Main JS -->
    <script src="assets2/js/main.js"></script>
</body>

</html>
