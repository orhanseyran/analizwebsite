

@include('admin.head.SideBarComponents.head2')
<body>
    @include('admin.head.header2')

	<!-- WRAPPER -->
    <div  class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
     
		<div class="layout-container" >

			<!-- Header -->
  
            @include('admin.head.sidebar2')
  


			<!-- CONTENT WRAPPER -->
			<div class="row">
                <div style="width: 90%" class="container mt-5">
					<div class="breadcrumb-wrapper breadcrumb-contacts">
						<div>
							<h1>Sipariş Soruları</h1>
							<p class="breadcrumbs"><span><a href="index.html">Ana Sayfa</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Satıcılar</p>
						</div>
						{{-- <div>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addVendor"> Satıcı Ekle
							</button>
						</div> --}}
					</div>
					<div class="row">
						<div class="col-12">
							<div class="ec-vendor-list card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table">
											<thead>
												<tr>


													<th>Ürün</th>
													<th>Müşteri Adı</th>
													<th>Sorusu</th>
													<th>Cevap</th>
													<th>Durum</th>

												</tr>
											</thead>

											<tbody>
                                            @foreach ($soru as $soru )
                                            @foreach ($ürün as $ürün )

                                             @if ($soru->urun_id == $ürün->id )



                                             <tr>

                                                <td>{{ $soru->urun_name }}</td>
                                                <td>{{ $soru->user_name }}</td>
                                                <td>{{ $soru->soru }}</td>
                                                @if ($soru->cevap == null)
                                                <td>Yanıt Bekliyor</td>
                                                @else
                                                <td>{{ $soru->cevap }}</td>

                                                @endif

                                                @if ($soru->durum == 0)

                                                <td>
                                                    <button
                                                    type="button"
                                                    class="btn btn-outline-danger"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal{{ $soru->id }}"
                                                >
                                                Cevapla
                                                </button>

                                                </td>

                                                @else
                                                <td> <button
                                                    type="button"
                                                    class="btn btn-outline-primary"

                                                >
                                                Cevaplanmiş
                                                </button>
                                                </td>

                                                @endif

                                                <div class="modal fade" id="exampleModal{{ $soru->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <form action="{{ route("Ürüncevap",$soru->id) }}" method="POST">
                                                        @csrf
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h1 class="modal-title fs-5" id="exampleModalLabel">Yanıt</h1>
                                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <div class="mb-3">
                                                              <label for="message-text" class="col-form-label">Mesajınız:</label>
                                                              <textarea class="form-control" name="cevap" id="message-text"></textarea>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                                                          <button type="submit" class="btn btn-primary">Yanıtla</button>
                                                        </div>
                                                    </form>
                                                      </div>
                                                    </div>
                                                  </div>

{{--
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button"
                                                            class="btn btn-outline-success">Aksiyon</button>
                                                        <button type="button"
                                                            class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false" data-display="static">
                                                            <span class="sr-only">Info</span>
                                                        </button>

                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">Cevapla</a>
                                                            <a class="dropdown-item" href="#">Sil</a>
                                                        </div>
                                                    </div>
                                                </td> --}}
                                            </tr>


                                             @else

                                             @endif

                                             @endforeach


                                            @endforeach





											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Add Vendor Modal  -->
					<div class="modal fade modal-add-contact" id="addVendor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
							<div class="modal-content">
								<form >
									<div class="modal-header px-4">
										<h5 class="modal-title" id="exampleModalCenterTitle">Add New Vendor</h5>
									</div>

									<div class="modal-body px-4">
										<div class="form-group row mb-6">
											<label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">Vendor Image</label>

											<div class="col-sm-8 col-lg-10">
												<div class="custom-file mb-1">
													<input type="file" class="custom-file-input" id="coverImage" required>
													<label class="custom-file-label" for="coverImage">Choose file...</label>
													<div class="invalid-feedback">Example invalid custom file feedback</div>
												</div>
											</div>
										</div>

										<div class="row mb-2">
											<div class="col-lg-6">
												<div class="form-group">
													<label for="firstName">First name</label>
													<input type="text" class="form-control" id="firstName" value="John">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group">
													<label for="lastName">Last name</label>
													<input type="text" class="form-control" id="lastName" value="Deo">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group mb-4">
													<label for="userName">User name</label>
													<input type="text" class="form-control" id="userName" value="johndoe">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group mb-4">
													<label for="email">Email</label>
													<input type="email" class="form-control" id="email" value="johnexample@gmail.com">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group mb-4">
													<label for="Birthday">Birthday</label>
													<input type="text" class="form-control" id="Birthday" value="10-12-1991">
												</div>
											</div>

											<div class="col-lg-6">
												<div class="form-group mb-4">
													<label for="event">Address</label>
													<input type="text" class="form-control" id="event" value="Address here">
												</div>
											</div>
										</div>
									</div>

									<div class="modal-footer px-4">
										<button type="button" class="btn btn-secondary btn-pill" data-bs-dismiss="modal">Cancel</button>
										<button type="button" class="btn btn-primary btn-pill">Save Contact</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->

			<!-- Footer -->


		</div> <!-- End Page Wrapper -->

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

	<!-- Data Tables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>
</html>
