@include('admin.head.SideBarComponents.head2')


<bod>
    @include('admin.head.header2')

    <!-- Header -->
	<!-- WRAPPER -->
    <div  class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">

        <div class="layout-container" >

            @include('admin.head.sidebar2')


			<!-- CONTENT WRAPPER -->
			<div class="row">
				<div style="width: 90%" class="container mt-5">
					<div class="breadcrumb-wrapper breadcrumb-contacts">
						<div>
							<h1 class="text-center">Youtube Kanal Entegrasyonu</h1>

						</div>


						{{-- <div>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addVendor"> Satıcı Ekle
							</button>
						</div> --}}
					</div>

                    <div class="container-fluid">
                        <div class="row  ">

                           <form method="POST" action="{{ route("videoChannel") }}">
                               @csrf
                               <div class="row">
                                   <div class="col-md-6  mb-3">
                                       <label for="exampleInputEmail1" class="form-label">Script Kodunuz</label>
                                       <input type="text" class="form-control" name="script_code" value="{{ $YoutubeChannel->script_code ?? '' }}" id="exampleInputEmail1" required>
                                       <div id="emailHelp" style="font-size:16px" class="form-text">Youtube Kanalınızı Entegrasyon Yapmak İçin <a href="https://elfsight.com/">Üye Olun</a> Size Verilen Script Kodunu İlgili Alana Yapıştırın</div>
                                     </div>

                                     <div class="col-md-6">
                                        <h3 class="mb-3">Nasıl Yapılır</h3>
                                        <video  width="100%" src="youtube.mp4" autoplay controls></video>
                                     </div>

                                     <div class="col-md-12  mb-3">
                                       <button type="submit" class="btn btn-primary">Kaydet</button>
                                     </div>


                               </div>

                             </form>



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
