
@include('admin.head.SideBarComponents.head2')


<bod>
    @include('admin.head.header2')

    <!-- Header -->
	<!-- WRAPPER -->
    <div  class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">

        <div class="layout-container" >

            @include('admin.head.sidebar2')

		<!-- PAGE WRAPPER -->
        <div class="container" style="width: 90%">
            <div class="row">

                <!-- Header -->
                <div style="display: none">
                    @include('admin.head.header')
                </div>


                <!-- CONTENT WRAPPER -->


                <div class="ec-content-wrapper">

                    <div class="content">
                        @if(session('success'))
                        <div id="allert" class="alert alert-success">
                            {{ session('success') }}
                        </div>


                        @endif
                        <script>
                            setTimeout(() => {
                                document.getElementById("allert").style.display = "none";

                            }, 3000);
                        </script>
                        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
                            <div>
                                <h1>Gizlilik Politaksı Sayfası</h1>


                                <p class="breadcrumbs"><span><a href="index.html">Ana Sayfa</a></span>
                                    <span><i class="mdi mdi-chevron-right"></i></span>Tablo</p>
                            </div>

                            <div class="d-flex">
                                <a style="height: 45px;" href="{{ route("admin.gizlilik.add") }}" class="btn btn-primary mx-3">Sayfa Ekle</a>

                                <p>
                                    <button class="btn btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                                     Uyarı
                                    </button>
                                  </p>
                                  <div style="">
                                    <div class="collapse collapse-horizontal mx-3" id="collapseWidthExample">
                                      <div class="card card-body" style="width: 300px;">
                                        Dikkat Eklediğiniz En Son Sayfa İçeriği Ön Yüzde Aktif Olacaktır.
                                      </div>
                                    </div>
                                  </div>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-default">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="responsive-data-table" class="table"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th></th>

                                                        <th>Sayfa Adı</th>

                                                    </tr>
                                                </thead>
                                                @if ($sayfa == null)

                                                @else
                                                <tbody>


                                                    <tr>
                                                        <td></td>
                                                        <td>{{ $sayfa->sayfa_adi }}</td>

                                                        <td>
                                                            <div class="btn-group mb-1">
                                                                <button type="button"
                                                                    class="btn btn-outline-success">Info</button>
                                                                <button type="button"
                                                                    class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false" data-display="static">
                                                                    <span class="sr-only">Info</span>
                                                                </button>

                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>

                                                @endif


                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Content -->
                </div>

                <!-- Footer -->
                @include('admin.head.footer')

            </div>

        </div>
 <!-- End Page Wrapper -->

	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
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

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>
</html>
