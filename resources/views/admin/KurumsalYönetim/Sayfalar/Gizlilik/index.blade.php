
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
                                            @if ($gizlilik == null)

                                            @else
                                            <tbody>


												<tr>
													<td></td>
													<td>{{ $gizlilik->sayfa_adi }}</td>

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
																<a class="dropdown-item" href="{{ route("admin.gizlilik.edit",$gizlilik->id) }}">Edit</a>
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

		</div> <!-- End Page Wrapper -->


	</div> <!-- End Wrapper -->


	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $('#summernote').summernote({
          placeholder: '',
          tabsize: 2,
          height: 400
        });
      </script>

	<!-- Data Tables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>
    <script src="admin2/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="admin2/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="admin2/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="admin2/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="admin2/assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="admin2/assets/vendor/js/menu.js"></script>
    <script src="admin2/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="admin2/assets/js/main.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>
</html>
