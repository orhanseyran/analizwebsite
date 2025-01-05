

@include('admin.head.SideBarComponents.head2')

<style>
        #backgroundDiv {
            background-image: url('images/indirimkupon.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 330px;
        }
</style>

<body >

	<!-- WRAPPER -->
	<div class="row">


		<!-- LEFT MAIN SIDEBAR -->

        @include('admin.head.header2')


        <div  class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
            <div class="layout-container" >
                @include('admin.head.sidebar2')
                
        <div id="backgroundDiv">
        </div>
				<div class="content">


                    <div class="container-fluid">
                        @include('admin.kupon.components.kuponlar')

                    </div>

			</div>

			<!-- Footer -->


		</div> <!-- End Page Wrapper -->

	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
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
