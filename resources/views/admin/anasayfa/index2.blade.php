
@include('admin.head.SideBarComponents.head2')

    <body  >
        <!-- Layout wrapper -->
        <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
          <div class="layout-container">
            <!-- Navbar -->
            @include('admin.head.header2')




            <!-- / Navbar -->

            <!-- Layout container -->
            <div class="layout-page">
              <!-- Content wrapper -->
              <div class="content-wrapper">
                <!-- Menu -->
                @include('admin.head.SideBarComponents.sidebarAdmin2')
                <!-- / Menu -->

                <!-- Content -->
                <style>
                    .seller-info {



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
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="card mt-4">
                        <div class="container-fluid mt-5">
                            <div class="seller-info">
                                <div class="seller-details">
                                    <i class="fa-solid fa-store mb-5"></i>

                                    <div>
                                        <h3 class="">Merhaba {{ auth()->user()->name }} (ID {{ auth()->user()->id }} )</h3>
                                        <div class="seller-stats mt-3">
                                            <span style="font-size: 14px" class="badge bg-success p-3">Toplam Maç Sayısı:
                                                {{ $products->count() }}</span>
                                            <span style="font-size: 14px" class="badge bg-primary p-3">Toplam Ziyaretci:
                                                {{ $pmaall->count() }}</span>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="seller-meta">
                                    <div class="info bg-light-grey p-3">
                                        Güncel Temin Süresi <strong class="px-1">2 Gün</strong>
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
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">

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

                  <div class="row g-6 mt-4">
                    <!-- View sales -->
                    <div class="col-xl-4">
                      <div class="card">
                        <div class="d-flex align-items-end row">
                          <div class="col-7">
                            <div class="card-body text-nowrap">
                              <h5 class="card-title mb-0">Tekrar Hoşgeldiniz ! 🎉</h5>
                              <p class="mb-2">Bugünkü Siparişlerim </p>
                              <h4 class="text-primary mb-1"> {{ number_format($orderDaily->sum('per_price')) }} ₺</h4>
                              <a href="javascript:;" class="btn btn-primary">Siparişlerim</a>
                            </div>
                          </div>
                          <div class="col-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                              <img
                                src="admin2/assets/img/illustrations/card-advance-sale.png"
                                height="140"
                                alt="view sales" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- View sales -->

                    <!-- Statistics -->
                    <div class="col-xl-8 col-md-12">
                      <div class="card h-100">
                        <div class="card-header d-flex justify-content-between">
                          <h5 class="card-title mb-0">İstatistikler</h5>
                          <small class="text-muted">Aylık Güncellenir</small>
                        </div>
                        <div class="card-body d-flex align-items-end">
                          <div class="w-100">
                            <div class="row gy-3">
                              <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                  <div class="badge rounded bg-label-primary me-4 p-2">
                                    <i class="ti ti-chart-pie-2 ti-lg"></i>
                                  </div>
                                  <div class="card-info">
                                    <h5 class="mb-0">{{ number_format($countOrder30Days)  }}</h5>
                                    <small>Sipariş</small>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                  <div class="badge rounded bg-label-info me-4 p-2"><i class="ti ti-users ti-lg"></i></div>
                                  <div class="card-info">
                                    <h5 class="mb-0">{{ number_format($user) }}</h5>
                                    <small>Satıcı</small>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                  <div class="badge rounded bg-label-danger me-4 p-2">
                                    <i class="ti ti-shopping-cart ti-lg"></i>
                                  </div>
                                  <div class="card-info">
                                    <h5 class="mb-0">{{ number_format($products->count()) }}</h5>
                                    <small>Ürün</small>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center">
                                  <div class="badge rounded bg-label-success me-4 p-2">
                                    <i class="ti ti-currency-dollar ti-lg"></i>
                                  </div>
                                  <div class="card-info">
                                    <h5 class="mb-0"> {{ number_format($order30Days->sum('ordermount')) }} ₺</h5>
                                    <small>30 Günlük Kazanç</small>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row  mt-4 mb-5">

                        <div class="mt-4" >
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
                    <!--/ Statistics -->

                    {{-- <div class="col-xxl-4 col-12 mt-4">
                      <div class="row g-6">
                        <!-- Profit last month -->
                        <div class="col-xl-6 col-sm-6">
                          <div class="card h-100">
                            <div class="card-header pb-0">
                              <h5 class="card-title mb-1">Kar</h5>
                              <p class="card-subtitle">Geçen Aya Göre</p>
                            </div>
                            <div class="card-body">
                              <div id="profitLastMonth"></div>
                              <div class="d-flex justify-content-between align-items-center mt-3 gap-3">
                                <h4 class="mb-0">{{ number_format($order30Days->sum('ordermount')) }} ₺</h4>
                                <small class="text-success">{{ $percentageChange30DaysDaily }}%</small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--/ Profit last month -->

                        <!-- Expenses -->
                        <div class="col-xl-6 col-sm-6">
                          <div class="card h-100">
                            <div class="card-header pb-2">
                              <h5 class="card-title mb-1">82.5k</h5>
                              <p class="card-subtitle">Expenses</p>
                            </div>
                            <div class="card-body">
                              <div id="expensesChart"></div>
                              <div class="mt-3 text-center">
                                <small class="text-muted mt-3">$21k Expenses more than last month</small>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--/ Expenses -->

                        <!-- Generated Leads -->
                        <div class="col-xl-12">
                          <div class="card h-100">
                            <div class="card-body d-flex justify-content-between">
                              <div class="d-flex flex-column">
                                <div class="card-title mb-auto">
                                  <h5 class="mb-0 text-nowrap">Generated Leads</h5>
                                  <p class="mb-0">Monthly Report</p>
                                </div>
                                <div class="chart-statistics">
                                  <h3 class="card-title mb-0">4,350</h3>
                                  <p class="text-success text-nowrap mb-0"><i class="ti ti-chevron-up me-1"></i> 15.8%</p>
                                </div>
                              </div>
                              <div id="generatedLeadsChart"></div>
                            </div>
                          </div>
                        </div>
                        <!--/ Generated Leads -->
                      </div>
                    </div> --}}

                    <!-- Revenue Report -->
                    <div class="col-xxl-8">
                      <div class="card h-100">
                        <div class="card-body p-0">
                          <div class="row row-bordered g-0">
                            {{-- <div class="col-md-8 position-relative p-6">
                              <div class="card-header d-inline-block p-0 text-wrap position-absolute">
                                <h5 class="m-0 card-title">Revenue Report</h5>
                              </div>
                              <div id="totalRevenueChart" class="mt-n1"></div>
                            </div> --}}
                            {{-- <div class="col-md-4 p-4">
                              <div class="text-center mt-5">
                                <div class="dropdown">
                                  <button
                                    class="btn btn-sm btn-label-primary dropdown-toggle"
                                    type="button"
                                    id="budgetId"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <script>
                                      document.write(new Date().getFullYear());
                                    </script>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="budgetId">
                                    <a class="dropdown-item prev-year1" href="javascript:void(0);">
                                      <script>
                                        document.write(new Date().getFullYear() - 1);
                                      </script>
                                    </a>
                                    <a class="dropdown-item prev-year2" href="javascript:void(0);">
                                      <script>
                                        document.write(new Date().getFullYear() - 2);
                                      </script>
                                    </a>
                                    <a class="dropdown-item prev-year3" href="javascript:void(0);">
                                      <script>
                                        document.write(new Date().getFullYear() - 3);
                                      </script>
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <h3 class="text-center pt-8 mb-0">{{ number_format($orderFull->sum('per_price')) }} ₺ Toplam Kazanç</h3>
                              <p class="mb-8 text-center"><span class="fw-medium text-heading">Sipariş Sayısı : </span>56,800</p>
                              <div class="px-3">
                                <div id="budgetChart"></div>
                              </div>
                              <div class="text-center mt-8">
                                <button type="button" class="btn btn-primary">Increase Button</button>
                              </div>
                            </div> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--/ Revenue Report -->

                    <!-- Earning Reports -->
                    {{-- <div class="col-xxl-4 col-md-6">
                      <div class="card h-100">
                        <div class="card-header d-flex justify-content-between">
                          <div class="card-title mb-0">
                            <h5 class="mb-1">Earning Reports</h5>
                            <p class="card-subtitle">Weekly Earnings Overview</p>
                          </div>
                          <div class="dropdown">
                            <button
                              class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1"
                              type="button"
                              id="earningReports"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                              <i class="ti ti-dots-vertical ti-md text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReports">
                              <a class="dropdown-item" href="javascript:void(0);">Download</a>
                              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                              <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            </div>
                          </div>
                        </div>
                        <div class="card-body pb-0">
                          <ul class="p-0 m-0">
                            <li class="d-flex align-items-center mb-5">
                              <div class="me-4">
                                <span class="badge bg-label-primary rounded p-1_5"
                                  ><i class="ti ti-chart-pie-2 ti-md"></i
                                ></span>
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Net Profit</h6>
                                  <small class="text-body">12.4k Sales</small>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-4">
                                  <small>$1,619</small>
                                  <div class="d-flex align-items-center gap-1">
                                    <i class="ti ti-chevron-up text-success"></i>
                                    <small class="text-muted">18.6%</small>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="d-flex align-items-center mb-5">
                              <div class="me-4">
                                <span class="badge bg-label-success rounded p-1_5"
                                  ><i class="ti ti-currency-dollar ti-md"></i
                                ></span>
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Total Income</h6>
                                  <small class="text-body">Sales, Affiliation</small>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-4">
                                  <small>$3,571</small>
                                  <div class="d-flex align-items-center gap-1">
                                    <i class="ti ti-chevron-up text-success"></i>
                                    <small class="text-muted">39.6%</small>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="d-flex align-items-center mb-5">
                              <div class="me-4">
                                <span class="badge bg-label-secondary text-body rounded p-1_5"
                                  ><i class="ti ti-credit-card ti-md"></i
                                ></span>
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Total Expenses</h6>
                                  <small class="text-body">ADVT, Marketing</small>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-4">
                                  <small>$430</small>
                                  <div class="d-flex align-items-center gap-1">
                                    <i class="ti ti-chevron-up text-success"></i>
                                    <small class="text-muted">52.8%</small>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                          <div id="reportBarChart"></div>
                        </div>
                      </div>
                    </div> --}}
                    <!--/ Earning Reports -->

                    <!-- Popular Product -->
                    {{-- <div class="col-xxl-4 col-md-6">
                      <div class="card h-100">
                        <div class="card-header d-flex justify-content-between">
                          <div class="card-title m-0 me-2">
                            <h5 class="mb-1">Popular Products</h5>
                            <p class="card-subtitle">Total 10.4k Visitors</p>
                          </div>
                          <div class="dropdown">
                            <button
                              class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1"
                              type="button"
                              id="popularProduct"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                              <i class="ti ti-dots-vertical ti-md text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="popularProduct">
                              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                          <ul class="p-0 m-0">
                            <li class="d-flex mb-6">
                              <div class="me-4">
                                <img src="admin2/assets/img/products/iphone.png" alt="User" class="rounded" width="46" />
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Apple iPhone 13</h6>
                                  <small class="text-body d-block">Item: #FXZ-4567</small>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                  <p class="mb-0">$999.29</p>
                                </div>
                              </div>
                            </li>
                            <li class="d-flex mb-6">
                              <div class="me-4">
                                <img
                                  src="admin2/assets/img/products/nike-air-jordan.png"
                                  alt="User"
                                  class="rounded"
                                  width="46" />
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Nike Air Jordan</h6>
                                  <small class="text-body d-block">Item: #FXZ-3456</small>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                  <p class="mb-0">$72.40</p>
                                </div>
                              </div>
                            </li>
                            <li class="d-flex mb-6">
                              <div class="me-4">
                                <img src="admin2/assets/img/products/headphones.png" alt="User" class="rounded" width="46" />
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Beats Studio 2</h6>
                                  <small class="text-body d-block">Item: #FXZ-9485</small>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                  <p class="mb-0">$99</p>
                                </div>
                              </div>
                            </li>
                            <li class="d-flex mb-6">
                              <div class="me-4">
                                <img
                                  src="admin2/assets/img/products/apple-watch.png"
                                  alt="User"
                                  class="rounded"
                                  width="46" />
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Apple Watch Series 7</h6>
                                  <small class="text-body d-block">Item: #FXZ-2345</small>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                  <p class="mb-0">$249.99</p>
                                </div>
                              </div>
                            </li>
                            <li class="d-flex mb-6">
                              <div class="me-4">
                                <img
                                  src="admin2/assets/img/products/amazon-echo.png"
                                  alt="User"
                                  class="rounded"
                                  width="46" />
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Amazon Echo Dot</h6>
                                  <small class="text-body d-block">Item: #FXZ-8959</small>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                  <p class="mb-0">$79.40</p>
                                </div>
                              </div>
                            </li>
                            <li class="d-flex">
                              <div class="me-4">
                                <img
                                  src="admin2/assets/img/products/play-station.png"
                                  alt="User"
                                  class="rounded"
                                  width="46" />
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Play Station Console</h6>
                                  <small class="text-body d-block">Item: #FXZ-7892</small>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                  <p class="mb-0">$129.48</p>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div> --}}
                    <!--/ Popular Product -->

                    <!-- Sales by Countries tabs-->
                    {{-- <div class="col-xxl-4 col-md-6">
                      <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                          <div class="card-title mb-0">
                            <h5 class="mb-1">Orders by Countries</h5>
                            <p class="card-subtitle">62 deliveries in progress</p>
                          </div>
                          <div class="dropdown">
                            <button
                              class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1"
                              type="button"
                              id="salesByCountryTabs"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                              <i class="ti ti-dots-vertical ti-md text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountryTabs">
                              <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                              <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                              <a class="dropdown-item" href="javascript:void(0);">Share</a>
                            </div>
                          </div>
                        </div>
                        <div class="card-body p-0">
                          <div class="nav-align-top">
                            <ul class="nav nav-tabs nav-fill rounded-0 timeline-indicator-advanced" role="tablist">
                              <li class="nav-item">
                                <button
                                  type="button"
                                  class="nav-link active"
                                  role="tab"
                                  data-bs-toggle="tab"
                                  data-bs-target="#navs-justified-new"
                                  aria-controls="navs-justified-new"
                                  aria-selected="true">
                                  New
                                </button>
                              </li>
                              <li class="nav-item">
                                <button
                                  type="button"
                                  class="nav-link"
                                  role="tab"
                                  data-bs-toggle="tab"
                                  data-bs-target="#navs-justified-link-preparing"
                                  aria-controls="navs-justified-link-preparing"
                                  aria-selected="false">
                                  Preparing
                                </button>
                              </li>
                              <li class="nav-item">
                                <button
                                  type="button"
                                  class="nav-link"
                                  role="tab"
                                  data-bs-toggle="tab"
                                  data-bs-target="#navs-justified-link-shipping"
                                  aria-controls="navs-justified-link-shipping"
                                  aria-selected="false">
                                  Shipping
                                </button>
                              </li>
                            </ul>
                            <div class="tab-content border-0 mx-1">
                              <div class="tab-pane fade show active" id="navs-justified-new" role="tabpanel">
                                <ul class="timeline mb-0">
                                  <li class="timeline-item ps-6 border-left-dashed">
                                    <span
                                      class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                      <i class="ti ti-circle-check"></i>
                                    </span>
                                    <div class="timeline-event ps-1">
                                      <div class="timeline-header">
                                        <small class="text-success text-uppercase">sender</small>
                                      </div>
                                      <h6 class="my-50">Myrtle Ullrich</h6>
                                      <p class="text-body mb-0">101 Boulder, California(CA), 95959</p>
                                    </div>
                                  </li>
                                  <li class="timeline-item ps-6 border-transparent">
                                    <span
                                      class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                                      <i class="ti ti-map-pin"></i>
                                    </span>
                                    <div class="timeline-event ps-1">
                                      <div class="timeline-header">
                                        <small class="text-primary text-uppercase">Receiver</small>
                                      </div>
                                      <h6 class="my-50">Barry Schowalter</h6>
                                      <p class="text-body mb-0">939 Orange, California(CA), 92118</p>
                                    </div>
                                  </li>
                                </ul>
                                <div class="border-1 border-light border-top border-dashed my-4"></div>
                                <ul class="timeline mb-0">
                                  <li class="timeline-item ps-6 border-left-dashed">
                                    <span
                                      class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                      <i class="ti ti-circle-check"></i>
                                    </span>
                                    <div class="timeline-event ps-1">
                                      <div class="timeline-header">
                                        <small class="text-success text-uppercase">sender</small>
                                      </div>
                                      <h6 class="my-50">Veronica Herman</h6>
                                      <p class="text-body mb-0">162 Windsor, California(CA), 95492</p>
                                    </div>
                                  </li>
                                  <li class="timeline-item ps-6 border-transparent">
                                    <span
                                      class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                                      <i class="ti ti-map-pin"></i>
                                    </span>
                                    <div class="timeline-event ps-1">
                                      <div class="timeline-header">
                                        <small class="text-primary text-uppercase">Receiver</small>
                                      </div>
                                      <h6 class="my-50">Helen Jacobs</h6>
                                      <p class="text-body mb-0">487 Sunset, California(CA), 94043</p>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <div class="tab-pane fade" id="navs-justified-link-preparing" role="tabpanel">
                                <ul class="timeline mb-0">
                                  <li class="timeline-item ps-6 border-left-dashed">
                                    <span
                                      class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                      <i class="ti ti-circle-check"></i>
                                    </span>
                                    <div class="timeline-event ps-1">
                                      <div class="timeline-header">
                                        <small class="text-success text-uppercase">sender</small>
                                      </div>
                                      <h6 class="my-50">Barry Schowalter</h6>
                                      <p class="text-body mb-0">939 Orange, California(CA), 92118</p>
                                    </div>
                                  </li>
                                  <li class="timeline-item ps-6 border-transparent border-left-dashed">
                                    <span
                                      class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                                      <i class="ti ti-map-pin"></i>
                                    </span>
                                    <div class="timeline-event ps-1">
                                      <div class="timeline-header">
                                        <small class="text-primary text-uppercase">Receiver</small>
                                      </div>
                                      <h6 class="my-50">Myrtle Ullrich</h6>
                                      <p class="text-body mb-0">101 Boulder, California(CA), 95959</p>
                                    </div>
                                  </li>
                                </ul>
                                <div class="border-1 border-light border-top border-dashed my-4"></div>
                                <ul class="timeline mb-0">
                                  <li class="timeline-item ps-6 border-left-dashed">
                                    <span
                                      class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                      <i class="ti ti-circle-check"></i>
                                    </span>
                                    <div class="timeline-event ps-1">
                                      <div class="timeline-header">
                                        <small class="text-success text-uppercase">sender</small>
                                      </div>
                                      <h6 class="my-50">Veronica Herman</h6>
                                      <p class="text-body mb-0">162 Windsor, California(CA), 95492</p>
                                    </div>
                                  </li>
                                  <li class="timeline-item ps-6 border-transparent">
                                    <span
                                      class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                                      <i class="ti ti-map-pin"></i>
                                    </span>
                                    <div class="timeline-event ps-1">
                                      <div class="timeline-header">
                                        <small class="text-primary text-uppercase">Receiver</small>
                                      </div>
                                      <h6 class="my-50">Helen Jacobs</h6>
                                      <p class="text-body mb-0">487 Sunset, California(CA), 94043</p>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                              <div class="tab-pane fade" id="navs-justified-link-shipping" role="tabpanel">
                                <ul class="timeline mb-0">
                                  <li class="timeline-item ps-6 border-left-dashed">
                                    <span
                                      class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                      <i class="ti ti-circle-check"></i>
                                    </span>
                                    <div class="timeline-event ps-1">
                                      <div class="timeline-header">
                                        <small class="text-success text-uppercase">sender</small>
                                      </div>
                                      <h6 class="my-50">Veronica Herman</h6>
                                      <p class="text-body mb-0">101 Boulder, California(CA), 95959</p>
                                    </div>
                                  </li>
                                  <li class="timeline-item ps-6 border-transparent">
                                    <span
                                      class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                                      <i class="ti ti-map-pin"></i>
                                    </span>
                                    <div class="timeline-event ps-1">
                                      <div class="timeline-header">
                                        <small class="text-primary text-uppercase">Receiver</small>
                                      </div>
                                      <h6 class="my-50">Barry Schowalter</h6>
                                      <p class="text-body mb-0">939 Orange, California(CA), 92118</p>
                                    </div>
                                  </li>
                                </ul>
                                <div class="border-1 border-light border-top border-dashed my-4"></div>
                                <ul class="timeline mb-0">
                                  <li class="timeline-item ps-6 border-left-dashed">
                                    <span
                                      class="timeline-indicator-advanced timeline-indicator-success border-0 shadow-none">
                                      <i class="ti ti-circle-check"></i>
                                    </span>
                                    <div class="timeline-event ps-1">
                                      <div class="timeline-header">
                                        <small class="text-success text-uppercase">sender</small>
                                      </div>
                                      <h6 class="my-50">Myrtle Ullrich</h6>
                                      <p class="text-body mb-0">162 Windsor, California(CA), 95492</p>
                                    </div>
                                  </li>
                                  <li class="timeline-item ps-6 border-transparent">
                                    <span
                                      class="timeline-indicator-advanced timeline-indicator-primary border-0 shadow-none">
                                      <i class="ti ti-map-pin"></i>
                                    </span>
                                    <div class="timeline-event ps-1">
                                      <div class="timeline-header">
                                        <small class="text-primary text-uppercase">Receiver</small>
                                      </div>
                                      <h6 class="my-50">Helen Jacobs</h6>
                                      <p class="text-body mb-0">487 Sunset, California(CA), 94043</p>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> --}}
                    <!--/ Sales by Countries tabs -->

                    <!-- Transactions -->
                    {{-- <div class="col-xxl-4 col-md-6">
                      <div class="card h-100">
                        <div class="card-header d-flex justify-content-between">
                          <div class="card-title m-0 me-2">
                            <h5 class="mb-1">Transactions</h5>
                            <p class="card-subtitle">Total 58 Transactions done in this Month</p>
                          </div>
                          <div class="dropdown">
                            <button
                              class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1"
                              type="button"
                              id="transactionID"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false">
                              <i class="ti ti-dots-vertical ti-md text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                          <ul class="p-0 m-0">
                            <li class="d-flex mb-3 pb-1 align-items-center">
                              <div class="badge bg-label-primary me-4 rounded p-1_5">
                                <i class="ti ti-wallet ti-md"></i>
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Wallet</h6>
                                  <small class="text-body d-block">Starbucks</small>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                  <h6 class="mb-0 text-danger">-$75</h6>
                                </div>
                              </div>
                            </li>
                            <li class="d-flex mb-3 pb-1 align-items-center">
                              <div class="badge bg-label-success me-4 rounded p-1_5">
                                <i class="ti ti-browser-check ti-md"></i>
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Bank Transfer</h6>
                                  <small class="text-body d-block">Add Money</small>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                  <h6 class="mb-0 text-success">+$480</h6>
                                </div>
                              </div>
                            </li>
                            <li class="d-flex mb-3 pb-1 align-items-center">
                              <div class="badge bg-label-danger me-4 rounded p-1_5">
                                <i class="ti ti-brand-paypal ti-md"></i>
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Paypal</h6>
                                  <small class="text-body d-block">Client Payment</small>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                  <h6 class="mb-0 text-success">+$268</h6>
                                </div>
                              </div>
                            </li>
                            <li class="d-flex mb-3 pb-1 align-items-center">
                              <div class="badge bg-label-secondary me-4 rounded p-1_5">
                                <i class="ti ti-credit-card ti-md"></i>
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Master Card</h6>
                                  <small class="text-body d-block">Ordered iPhone 13</small>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                  <h6 class="mb-0 text-danger">-$699</h6>
                                </div>
                              </div>
                            </li>
                            <li class="d-flex mb-3 pb-1 align-items-center">
                              <div class="badge bg-label-info me-4 rounded p-1_5">
                                <i class="ti ti-currency-dollar ti-md"></i>
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Bank Transactions</h6>
                                  <small class="text-body d-block">Refund</small>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                  <h6 class="mb-0 text-success">+$98</h6>
                                </div>
                              </div>
                            </li>
                            <li class="d-flex mb-3 pb-1 align-items-center">
                              <div class="badge bg-label-danger me-4 rounded p-1_5">
                                <i class="ti ti-brand-paypal ti-md"></i>
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Paypal</h6>
                                  <small class="text-body d-block">Client Payment</small>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                  <h6 class="mb-0 text-success">+$126</h6>
                                </div>
                              </div>
                            </li>
                            <li class="d-flex align-items-center">
                              <div class="badge bg-label-success me-4 rounded p-1_5">
                                <i class="ti ti-building-bank ti-md"></i>
                              </div>
                              <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                  <h6 class="mb-0">Bank Transfer</h6>
                                  <small class="text-body d-block">Pay Office Rent</small>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                  <h6 class="mb-0 text-danger">-$1290</h6>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div> --}}
                    <!--/ Transactions -->

                    <!-- Invoice table -->
                    {{-- <div class="col-xxl-8">
                      <div class="card">
                        <div class="card-datatable table-responsive">
                          <table class="table table-sm datatable-invoice border-top">
                            <thead>
                              <tr>
                                <th></th>
                                <th></th>
                                <th>#</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Issued Date</th>
                                <th>Invoice Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                          </table>
                        </div>
                      </div>
                    </div> --}}
                    <!-- /Invoice table -->
                  </div>
                </div>

                <!--/ Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                  <div class="container-xxl">
                    <div
                      class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                      <div class="text-body">
                        ©
                        <script>
                          document.write(new Date().getFullYear());
                        </script>
                        , made with ❤️ by <a href="" target="_blank" class="footer-link">Orhan Seyran</a>
                      </div>

                    </div>
                  </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
              </div>
              <!--/ Content wrapper -->
            </div>

            <!--/ Layout container -->
          </div>
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>

        <!--/ Layout wrapper -->

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->

        <script src="admin2/assets/vendor/libs/jquery/jquery.js"></script>
        <script src="admin2/assets/vendor/libs/popper/popper.js"></script>
        <script src="admin2/assets/vendor/js/bootstrap.js"></script>
        <script src="admin2/assets/vendor/libs/node-waves/node-waves.js"></script>
        <script src="admin2/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="admin2/assets/vendor/libs/hammer/hammer.js"></script>
        <script src="admin2/assets/vendor/libs/i18n/i18n.js"></script>
        <script src="admin2/assets/vendor/libs/typeahead-js/typeahead.js"></script>
        <script src="admin2/assets/vendor/js/menu.js"></script>

        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="admin2/assets/vendor/libs/apex-charts/apexcharts.js"></script>
        <script src="admin2/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

        <!-- Main JS -->
        <script src="admin2/assets/js/main.js"></script>

        <!-- Page JS -->
        <script src="admin2/assets/js/app-ecommerce-dashboard.js"></script>
 </body>

</html>
