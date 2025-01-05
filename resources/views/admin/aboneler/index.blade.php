

@include('admin.head.SideBarComponents.head2')

<body>
    @include('admin.head.header2')
    
	<!-- WRAPPER -->
    <div  class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
     
            <div class="layout-container" >
    
			<!-- Header -->

      
            @include('admin.head.sidebar2')


			<!-- CONTENT WRAPPER -->

            <div style="width: 90%" class="container mt-5">
				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h4>Aboneler</h4>
                            <p class="mt-2 mb-2 bg-red-50">Aboneler Güncellenen veya yeni Eklenen ürünlerden otomatik olarak mail adresleri aracılığı ile bilgilendirilir</p>
							<p class="breadcrumbs"><span><a href="">Ana Sayfa</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Aboneler</p>
						</div>
						<div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Yeni Abone Ekle
                              </button>
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
													<th>Abone Adı</th>
													<th>Telefon Numarası</th>
													<th>Email</th>
                                                    <th>Durum</th>
                                                    <th>Katılma Tarihi</th>
                                                    <th>Düzenle - Sil</th>

												</tr>
											</thead>

											<tbody>
                                                @foreach ($aboneler as $get )
                                                <tr>
													<td>{{ $get->name }}</td>
													<td>{{ $get->phone}}</td>
													<td>{{ $get->email}}</td>
													<td>{{ $get->durum == 1 ? "Aktif Abone" : "Deaktif Abone"}}</td>
													<td>{{ $get->created_at }}</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Düzenle-Sil</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Düzenle-Sil</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $get->id }}">Düzenle</a>
																<a class="dropdown-item" href="#">Sil</a>
															</div>
														</div>
													</td>
												</tr>
                                                <div class="modal fade" id="exampleModal{{ $get->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $get->id }}" aria-hidden="true">
                                                    <form action="{{ route("aboneler.edit",$get->id) }}" method="post">
                                                        @csrf
                                                    <div class="modal-dialog modal-xl">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h1 class="modal-title fs-5" id="exampleModalLabel">İçerik Ekle</h1>
                                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label">Ad - Soyad</label>
                                                                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{ $get->name }}" aria-describedby="emailHelp">                                                                      </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label">Telefon Numarası</label>
                                                                        <input type="number" class="form-control" id="exampleInputEmail1" name="phone" value="{{ $get->phone }}" aria-describedby="emailHelp">                                                                      </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                                                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ $get->email }}" aria-describedby="emailHelp">                                                                      </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label">Durum</label>
                                                                        <select class="form-select" name="durum" aria-label="Default select example">
                                                                            @if ($get->durum == 1)
                                                                            <option value="1" selected>Aktif</option>
                                                                            <option value="0">Pasif</option>
                                                                            @else
                                                                            <option value="0" selected>Pasif</option>
                                                                            <option value="1">Aktif</option>
                                                                            @endif

                                                                          </select>
                                                                      </div>
                                                                </div>


                                                            </div>


                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                                                          <button type="submit" class="btn btn-primary">Aboneyi Düzenle</button>
                                                        </div>
                                                      </div>
                                                    </div>
                                                     </form>
                                                </div>

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

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <form action="{{ route("add.abone") }}" method="post">
                    @csrf
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Abone Ekle</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Ad - Soyad</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="" >                                                                      </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Telefon Numarası</label>
                                    <input type="number" class="form-control" id="exampleInputEmail1" name="phone" value="">                                                                      </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="" required>                                                                      </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Durum</label>
                                    <select class="form-select" name="durum" aria-label="Default select example">
                                        <option selected value="1">Aktif</option>
                                        <option  value="0">Pasif</option>

                                      </select>
                                  </div>
                            </div>


                        </div>


                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                      <button type="submit" class="btn btn-primary">İçerik Ekle</button>
                    </div>
                  </div>
                </div>
                 </form>
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


    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $('#summernote').summernote({
          placeholder: '',
          tabsize: 2,
          height: 400
        });
      </script>

	<!-- Option Switcher -->

    <script src="assets/plugins/options-sidebar/optionswitcher.js"></script>
    <script>
$('#lfm').filemanager('image');

$('#lfm1').filemanager('image');
    </script>

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>
</html>
