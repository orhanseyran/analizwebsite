@include('admin.head.SideBarComponents.head2')
<style>

    .chat-box {
        overflow-y: auto;
        border-radius: 30px;
        height: 500px;
    }
    .chat-message {
        padding: 10px 20px;
        margin: 5px;
        border-radius: 25px;
        max-width: 50%;
    }
    .received {
        font-size: 18px;
        width: 350px;
        color: white;
        background-color: #198754;
        border-bottom-left-radius: 15;
    }
    .sent {
        font-size: 18px;
        width: 350px;
        background-color: #007bff;
        border-bottom-right-radius: 15;
        margin-left: auto;
        color: white;
    }
    .chat-input {
        border-radius: 30px;
    }
    .btn-primary {
        background-color: #007bff; /* Butonun mavi arka planı */
        border-color: #007bff; /* Buton kenarlık rengi */
    }
    .fa-paper-plane {
        color: #fff; /* Beyaz ikon rengi */
    }
</style>

<body>
    @include('admin.head.header2')
	<!-- WRAPPER -->
    <div  class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">

		<div class="layout-container" >


		<!-- PAGE WRAPPER -->
		<div class="row">




                @include('admin.head.sidebar2')


			<!-- CONTENT WRAPPER -->


            <form action="" method="post">
                @csrf
                <div class="container py-5">
                    <div class="row">




                        <div  class="col-md-8 mx-auto border-5">
                            <div class="row mb-3">
                                <div class="col-md-8 d-flex">

                                    <a href="/Destek" class="btn btn-outline-success mx-2"><-Destek Teleplerim</a>

                                </div>
                                <div class="col-md-4">
                                    <h3 class="text-end">#466568</h3>
                                </div>
                            </div>


                            <div class="bg-white p-3 shadow rounded">
                                <div class="row mb-5 bg-success p-4 ">
                                    <div class="col-md-6">
                                        <h3 style="color: #fff" >Konu : {{ $destek->konu }} </h3>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 style="color: #fff" class="text-end" >Öncelik : Yüksek </h3>
                                    </div>
                                </div>

                                @if (auth()->user()->Role == "Admin")
                                <select class="form-select mb-3" aria-label="Default select example">
                                    <option selected>Atama Yap</option>
                                    @foreach ($user as $users )
                                    <option value="{{ $users->name }}">{{ $users->name }}</option>
                                    @endforeach
                                </select>

                                @endif
                                <select name="durum" class="form-select mb-3" aria-label="Default select example">
                                    <option selected>Durum</option>
                                    <option value="{{ $destek->durum }}">{{ $destek->durum }}</option>

                                    <option value="Beklemede">Beklemede</option>
                                    <option value="Çözüm Sürecinde">Çözüm Sürecinde</option>
                                    <option value="Çözüldü">Çözüldü</option>
                                </select>

                                <select name="konu" class="form-select mb-3" aria-label="Default select example">
                                    <option selected value="{{ $destek->konu }}">Konu : {{ $destek->konu }}</option>
                                    <option value="siparis">Sipariş</option>
                                    <option value="Ürün">Ürün</option>
                                    <option value="Satici">Satıcı</option>
                                    <option value="İade">İade ve Değişim</option>
                                    <option value="Musteri">Müşteri Hizmetleri</option>
                                    <option value="Fatura">Fatura ve Ödeme</option>
                                    <option value="Kampanya">Kampanyalar</option>
                                    <option value="Teslimat">Teslimat</option>
                                    <option value="Üyelik">Üyelik ve Giriş Problemleri</option>
                                    <option value="Diger">Diğer</option>
                                </select>
                                <input type="text" value="Başlık" class="form-control mb-3" />


                                <div class="chat-box mt-5">

                                    @foreach ( $destek_mesajlar as $mesajlar )
                                    @if ($mesajlar->user_id == auth()->user()->id )
                                    <div>

                                        <div class="chat-message sent">
                                            {{ $mesajlar->mesaj}}
                                            <p style="font-size:12px" class="text-end pt-3">{{ auth()->user()->name }}(Müşteri)</p>
                                        </div>
                                    </div>


                                    @else
                                    <div>

                                        <div class="chat-message received">
                                            {{ $mesajlar->mesaj}}
                                            <p style="font-size:12px" class="text-end pt-3">{{ $mesajlar->user_name }}(Müşteri-Destek)</p>
                                        </div>
                                    </div>

                                    @endif

                                    @endforeach








                                </div>
                                <div class="input-group mt-3">
                                    <input type="text" class="form-control chat-input" placeholder="Mesajınızı yazınız...">
                                    <button class="btn btn-primary" type="button"><i class="fas fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>



			<!-- Footer -->
            @include('admin.head.footer')

		</div> <!-- End Page Wrapper -->

	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
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


    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
       <script>
        $('#summernote').summernote({
          placeholder: '',
          tabsize: 2,
          height: 400
        });
      </script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>

    <script>
     $('#lfm').filemanager('image');
    </script>







	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>
</html>
