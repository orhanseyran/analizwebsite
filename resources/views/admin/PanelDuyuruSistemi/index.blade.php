@include('admin.head.SideBarComponents.head2')

<body>
    @include('admin.head.header2')
	<!-- WRAPPER -->
    <div  class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">

		<div class="layout-container" >


		<!-- PAGE WRAPPER -->
		<div class="row">




                @include('admin.head.sidebar2')

			<!-- CONTENT WRAPPER -->

            <div style="width: 90%" class="container mt-5">
				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Panel Duyuru Sistemi</h1>
							<p class="breadcrumbs"><span><a href="/admin-index">Ana Sayfa</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Panel Duyuru Sistemi</p>
						</div>
						<div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                İçerik Ekle
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
													<th>Panel Duyuru Resim</th>
													<th></th>
													<th></th>
													<th></th>
													<th></th>
													<th></th>
													<th></th>
													<th>AKTİF-PASİF</th>
													<th>Düzenle -Sil</th>
												</tr>
											</thead>

											<tbody>
                                                @foreach ($panelduyuru as $get )
												<tr>
													<td><img class="tbl-thumb" src="{{ $get->duyuru_resim }}" alt="Product Image" /></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td>{{ $get->aktif == 1 ? "AKTİF" : "PASİF" }}</td>
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
																<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal{{$get->id }}">Düzenle</a>
                                                                <a class="dropdown-item" onclick="return confirm('Bu Duyuruyu silmek istediğinize emin misiniz?');" href="{{ route("panelduyuru.delete",$get->id) }}">Sil</a>															</div>
														</div>
													</td>
												</tr>
                                                <div class="modal fade" id="exampleModal{{$get->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{$get->id }}" aria-hidden="true">
                                                    <form method="POST" action="{{ route("panelduyuru.edit",$get->id ) }}"  >
                                                        @csrf
                                                    <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Panel Duyuru Ekle</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label">Resim</label>
                                                                        <div class="input-group">
                                                                            <span class="input-group-btn">
                                                                            <a id="lfm{{ $get->id }}" data-input="thumbnail{{ $get->id }}" data-preview="holder{{ $get->id }}" class="btn btn-primary">
                                                                                <i class="fa fa-picture-o"></i> Resim Ekle
                                                                            </a>
                                                                            </span>
                                                                            <input id="thumbnail{{ $get->id }}" class="form-control" name="duyuru_resim" value="{{ $get->duyuru_resim }}" type="text" name="filepath">
                                                                        </div>
                                                                        <div id="holder{{ $get->id }}" style="margin-top:15px;max-height:100px;">
                                                                            <img src="{{ $get->duyuru_resim }}" width="150"  alt="{{ $get->duyuru_resim }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label">Durum</label>
                                                                        <select class="form-select" name="aktif" aria-label="Default select example">

                                                                            @if ($get->aktif == 1)
                                                                            <option selected value="{{ $get->aktif }}">Aktif</option>
                                                                            <option value="0">Pasif</option>
                                                                            @else
                                                                            <option selected value="{{ $get->aktif }}">Pasif</option>
                                                                            <option  value="1">Aktif</option>


                                                                            @endif


                                                                          </select>
                                                                      </div>
                                                                </div>

                                                            </div>


                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                                                        <button type="submit" class="btn btn-primary">Panel Duyuru Ekle</button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    </form>

                                                @endforeach



                                            </div>


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
                <form action="{{ route("panelduyuru.add") }}" method="POST">
                    @csrf
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Panel Duyuru Ekle</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Resim</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                          <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Resim Ekle
                                          </a>
                                        </span>
                                        <input id="thumbnail" class="form-control" name="duyuru_resim" type="text" name="filepath">
                                      </div>
                                      <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                                  </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Durum</label>
                                    <select class="form-select" name="aktif" aria-label="Default select example">
                                        <option selected value="1">Aktif</option>
                                        <option value="0">Pasif</option>
                                      </select>
                                  </div>
                            </div>

                        </div>


                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                      <button type="submit" class="btn btn-primary">Panel Duyuru Ekle</button>
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
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Data Tables -->
	<script src='assets/plugins/data-tables/jquery.datatables.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.bootstrap5.min.js'></script>
	<script src='assets/plugins/data-tables/datatables.responsive.min.js'></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $('#summernote').summernote({
          placeholder: '',
          tabsize: 2,
          height: 400
        });
      </script>

@foreach ($panelduyuru as $get)
<script>
    $(document).ready(function() {
        $('#lfm{{ $get->id }}').filemanager('image');
    });
</script>
@endforeach

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
