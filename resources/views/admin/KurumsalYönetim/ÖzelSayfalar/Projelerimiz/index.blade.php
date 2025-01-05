@include('admin.head.SideBarComponents.head2')

<body>
    @include('admin.head.header2')
	<!-- WRAPPER -->
    <div  class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">

		<div class="layout-container" >
			@include('admin.head.sidebar2')

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
							<h1>Proje Yönetimi</h1>
							<p class="breadcrumbs"><span><a href="index.html">Ana Sayfa</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Proje</p>
						</div>
						<div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Proje Ekle
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
													<th>Proje Resim</th>
													<th>Başlık</th>

													<th></th>
													<th>.</th>
													<th>Yayınlanma Tarihi</th>
													{{-- <th>Offer</th>
													<th>Purchased</th>
													<th>Stock</th>
													<th>Status</th>
													<th>Date</th>
													<th>Action</th> --}}
												</tr>
											</thead>

											<tbody>

                                                @foreach ($sayfa as $get )
                                                <tr>
													<td><img class="tbl-thumb" src="{{ $get->içerik }}" alt="Product Image" /></td>
													<td>{{ $get->içerik1 }}</td>
													<td></td>
													<td></td>
													{{-- <td>25% OFF</td>
													<td>61</td>
													<td>5421</td>
													<td>ACTIVE</td>
													<td>2021-10-30</td> --}}
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
																<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $get->id }}" >Düzenleme</a>
																<a class="dropdown-item" onclick="return confirm('Bu Proje silmek istediğinize emin misiniz?');" href="{{ route("ozelsayfa.sil",$get->id) }}">Delete</a>


															</div>
														</div>
													</td>
												</tr>


                                                <div class="modal fade" id="exampleModal{{ $get->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $get->id }}" aria-hidden="true">
                                                 <form action="{{ route("ozelsayfa.duzenle",$get->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Proje Ekle</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                          </div>
                                                          <div class="modal-body">
                                                              <div class="mb-3">
                                                                  <label for="Resim">Resim:</label>
                                                                  <div class="input-group">
                                                                      <span class="input-group-btn">
                                                                        <a id="lfm{{ $get->id }}" data-input="thumbnail{{ $get->id }}" data-preview="holder{{ $get->id }}" class="btn btn-primary">
                                                                          <i class="fa fa-picture-o"></i> Resim Ekle
                                                                        </a>
                                                                      </span>
                                                                      <p></p>
                                                                      <input id="thumbnail{{ $get->id }}" class="form-control" name="içerik" value="{{ $get->içerik }}" type="text" >
                                                                    </div>
                                                                    <div id="holder{{ $get->id }}" style="margin-top:15px;max-height:100px;">
                                                                        <img width="60" src="{{ $get->içerik }}" alt="">
                                                                    </div>
                                                              </div>

                                                              <div style="display:none" class="col-12 mt-5">
                                                                  <label for="file"> Ad</label>
                                                                  <input type="text" name="sayfa_adi" class="form-control" value="Projeler" >
                                                              </div>



                                                                  <div class="mb-3">
                                                                    <label for="exampleInputEmail1" class="form-label">Başlık</label>
                                                                    <input type="text" class="form-control" name="içerik1" id="exampleInputEmail1" value="{{ $get->içerik1 }}" aria-describedby="emailHelp">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                    <label for="exampleInputPassword1" class="form-label">Açıklama</label>
                                                                    <textarea class="form-control" name="içerik2" id="summernote{{ $get->id}}" rows="5">{!! $get->içerik2 !!}</textarea>
                                                                  </div>


                                                          </div>
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                                                            <button type="submit" class="btn btn-primary">Ekle</button>
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
                <form action="{{ route("ozelsayfa.ekle") }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Proje Ekle</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="Resim">Resim:</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Resim Ekle
                                  </a>
                                </span>
                                <input id="thumbnail" class="form-control" name="içerik" type="text" name="filepath">
                              </div>
                              <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                        </div>

                        <div style="display:none" class="col-12 mt-5">
                            <label for="file"> Ad</label>
                            <input type="text" name="sayfa_adi" class="form-control" value="Projeler" >
                        </div>



                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Başlık</label>
                              <input type="text" class="form-control" name="içerik1" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Açıklama</label>
                              <textarea class="form-control" name="içerik2" id="summernote12" rows="5"></textarea>
                            </div>


                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                      <button type="submit" class="btn btn-primary">Ekle</button>
                    </div>
                  </div>
                </div>
               </form>
            </div>

			<!-- Footer -->
            @include('admin.head.footer')

		</div> <!-- End Page Wrapper -->

	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>


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







	<!-- Option Switcher -->


    @foreach ($sayfa as $get)
<script>
    $(document).ready(function() {
        $('#lfm{{ $get->id }}').filemanager('image');
    });
</script>
@endforeach
    <script>
$('#lfm').filemanager('image');




$('#lfm1').filemanager('image');
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
    $('#summernote12').summernote({
      placeholder: '',
      tabsize: 2,
      height: 400
    });

    </script>

@foreach ($sayfa as $get)
<script>
    $(document).ready(function() {
        $('#summernote{{ $get->id }}').summernote({
            placeholder: '',
            tabsize: 2,
            height: 400
        });
    });
</script>
@endforeach

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>
</html>
