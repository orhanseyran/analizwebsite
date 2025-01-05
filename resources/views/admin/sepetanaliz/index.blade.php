
@include('admin.head.SideBarComponents.head2')

<body>
    @include('admin.head.header2')
    <div  class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
     
		<div class="layout-container" >
			@include('admin.head.sidebar2')


			<!-- Header -->



			<!-- CONTENT WRAPPER -->
			<div class="row">
				<div style="width: 90%" class="container mt-5">
					<div
						class="breadcrumb-wrapper breadcrumb-wrapper-2 d-flex align-items-center justify-content-between">
						<h1>Sepete Kimler Eklemiş</h1>
						<p class="breadcrumbs"><span><a href="">Ana Sayfa</a></span>
							<span><i class="mdi mdi-chevron-right"></i></span>Sepet
						</p>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table" style="width:100%">
											<thead>
												<tr>
													<th>Ürün Adı</th>
													<th>Ürün Fiyatı</th>
													<th>Toplam Sepet Tutarı</th>
													<th>Eklenen Adet</th>
													<th>Kullanıcı Konum</th>
													<th>Eklediği Tarih</th>
													<th></th>
												</tr>
											</thead>

											<tbody>
                                                @foreach ($sepet as $get )
                                                <tr>
													<td>{{$get->product_name }}</td>
													<td>{{$get->product_price }}</td>
													<td>{{$get->total_price }}</td>
													<td>{{$get->product_quantity }}</td>
                                                    <td>
                                                        {{$get->kullanıcı}} <a href="https://www.ipsorgu.com/ip_numarasindan_adres_bulma.php" target="_blank" class="sorgula-link" data-username="{{$get->kullanıcı}}"> Konum Sorgula</a>
                                                      </td>

													<td>{{$get->created_at}}</td>
													<td>

													</td>
												</tr>
                                                @endforeach


											</tbody>
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
    // Tüm 'sorgula-link' sınıfına sahip bağlantıları bul
                                                    const sorgulaLinks = document.querySelectorAll('.sorgula-link');

                                                    sorgulaLinks.forEach(link => {
                                                        link.addEventListener('click', function(event) {
                                                            // Kullanıcı adını data-username özelliğinden al
                                                            const username = this.getAttribute('data-username');

                                                            // Kullanıcı adını panoya kopyala
                                                            navigator.clipboard.writeText(username).then(() => {
                                                                console.log('Kullanıcı adı panoya kopyalandı.');
                                                            }).catch(err => {
                                                                console.error('Panoya kopyalama hatası:', err);
                                                            });
                                                        });
                                                    });
                                                });

                                            </script>
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
