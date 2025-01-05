
<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('admin.head.SideBarComponents.head')

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

	<!-- WRAPPER -->
	<div class="row">

		<!-- LEFT MAIN SIDEBAR -->

        @include('admin.head.sidebar')

		<!-- PAGE WRAPPER -->
		<div class="row">

			<!-- Header -->
            <div style="display: none">
                @include('admin.head.header')
            </div>


			<!-- CONTENT WRAPPER -->

            <div class="ec-content-wrapper">
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
				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Tüm Sayfalar</h1>
							<p class="breadcrumbs"><span><a href="index.html">Ana Sayfa</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Tablo</p>
						</div>
						<div>
							<a href="{{ route("admin.tum-sayfalar.add") }}" class="btn btn-primary">Sayfa Ekle</a>
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

											<tbody>
                                                @foreach ($sayfa as $get )
                                                <tr>
													<td></td>
													<td>{{ $get->sayfa_adi }}</td>

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
																<a class="dropdown-item" href="{{ route("admin.tum-sayfalar.edit",$get->id) }}">Düzenle</a>
																<a class="dropdown-item" onclick="return confirm('Bu Sayfaı silmek istediğinize emin misiniz?');" on href="{{ route("sayfa.sil",$get->id) }}">Sil</a>
															</div>
														</div>
													</td>
												</tr>

                                                @endforeach





											</tbody>
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

	<!-- Data Tables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>
</html>
