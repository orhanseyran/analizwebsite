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
							<h1>En Çok Sorulan Sorular</h1>
							<p class="breadcrumbs"><span><a href="index.html">Ana Sayfa</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>En Çok Sorulan Sorular</p>
						</div>
						<div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Soru Cevap Ekle
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
													<th>Soru</th>
													<th>Cevap</th>
													<th></th>
													<th></th>
													<th></th>
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
													<td>{!! $get->ss_soru !!}</td>
													<td>{!! $get->ss_cevap !!}</td>
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
																<a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $get->id }}">Düzenle</a>
																<a class="dropdown-item" onclick="return confirm('Bu Soruyu silmek istediğinize emin misiniz?');" href="{{ route("ozelsayfa.sil",$get->id) }}">Sil</a>
															</div>
														</div>
													</td>
												</tr>
                                                <div class="modal fade" id="exampleModal{{ $get->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $get->id }}" aria-hidden="true">
                                                    <form method="POST" action="{{ route("ozelsayfa.duzenle",$get->id) }}">
                                                        @csrf
                                                    <div class="modal-dialog modal-lg">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h1 class="modal-title fs-5" id="exampleModalLabel">Soru Cevap Ekle</h1>
                                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <div style="display:none" class="col-12 mt-5">
                                                                <label for="file"> Ad</label>
                                                                <input type="text" name="sayfa_adi" class="form-control" value="SSS" >
                                                            </div>




                                                                <div class="mb-3">
                                                                  <label for="exampleInputEmail1" class="form-label">Soru</label>
                                                                  <textarea class="form-control" name="ss_soru" id="summernoteSoru{{ $get->id }}"  rows="5">{!! $get->ss_soru!!}</textarea>
                                                                </div>
                                                                <div class="mb-3">
                                                                  <label for="exampleInputPassword1" class="form-label">Cevap</label>
                                                                  <textarea class="form-control" name="ss_cevap" id="summernoteCevap{{ $get->id }}" rows="5">{!! $get->ss_cevap !!}</textarea>
                                                                </div>


                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                                                          <button type="submit" class="btn btn-primary">Düzenle</button>
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
                <form method="POST" action="{{ route("ozelsayfa.ekle") }}">
                    @csrf
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Soru Cevap Ekle</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div style="display:none" class="col-12 mt-5">
                            <label for="file"> Ad</label>
                            <input type="text" name="sayfa_adi" class="form-control" value="SSS" >
                        </div>




                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Soru</label>
                              <textarea class="form-control" name="ss_soru" id="summernote1"  rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Cevap</label>
                              <textarea class="form-control" name="ss_cevap" id="summernote2" rows="5"></textarea>
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

    <script>
$('#lfm').filemanager('image');

$('#lfm1').filemanager('image');
    </script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
   <script>




    for (let index = 1; index <= 10; index++) {
    $('#summernote' + index).summernote({
        placeholder: '',
        tabsize: 2,
        height: 250
    });
}
</script>
@foreach ($sayfa as $get)
<script>

    $(document).ready(function() {
      // Summernote for Soru
      $('#summernoteSoru{{ $get->id }}').summernote({
        height: 200,   // set the height of the editor
        tabsize: 2
      });
      // Summernote for Cevap
      $('#summernoteCevap{{ $get->id }}').summernote({
        height: 200,   // set the height of the editor
        tabsize: 2
      });
    });
  </script>
@endforeach


	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>
</html>
