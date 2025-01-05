

@include('admin.head.SideBarComponents.head2')


<body >

    @include('admin.head.header2')

	<!-- WRAPPER -->

    <!-- WRAPPER -->
    <div  class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
     
        <div class="layout-container" >

            @include('admin.head.sidebar2')


            <!-- CONTENT WRAPPER -->
            <div class="row">
                <div class="content">
                    <div style="width: 87%" class="container-fluid breadcrumb-wrapper breadcrumb-contacts">
                        <div>
                            <h1>Ödemelerim</h1>
                            <p class="breadcrumbs"><span><a href="/admin-index">Ana Sayfa</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span>Ödemelerim
                            </p>
                        </div>
                        {{-- <div>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addVendor"> Satıcı Ekle
							</button>
						</div> --}}

                    </div>


                    <div class="row">
						@include('admin.ödemeYönetimi.components.card')


                    </div>
					<div class="row">
						@include('admin.ödemeYönetimi.components.geçmişödeme')
					</div>

                </div>



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
