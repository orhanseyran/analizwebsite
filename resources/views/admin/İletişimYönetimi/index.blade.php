@include('admin.head.SideBarComponents.head2')


<bod>
    @include('admin.head.header2')

    <!-- Header -->
	<!-- WRAPPER -->
    <div  class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">

        <div class="layout-container" >

            @include('admin.head.sidebar2')


			<!-- CONTENT WRAPPER -->

            <div class="ec-content-wrapper">
				<div style="width: 90%" class="container mt-5">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>İletişim Mesajları</h1>
							<p class="breadcrumbs"><span><a href="/admin-index">Ana Sayfa</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>İletişim</p>
						</div>
						<div>
                            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                İçerik Ekle
                              </button> --}}
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
													<th>Ad Soyad</th>
													<th>Email</th>
													<th>Soru</th>
													<th>Durum</th>
													<th>Gönderilme Tarihi</th>
													<th>Oku - Sil</th>

												</tr>
											</thead>

											<tbody>
                                                @foreach ($data as $get )
                                                <tr>


													<td>{{ $get->namesurname }}</td>
													<td>{{ $get->email }}</td>
													<td>{{ $get->soru }}</td>
                                                    @if ($get->durum == 0)
                                                    <td><a href="{{ route("okundu",$get->id) }}" class="btn btn-outline-danger">Okundu Olarak İşaretle</a></td>
                                                    @else
                                                    <td><a href="{{ route("okundu",$get->id) }}" class="btn btn-outline-success">Okundu</a></td>
                                                    @endif
													<td>{{ $get->created_at }}</td>
													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Oku - Sil</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Oku - Sil</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item"   data-bs-toggle="modal" data-bs-target="#exampleModal{{ $get->id }}" >Oku</a>
																<a class="dropdown-item" onclick="return confirm('Bu İletişim Formunu silmek istediğinize emin misiniz?');" href="{{ route("sil",$get->id ) }}">Sil</a>
															</div>
														</div>
													</td>
												</tr>
                                                    <div class="modal fade" id="exampleModal{{ $get->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $get->id }}" aria-hidden="true">
                                                        <form>
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
                                                                            <label for="exampleInputEmail1" class="form-label">Başlık</label>
                                                                            <input type="text" class="form-control" value="{{ $get->namesurname }}" id="exampleInputEmail1" aria-describedby="emailHelp">                                  </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                                                            <input type="email" class="form-control" value="{{ $get->email }}" id="exampleInputEmail1" aria-describedby="emailHelp">

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Soru</label>
                                                                            <textarea id="summernote{{ $get->id }}" name="" >{!!$get->soru!!}</textarea>
                                                                            <div id="emailHelp" class="form-text">Lütfen Açıklamayı Giriniz.</div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                                                            @if ( $get->durum == 0 )
                                                            <a href="{{ route("okundu",$get->id) }}" class="btn btn-outline-danger">Okundu Olarak İşaretle</a>
                                                            @else
                                                            <a href="{{ route("okundu",$get->id) }}" class="btn btn-outline-success">Okundu</a>
                                                            @endif

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
                <form>
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
                                    <label for="exampleInputEmail1" class="form-label">Başlık</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">                                  </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                  </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Soru</label>
                                    <textarea id="summernote" name="" ></textarea>
                                    <div id="emailHelp" class="form-text">Lütfen Açıklamayı Giriniz.</div>
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


    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $('#summernote').summernote({
          placeholder: '',
          tabsize: 2,
          height: 400
        });
      </script>

@foreach ($data as $get)
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

	<!-- Option Switcher -->

    <script>
$('#lfm').filemanager('image');

$('#lfm1').filemanager('image');
    </script>

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

	<!-- Ekka Custom -->

</body>
</html>
