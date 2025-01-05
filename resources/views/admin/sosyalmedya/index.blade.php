@include('admin.head.SideBarComponents.head2')


<bod>
    @include('admin.head.header2')

    <!-- Header -->
	<!-- WRAPPER -->
    <div  class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">

        <div class="layout-container" >

            @include('admin.head.sidebar2')



			<!-- CONTENT WRAPPER -->
            <div style="width: 90%" class="container mt-5">
				<div class="content">
					<div class="breadcrumb-wrapper breadcrumb-contacts">
						<div>
							<h1>Sosyal Medya Ayarları</h1>
							<p class="breadcrumbs"><span><a href="index.html">Ana Sayfa</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Satıcılar</p>
						</div>


						{{-- <div>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addVendor"> Satıcı Ekle
							</button>
						</div> --}}
					</div>

                    <div class="container-fluid">
                        <div class="row  ">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Google</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" disabled >Facebook</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false" disabled >Githup</button>
                                </li>

                              </ul>
                              <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                    <form method="POST" action="{{ route("sosyalMedyaadd") }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4  mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Client İd</label>
                                                <input type="text" class="form-control" name="client_id" value="{{ $sosyal->client_id }}" id="exampleInputEmail1" required>
                                                <div id="emailHelp" class="form-text">Lütfen Google Cliend İd Nizi Giriniz</div>
                                              </div>
                                              <div class="col-md-4  mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Client Secret</label>
                                                <input type="text" class="form-control" name="client_secret" value="{{ $sosyal->client_secret }}" id="exampleInputEmail1" required>
                                                <div id="emailHelp" class="form-text">Lütfen Google Client Secret Giriniz</div>
                                              </div>
                                              <div class="col-md-4  mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Redirect Url</label>
                                                <input type="text" class="form-control" name="redirect_uri" value="{{ $sosyal->redirect_uri }}" id="exampleInputEmail1" required>
                                                <div id="emailHelp" class="form-text">Lütfen Google Redirect Url Giriniz</div>
                                              </div>
                                              <div class="col-md-4  mb-3">
                                                <button type="submit" class="btn btn-primary">Kaydet</button>
                                              </div>


                                        </div>

                                      </form>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
                              </div>
                        </div>
                    </div>




			</div>



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
