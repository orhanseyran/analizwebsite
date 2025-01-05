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
					<div
						class="breadcrumb-wrapper breadcrumb-wrapper-2 d-flex align-items-center justify-content-between">
						<h1>Potansiyel Müşteri Raporu</h1>



					</div>
					<div class="row">

						<div class="col-12">
                            <a class="btn btn-outline-success mb-3"  href="{{ route("pmaexport") }}">Exel Raporu İndir</a>

							<div class="card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table" style="width:100%">
											<thead>
												<tr>
													<th>Ürün Resim</th>
													<th>Ürün Adı</th>
													<th>Fiyat</th>
													<th>İp Adresi</th>
													<th>Müşteri Adı</th>
													<th>Müşteri Telefonu</th>
													<th>Müşteri Email</th>
													<th>Potansiyel Müşteri Skoru</th>
													<th>Date</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>
                                                @foreach ($pma as $get )
                                                <tr>
													<td><img width="50" class="tbl-thumb" src="images/{{ $get->resim }}" alt="product image"/></td>
													<td>{{ $get->baslik }}</td>
                                                    <td>{{ number_format($get->fiyat)}} ₺</td>
                                                    <td>{{ $get->kullanici_ip}}</td>
													<td>{{ $get->user_name }}</td>
													<td>{{ $get->telefon }}</td>
													<td>{{ $get->email }}</td>
													<td>
                                                        @if ($get->pma_skor <= 2)
                                                        <div class="ec-t-rate">
															<i class="mdi mdi-star is-rated"></i>
															<i class="mdi mdi-star"></i>
															<i class="mdi mdi-star"></i>
															<i class="mdi mdi-star"></i>
															<i class="mdi mdi-star"></i>
														</div>
                                                        @elseif($get->pma_skor <= 4)
                                                        <div class="ec-t-rate">
															<i class="mdi mdi-star is-rated"></i>
															<i class="mdi mdi-star is-rated"></i>
															<i class="mdi mdi-star"></i>
															<i class="mdi mdi-star"></i>
															<i class="mdi mdi-star"></i>
														</div>
                                                        @elseif($get->pma_skor <= 6)
                                                        <div class="ec-t-rate">
															<i class="mdi mdi-star is-rated"></i>
															<i class="mdi mdi-star is-rated"></i>
															<i class="mdi mdi-star is-rated"></i>
															<i class="mdi mdi-star"></i>
															<i class="mdi mdi-star"></i>

														</div>
                                                        @elseif($get->pma_skor <= 8)
                                                        <div class="ec-t-rate">
															<i class="mdi mdi-star is-rated"></i>
															<i class="mdi mdi-star is-rated"></i>
															<i class="mdi mdi-star is-rated"></i>
															<i class="mdi mdi-star is-rated"></i>
															<i class="mdi mdi-star"></i>

														</div>
                                                        @elseif($get->pma_skor >= 10)
                                                        <div class="ec-t-rate">
															<i class="mdi mdi-star is-rated"></i>
															<i class="mdi mdi-star is-rated"></i>
															<i class="mdi mdi-star is-rated"></i>
															<i class="mdi mdi-star is-rated"></i>
															<i class="mdi mdi-star is-rated"></i>

														</div>

                                                        @endif

                                                      Müşteriniz Ürününüze  {{ $get->pma_skor  }} Kere Bakmış


													</td>
													<td>2021-12-03</td>
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
																<a class="dropdown-item" href="#">Edit</a>
																<a class="dropdown-item" href="#">Delete</a>
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
