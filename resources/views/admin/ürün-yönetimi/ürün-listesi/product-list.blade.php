
@include('admin.head.SideBarComponents.head2')


@include('admin.head.header2')
<div  class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">

	<div class="layout-container" >
		@include('admin.head.sidebar2')


		<!-- LEFT MAIN SIDEBAR -->



		<!-- PAGE WRAPPER -->
		<div class="row">


			<!-- Header -->
            <div style="display: none">
                @include('admin.head.header')

            </div>
			<style>
				.nav-pills .nav-item .nav-link.active {
				color: #ffffff;
				background: #f7a84d;
			}
			</style>

			<div  style="width: 90%" class="container mt-5">>
				<div class="row">


							@include('admin.ürün-yönetimi.ürün-listesi.components.tümürünler')





				</div>


			</div>



			<!-- CONTENT WRAPPER -->


			<!-- Footer -->


		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->
</div>
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
