
    @include('admin.head.SideBarComponents.head2')

	<link id="ekka-css" rel="stylesheet" href="kupon.css" />

	<!-- FAVICON -->


<body >


    @include('admin.head.header2')

	<!-- WRAPPER -->
	<div  class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <div class="layout-container" >


     


                <!-- Header -->
                @include('admin.head.sidebar2')
    
    
                <!-- CONTENT WRAPPER -->
    
                @livewire("kupon")
    
    

    
                <!-- Footer -->
                <div style="display: none">
                    @include('admin.head.footer')
                </div>
    
    
       
        </div>

		<!-- LEFT MAIN SIDEBAR -->



		<!-- PAGE WRAPPER -->
 <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->


	<!-- Option Switcher -->
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

    <script>
        function nextStep(step) {
          // Geçerli formu kontrol et
          const form = document.getElementById('couponForm');
          if (!form.checkValidity()) {
            form.classList.add('was-validated');
            return;
          }

          // Formu geçerli kabul ederek bir sonraki adıma geç
          const nextTab = new bootstrap.Tab(document.querySelector(`#pills-step${step + 1}-tab`));
          nextTab.show();
          document.querySelector(`#pills-step${step + 1}-tab`).disabled = false;
        }

        function prevStep(step) {
          // Önceki adıma geri dön
          const prevTab = new bootstrap.Tab(document.querySelector(`#pills-step${step}-tab`));
          prevTab.show();
        }
      </script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var today = new Date().toISOString().split('T')[0];
        document.getElementById('startDate').setAttribute('min', today);
        document.getElementById('endDate').setAttribute('min', today);

        document.getElementById('startDate').addEventListener('change', function() {
            var startDate = this.value;
            document.getElementById('endDate').setAttribute('min', startDate);
        });
    });

    document.getElementById('dateForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Formun normal gönderimini durdur
        var form = event.target;
        if (form.checkValidity()) {
            alert('Form successfully submitted');
        } else {
            event.stopPropagation();
            form.classList.add('was-validated');
        }
    });
    </script>

	<!-- Ekka Custom -->

	<script src="kupon.js"></script>
</body>

</html>
