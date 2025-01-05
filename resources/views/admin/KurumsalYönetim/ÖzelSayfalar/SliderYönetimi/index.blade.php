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
				<div style="width: 90%" class="container mt-5">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Slider Yönetimi</h1>
							<p class="breadcrumbs"><span><a href="index.html">Ana Sayfa</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Slider Yönetimi</p>
						</div>
						<div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Slider Ekle
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
													<th>Slider Resim</th>

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
													<td><img width="150" class="tbl-thumb" src="{{ $get->slider_resim }}" alt="Product Image" /></td>

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
																<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $get->id }}">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
															</div>
														</div>
													</td>
												</tr>
                                                <div class="modal fade" id="exampleModal{{ $get->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $get->id }}" aria-hidden="true">
                                                    <form action="{{ route("ozelsayfa.duzenle",$get->id) }}" method="POST" enctype="multipart/form-data">
                                                  @csrf
                                                  <div class="modal-dialog">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Slider Resim Ekle</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                          <div class="mb-3">
                                                              <label for="Resim">Slider Resim:</label>
                                                              <div class="input-group">
                                                                  <span class="input-group-btn">
                                                                    <a id="lfm{{ $get->id }}" data-input="thumbnail{{ $get->id }}" data-preview="holder{{ $get->id }}" class="btn btn-primary">
                                                                      <i class="fa fa-picture-o"></i> Resim Ekle
                                                                    </a>
                                                                  </span>
                                                                  <input id="thumbnail{{ $get->id }}" class="form-control" name="slider_resim" value="" type="text">
                                                                </div>
                                                                <div id="holder" style="margin-top:15px;max-height:100px;">
                                                                    <img src="{{ $get->slider_resim }}" width="150" alt="">
                                                                </div>
                                                          </div>



                                                                <input style="display: none;"  type="text" class="form-control" name="sayfa_adi" value="Slider" id="exampleInputEmail1" aria-describedby="emailHelp">




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
                  <form action="{{ route("ozelsayfa.ekle") }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Slider Resim Ekle</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="Resim">Slider Resim:</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Resim Ekle
                                  </a>
                                </span>
                                <input id="thumbnail" class="form-control" name="slider_resim" type="text" name="filepath">
                              </div>
                              <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                        </div>



                              <input style="display: none;"  type="text" class="form-control" name="sayfa_adi" value="Slider" id="exampleInputEmail1" aria-describedby="emailHelp">




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
    <script>
$('#lfm').filemanager('image');



    </script>
@foreach ( $sayfa as $get )
<script>
    $('#lfm{{ $get->id }}').filemanager('image');
</script>
@endforeach
	<!-- Ekka Custom -->

</body>
</html>
