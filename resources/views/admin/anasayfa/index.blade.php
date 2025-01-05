<!DOCTYPE html>
<html lang="en" dir="ltr">
@include('admin.head.SideBarComponents.head')

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">

    <!--  WRAPPER  -->
    <div class="row">

        <!-- LEFT MAIN SIDEBAR -->

        @include('admin.head.sidebar')

        <!-- PAGE WRAPPER -->
        <div class="row">

            <!-- Header -->
            <div style="display: none">
                @include('admin.head.header')
            </div>

            <style>
                .seller-info {

                    background-color: #ffffff;

                    border-radius: 5px;
                    padding: 10px;
                    display: flex;
                    flex-direction: column;
                    align-items: start;
                    justify-content: space-between;
                }

                @media (min-width: 768px) {
                    .seller-info {
                        flex-direction: row;
                        align-items: center;
                    }
                }

                .seller-details {
                    display: flex;
                    align-items: center;
                    margin-bottom: 10px;
                }

                .seller-details i {
                    font-size: 2rem;
                    color: orange;
                    margin-right: 10px;
                }

                .seller-stats {
                    display: flex;
                    align-items: center;
                }

                .seller-stats .badge {
                    margin-right: 10px;
                }

                .seller-meta {
                    display: flex;
                    flex-wrap: wrap;
                    align-items: center;
                }

                .seller-meta .info {
                    margin: 5px 10px 5px 0;
                    display: flex;
                    align-items: center;
                    padding: 5px 10px;
                    border-radius: 5px;
                }

                .bg-light-grey {
                    background-color: #f8f9fa;
                }

                .bg-light-green {
                    background-color: #d4edda;
                }

                .bg-light-purple {
                    background-color: #e2e3f3;
                }

                .bg-light-blue {
                    background-color: #cce5ff;
                }
            </style>
            <div class="card mt-4">
                <div class="container-fluid mt-5">
                    <div class="seller-info">
                        <div class="seller-details">
                            <i class="fa-solid fa-store mb-5"></i>

                            <div>
                                <h3 class="">Merhaba Bayaffluence (ID 928180)</h3>
                                <div class="seller-stats mt-3">
                                    <span style="font-size: 14px" class="badge bg-success p-3">Toplam Ürün:
                                        {{ $products->count() }}</span>
                                    <span style="font-size: 14px" class="badge bg-purple p-3">Toplam Ziyaretci:
                                        {{ $pmaall->count() }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="seller-meta">
                            <div class="info bg-light-grey p-3">
                                Güncel Termin Süresi <strong class="px-1">2 Gün</strong>
                            </div>
                            <div class="info bg-light-green p-3 ">
                                Operasyon Durumu <strong class="px-1">Normal</strong> <i
                                    class="fa-solid fa-info-circle px-3"></i>
                            </div>
                            <div class="info bg-light-purple p-3">
                                İhlal Puanı <strong class="px-1">0 Puan</strong> <i
                                    class="fa-solid fa-info-circle px-3"></i>
                            </div>
                            <div class="info">
                                <a href="#" class="btn btn-link p-0">Yardım <i
                                        class="fa-solid fa-question-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!-- CONTENT WRAPPER -->
            <div class="container-fluid">
                <div class="row">
                    <div class="content">
                        <style>

                        </style>


                        <div class="row">

                            <div class="row">

                                <div class="col-md-8">
                                    <div class="card  pt-3 pb-5">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h5 class="px-3">Satış Performansım</h5>
                                            <button class="btn btn-warning mx-3">Canlı Performansım</button>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mt-3">
                                                <div class="card">
                                                    <div class="card-header">Bugünkü Satış</div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                            {{ number_format($orderDaily->sum('per_price')) }} ₺</h5>
                                                        <p class="card-text">%{{ $percentageChangeDaily }} <i
                                                                class="info-icon"></i></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div class="card">
                                                    <div class="card-header">30 Günlük Satış</div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                            {{ number_format($order30Days->sum('ordermount')) }} ₺</h5>
                                                        <p class="card-text">%{{ $percentageChange30DaysDaily }} <i
                                                                class="info-icon"></i></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div class="card">
                                                    <div class="card-header">Son 1 Haftalık Satış</div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                            {{ number_format($orderWeekly->sum('per_price')) }} ₺</h5>
                                                        <p class="card-text">%{{ $percentageChangeWeeklyDaily }} <i
                                                                class="info-icon"></i></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <div class="card">
                                                    <div class="card-header">Toplam Satiş</div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">
                                                            {{ number_format($orderFull->sum('per_price')) }} ₺</h5>
                                                        <a href="#" class="card-link">Tahmini Toplam Tutar <i
                                                                class="info-icon"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>






                                </div>
                                <div class="col-md-4">

                                    <div class="card pb-4 pt-4">
                                        <h2 class="mb-3 mx-3"><i class="fas fa-bullhorn" style="color: orange;"></i>
                                            Duyurular</h2>

                                        <div id="carouselExampleControlsNoTouching" class="carousel slide"
                                            data-bs-touch="false">
                                            <div class="carousel-inner">
                                                @foreach ($duyuru as $get)
                                                    @if ($get->aktif == 1)
                                                        <div style="height: 100%" class="carousel-item active">
                                                            <img src="{{ $get->duyuru_resim }}" class="d-block w-100"
                                                                alt="...">

                                                        </div>
                                                    @else
                                                        <div class="carousel-item">
                                                            <img src="{{ $get->duyuru_resim }}" class="d-block w-100"
                                                                alt="...">
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleControlsNoTouching"
                                                data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleControlsNoTouching"
                                                data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                        <style>
                            .quick-access-icon {
                                font-size: 2rem;
                            }

                            .card-title {
                                font-size: 28px;
                                margin-bottom: 0.5rem;
                            }

                            .card-header:first-child {
                                font-size: 18px;
                                border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
                            }
                        </style>
                        <div class="row  mt-4 mb-5">

                            <div class="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card ">
                                            <h3 class="mt-3 mb-3 mx-3">Hızlı Erişim</h3>
                                            <div class="row text-center">
                                                <div class="col-md-2">
                                                    <a href="/admin-product-list">
                                                        <div class="">
                                                            <div class="card-body">
                                                                <i class="fas fa-box-open quick-access-icon"
                                                                    style="color: #8e44ad;"></i>
                                                                <a href="">
                                                                    <p class="card-text mt-2">Satıştaki Ürünlerim</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>
                                                <div class="col-md-2">
                                                    <a href="/admin-order-order">
                                                        <div class="">
                                                            <div class="card-body">
                                                                <i class="fas fa-truck quick-access-icon"
                                                                    style="color: #e67e22;"></i>
                                                                <p class="card-text mt-2"> Siparişlerim</p>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>
                                                <div class="col-md-2">
                                                    <div class="">
                                                        <div class="card-body">
                                                            <i class="fas fa-bullhorn quick-access-icon"
                                                                style="color: #2ecc71;"></i>
                                                            <p class="card-text mt-2">Reklam Yönetimi (Devre Dışı)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="/admin-iletisim">
                                                        <div class="">
                                                            <div class="card-body">
                                                                <i class="fas fa-globe quick-access-icon"
                                                                    style="color: #3498db;"></i>
                                                                <p class="card-text mt-2">İletişim Soruları</p>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>
                                                <div class="col-md-2">
                                                    <a href="/adminindexpma">
                                                        <div class="">
                                                            <div class="card-body">
                                                                <i class="fas fa-star quick-access-icon"
                                                                    style="color: #1abc9c;"></i>
                                                                <p class="card-text mt-2">PMA Raporu</p>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>
                                                <div class="col-md-2">
                                                    <a href="/sepetAnaliz">
                                                        <div class="">
                                                            <div class="card-body">
                                                                <i class="fas fa-heart quick-access-icon"
                                                                    style="color: #e74c3c;"></i>
                                                                <p class="card-text mt-2">SEK Raporu</p>
                                                            </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                                <style>

                                </style>



                            </div>


                        </div>

                    </div>









                    <!-- Top Statistics -->
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                            <div class="card card-mini dash-card card-1 p-4">
                                <div class="card-body">
                                    <h2 class="mb-1">{{ $activeUsers->count() }}</h2>
                                    <p>Aktif Kullanıcı</p>
                                    <span class="mdi mdi-account-arrow-left"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                            <div class="card card-mini dash-card card-2 p-4">
                                <div class="card-body">
                                    <h2 class="mb-1">{{ $pma->count() }}</h2>
                                    <p>Günlük Ziyaretçiler</p>
                                    <span class="mdi mdi-account-clock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                            <div class="card card-mini dash-card card-3 p-4">
                                <div class="card-body">
                                    <h2 class="mb-1">{{ $orderDaily->count() }}</h2>
                                    <p>Günlük Siparişler</p>
                                    <span class="mdi mdi-package-variant"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                            <div class="card card-mini dash-card card-4 p-4">
                                <div class="card-body">
                                    <h2 class="mb-1">{{ number_format($orderDaily->sum('per_price')) }} ₺</h2>
                                    <p>Günlük Gelir</p>
                                    <span class="mdi mdi-currency-usd"></span>
                                </div>
                            </div>
                        </div>
                    </div>





                    {{-- <div class="row">
                            <div class="col-xl-8 col-md-12 p-b-15">
                                <!-- Kullanıcı aktivite istatistikleri -->
                                <div class="card card-default" id="user-activity">
                                    <div class="no-gutters">
                                        <div>
                                            <div class="card-header justify-content-between">
                                                <h2>Kullanıcı Aktivitesi</h2>
                                                <div class="date-range-report">
                                                    <span></span>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="tab-content" id="userActivityContent">
                                                    <div class="tab-pane fade show active" id="user" role="tabpanel">
                                                        <canvas id="activity" class="chartjs"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer d-flex flex-wrap bg-white border-top">
                                                <a href="#" class="text-uppercase py-3">Detaylı İnceleme</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12 p-b-15">
                                <div class="card card-default">
                                    <div class="card-header flex-column align-items-start">
                                        <h2>Mevcut Kullanıcılar</h2>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="currentUser" class="chartjs"></canvas>
                                    </div>
                                    <div class="card-footer d-flex flex-wrap bg-white border-top">
                                        <a href="#" class="text-uppercase py-3">Detaylı İnceleme</a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                    {{--
                        <div class="row">
                            <div class="col-xl-8 col-12 p-b-15">
                                <!-- Dünya Haritası -->
                                <div class="card card-default" id="analytics-country">
                                    <div class="card-header justify-content-between">
                                        <h2>Ülkelere Göre Satın Alımlar</h2>
                                        <div class="date-range-report">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="card-body vector-map-world-2">
                                        <div id="regions_purchase" style="height: 100%; width: 100%;"></div>
                                    </div>
                                    <div class="border-top mt-3">
                                        <div class="row no-gutters">
                                            <div class="col-lg-6">
                                                <div class="world-data-chart border-bottom pt-15px pb-15px">
                                                    <canvas id="hbar1" class="chartjs"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="world-data-chart pt-15px pb-15px">
                                                    <canvas id="hbar2" class="chartjs"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex flex-wrap bg-white">
                                        <a href="#" class="text-uppercase py-3">Detaylı İnceleme</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-12 p-b-15">
                                <!-- En Çok Satanlar Tablosu -->
                                <div class="card card-default Sold-card-table">
                                    <div class="card-header justify-content-between">
                                        <h2>Ürünlere Göre Satışlar</h2>
                                        <div class="tools">
                                            <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
                                            <div class="dropdown show d-inline-block widget-dropdown">
                                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-units" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="dropdown-item"><a href="#">Aksiyon</a></li>
                                                    <li class="dropdown-item"><a href="#">Başka bir aksiyon</a></li>
                                                    <li class="dropdown-item"><a href="#">Burada başka bir şey</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body py-0 compact-units" data-simplebar style="height: 534px;">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="text-dark">Sırt Çantası</td>
                                                    <td class="text-center">9</td>
                                                    <td class="text-right">33% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-dark">T-Shirt</td>
                                                    <td class="text-center">6</td>
                                                    <td class="text-right">150% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-dark">Ceket</td>
                                                    <td class="text-center">3</td>
                                                    <td class="text-right">50% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-dark">Kolye</td>
                                                    <td class="text-center">7</td>
                                                    <td class="text-right">150% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-dark">Kot Pantolon</td>
                                                    <td class="text-center">10</td>
                                                    <td class="text-right">300% <i class="mdi mdi-arrow-down-bold text-danger pl-1 font-size-12"></i></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-dark">Ayakkabı</td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-right">100% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-dark">T-Shirt</td>
                                                    <td class="text-center">6</td>
                                                    <td class="text-right">150% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-dark">Saatler</td>
                                                    <td class="text-center">18</td>
                                                    <td class="text-right">160% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-dark">İç Giyim</td>
                                                    <td class="text-center">156</td>
                                                    <td class="text-right">120% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-dark">T-Shirt</td>
                                                    <td class="text-center">6</td>
                                                    <td class="text-right">150% <i class="mdi mdi-arrow-up-bold text-success pl-1 font-size-12"></i></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer d-flex flex-wrap bg-white">
                                        <a href="#" class="text-uppercase py-3">Raporu Görüntüle</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12 p-b-15">
                                <!-- Son Siparişler Tablosu -->
                                <div class="card card-table-border-none card-default recent-orders" id="recent-orders">
                                    <div class="card-header justify-content-between">
                                        <h2>Son Siparişler</h2>
                                        <div class="date-range-report">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 pb-5">
                                        <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Sipariş ID</th>
                                                    <th>Ürün Adı</th>
                                                    <th class="d-none d-lg-table-cell">Adet</th>
                                                    <th class="d-none d-lg-table-cell">Sipariş Tarihi</th>
                                                    <th class="d-none d-lg-table-cell">Sipariş Maliyeti</th>
                                                    <th>Durum</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>24541</td>
                                                    <td>
                                                        <a class="text-dark" href=""> Coach Swagger</a>
                                                    </td>
                                                    <td class="d-none d-lg-table-cell">1 Adet</td>
                                                    <td class="d-none d-lg-table-cell">20 Ekim 2018</td>
                                                    <td class="d-none d-lg-table-cell">$230</td>
                                                    <td>
                                                        <span class="badge badge-success">Tamamlandı</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="dropdown show d-inline-block widget-dropdown">
                                                            <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <li class="dropdown-item">
                                                                    <a href="#">Görüntüle</a>
                                                                </li>
                                                                <li class="dropdown-item">
                                                                    <a href="#">Kaldır</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Diğer satırları da aynı şekilde çevirebilirsin -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> --}}


                    {{-- <div class="row">
                            <div class="col-xl-5">
                                <!-- Yeni Müşteriler -->
                                <div class="card ec-cust-card card-table-border-none card-default">
                                    <div class="card-header justify-content-between">
                                        <h2>Yeni Müşteriler</h2>
                                        <div>
                                            <button class="text-black-50 mr-2 font-size-20">
                                                <i class="mdi mdi-cached"></i>
                                            </button>
                                            <div class="dropdown show d-inline-block widget-dropdown">
                                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-customar"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    data-display="static">
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="dropdown-item"><a href="#">Eylem</a></li>
                                                    <li class="dropdown-item"><a href="#">Başka bir eylem</a></li>
                                                    <li class="dropdown-item"><a href="#">Başka bir şey burada</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 pb-15px">
                                        <table class="table ">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-image mr-3 rounded-circle">
                                                                <a href="profile.html"><img class="profile-img rounded-circle w-45"
                                                                        src="assets/img/user/u1.jpg" alt="müşteri resmi"></a>
                                                            </div>
                                                            <div class="media-body align-self-center">
                                                                <a href="profile.html">
                                                                    <h6 class="mt-0 text-dark font-weight-medium">Selena Wagner</h6>
                                                                </a>
                                                                <small>@selena.oi</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2 Sipariş</td>
                                                    <td class="text-dark d-none d-md-block">$150</td>
                                                </tr>
                                                <!-- Diğer satırları da aynı şekilde çevirebilirsin -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-7">
                                <!-- En İyi Ürünler -->
                                <div class="card card-default ec-card-top-prod">
                                    <div class="card-header justify-content-between">
                                        <h2>En İyi Ürünler</h2>
                                        <div>
                                            <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
                                            <div class="dropdown show d-inline-block widget-dropdown">
                                                <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-product"
                                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    data-display="static">
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="dropdown-item"><a href="#">Verileri Güncelle</a></li>
                                                    <li class="dropdown-item"><a href="#">Detaylı Kayıt</a></li>
                                                    <li class="dropdown-item"><a href="#">İstatistikler</a></li>
                                                    <li class="dropdown-item"><a href="#">Veriyi Temizle</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body mt-10px mb-10px py-0">
                                        <div class="row media d-flex pt-15px pb-15px">
                                            <div class="col-lg-3 col-md-3 col-2 media-image align-self-center rounded">
                                                <a href="#"><img src="assets/img/products/p1.jpg" alt="ürün resmi"></a>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-10 media-body align-self-center ec-pos">
                                                <a href="#">
                                                    <h6 class="mb-10px text-dark font-weight-medium">Bebek pamuk ayakkabıları</h6>
                                                </a>
                                                <p class="float-md-right sale"><span class="mr-2">58</span>Satış</p>
                                                <p class="d-none d-md-block">Çift döngülü donanımlı kemer, basit bir şeylere "gurur" ekler.</p>
                                                <p class="mb-0 ec-price">
                                                    <span class="text-dark">$520</span>
                                                    <del>$580</del>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Diğer ürünlerin kodları da aynı şekilde çevrilebilir -->
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                </div> <!-- End Content -->
            </div>
        </div>
        <!-- End Content Wrapper -->

        <!-- Footer -->
        @include('admin.head.footer')

    </div> <!-- End Page Wrapper -->
    </div> <!-- End Wrapper -->

    <!-- Common Javascript -->
    <script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/simplebar/simplebar.min.js"></script>
    <script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
    <script src="assets/plugins/slick/slick.min.js"></script>

    <!-- Chart -->
    <script src="assets/plugins/charts/Chart.min.js"></script>
    <script src="assets/js/chart.js"></script>

    <!-- Google map chart -->
    <script src="assets/plugins/charts/google-map-loader.js"></script>
    <script src="assets/plugins/charts/google-map.js"></script>

    <!-- Date Range Picker -->
    <script src="assets/plugins/daterangepicker/moment.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets/js/date-range.js"></script>

    <!-- Option Switcher -->
    <script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

    <!-- Ekka Custom -->
    <script src="assets/js/ekka.js"></script>

</body>

</html>
