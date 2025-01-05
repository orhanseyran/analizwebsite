
@include('admin.head.SideBarComponents.head2')

<body>
    @include('admin.head.header2')
	<!-- WRAPPER -->
    <div  class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">

		<div class="layout-container" >
			@include('admin.head.sidebar2')


			<!-- Header -->



			<!-- CONTENT WRAPPER -->
			<div class="row">
				<div style="width: 90%" class="container mt-5">
                    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Musteri Resimli Yorumları</h1>
							<p class="breadcrumbs"><span><a href="index.html">Ana Sayfa</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Musteri Resimli Yorumları</p>
						</div>
						<div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                İçerik Ekle
                              </button>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
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
							<div class="card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table"
											style="width:100%">
											<thead>
												<tr>
													<th>Resim</th>
													<th></th>
													<th></th>
													<th></th>
                                                    <th>Yayınlanma Tarihi</th>
                                                    <th>Düzenleme</th>
                                                    <th></th>


												</tr>
											</thead>

											<tbody>
                                                @foreach ($resim as $get )
                                                <tr>
													<td><img class="tbl-thumb" src="{{ $get->resim }}" alt="{{ $get->baslik }}" /></td>
													<td>{{ $get->ad_soyad}}</td>
													<td>{{ $get->ciro}}</td>
													<td>{{ $get->kar_oranı}}</td>
                                                    <td>{{ $get->created_at}}</td>


													<td>
														<div class="btn-group mb-1">
															<button type="button"
																class="btn btn-outline-success">Detay</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Detay</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $get->id }}" href="#">Düzenle</a>
																<a class="dropdown-item" onclick="confirm('Musteri Yorumunu Silmek İstiyormusunuz')" href="{{ route("yorum.delete",$get->id) }}">Sil</a>
															</div>
														</div>
													</td>
                                                    <div class="modal fade" id="exampleModal{{ $get->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <form action="{{ route("yorum.edit",$get->id) }}" method="POST" >
                                                            @csrf
                                                        <div class="modal-dialog modal-xl">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <h1 class="modal-title fs-5" id="exampleModalLabel">Musteri Hikaye Düzenle</h1>
                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body p-5">
                                                                <div class="row">


                                                                       <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <label for="exampleInputEmail1" class="form-label">Resim</label>
                                                                            <div class="input-group">
                                                                                <span class="input-group-btn">
                                                                                  <a id="lfm{{ $get->id}}" data-input="thumbnail{{ $get->id}}" data-preview="holder{{ $get->id}}" class="btn btn-primary">
                                                                                    <i class="fa fa-picture-o"></i> Resim Ekle
                                                                                  </a>
                                                                                </span>
                                                                                <input id="thumbnail{{ $get->id}}" class="form-control" name="resim" value="{{ $get->resim}}" type="text" >
                                                                              </div>
                                                                              <div id="holder{{ $get->id}}" style="margin-top:15px;max-height:100px;">
                                                                              <img width="100" src="{{ $get->resim}}" alt="{{ $get->resim}}">
                                                                              </div>
                                                                          </div>
                                                                    </div>

                                                                </div>


                                                            </div>
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                                                              <button type="submit" class="btn btn-primary">Müsteri Hikesini Düzenle</button>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </form>
                                                    </div>
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

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>

</html>









