<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('admin.head.SideBarComponents.head')

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">

	<!-- WRAPPER -->
	<div class="row">

		<!-- LEFT MAIN SIDEBAR -->

        @include('admin.head.sidebar')

		<!-- PAGE WRAPPER -->
		<div class="row">

			<!-- Header -->
            <div style="display: none">
                @include('admin.head.header')
            </div>


			<!-- CONTENT WRAPPER -->
			<div class="row">
				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Reklam Yönetimi</h1>
							<p class="breadcrumbs"><span><a href="admin-index">Ana Sayfa</a></span><span><i class="mdi mdi-chevron-right"></i></span> Vendor</p>
						</div>
						<div>
                            <a href="{{ route("index.reklam") }}"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
								data-bs-target="#modal-add-member">Reklamlarım
							</button></a>

						</div>
					</div>
                    <form id="myForm" action="{{ route("index.reklamstore") }}" method="POST" novalidate>
                        @csrf
                        <div class="row bg-gray-100 p-4">
                            <div class="card">
                                @if(session('onay'))
                                <div class="alert alert-success">
                                    {{ session('onay') }}
                                </div>
                                @elseif(session('Hata'))
                                <div class="alert alert-danger">
                                    {{ session('Hata') }}
                                </div>

                                @endif
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="nav flex-column nav-pills me-3 mt-30" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <button class="nav-link active" id="v-pills-home-tab" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Reklam Bilgileri</button>
                                            <button class="nav-link" id="v-pills-step2-tab" type="button" role="tab" aria-controls="v-pills-step2" aria-selected="false" disabled>Ürün Seç Ve Yayınla</button>
                                        </div>
                                    </div>
                                    <div class="col-md-10 mt-3">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="adType" class="form-label">Reklam Tipi</label>
                                                        <select class="form-select" name="reklam_tipi" id="adType" required>
                                                            <option  disabled value="">Reklam Tipi Seç</option>
                                                            <option  selected value="Ürün Reklamı">Ürün Reklamı</option>

                                                        </select>
                                                        <div class="invalid-feedback">Lütfen reklam tipi seçiniz.</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="adName"  class="form-label">Reklam Adı</label>
                                                            <input type="text" name="reklam_adi" class="form-control" id="adName" value="{{ $reklamadı }}" required>
                                                            <div class="invalid-feedback">Reklam Adınız.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="startDate"  class="form-label">Reklam Başlangıc</label>
                                                            <input type="date" name="reklam_başlangic" class="form-control" id="startDate" required>
                                                            <div class="invalid-feedback">Reklam Başlangıc Tarihi.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="endDate"  class="form-label">Reklam Bitiş</label>
                                                            <input type="date" name="reklam_bitiş" class="form-control" id="endDate" disabled required>
                                                            <div class="invalid-feedback">Reklam Bitiş Tarihiniz.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check form-check-inline mt-4">
                                                            <input class="form-check-input" name="günlük_bütce" type="radio"  id="inlineRadio1" value="daily" checked>
                                                            <label class="form-check-label" for="inlineRadio1">Günlük Bütce</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" name="toplam_bütce" type="radio"  id="inlineRadio2" value="total" >
                                                            <label class="form-check-label" for="inlineRadio2">Toplam Bütce</label>
                                                        </div>
                                                        <div class="invalid-feedback d-block">Lütfen bütçe tipi seçiniz.</div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="mb-3">
                                                            <label for="budget"   class="form-label">Reklam Bütce (Toplam Bakiyem : {{ $toplam_bakiye->toplam_reklam_bakiyesi == null ? 0 : $toplam_bakiye->toplam_reklam_bakiyesi }} )</label>
                                                            <input type="number" name="reklam_bütce" class="form-control" id="budget" value="10" required>
                                                            <div class="invalid-feedback">Reklam Bütceniz.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="mb-3">
                                                            <label for="cpc" class="form-label">Tıklama Başına Maaliyet  (TBM TL)</label>
                                                            <input type="number" name="tbm" class="form-control" id="cpc" value="1" required>
                                                            <div class="invalid-feedback">Tıklama Başına Maaliyet.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="button" class="btn btn-primary" id="nextStepButton">Sonraki Adım</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-step2" role="tabpanel" aria-labelledby="v-pills-step2-tab" tabindex="0">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h2 class="mt-5">Lütfen Ürün Seçiniz</h2>
                                                        <p class="mb-4 mt-3">(Sadece Stokta Olan ve Reklam Sürecinde Olmayan Ürünleriniz İçin Reklam Verebilirsiniz Ürününüz Listede Gözükmüyorsa Lütfen Ürünler Sayfasından Ürün Stok Miktarınızı ve Ürününüz Reklamda olup olmadığını Kontrol Ediniz)</p>
                                                        <div class="card card-default">
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table id="responsive-data-table" class="table" style="width:100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Seç</th>
                                                                                <th>Resim</th>
                                                                                <th>Ürün Adı</th>
                                                                                <th>Fiyat</th>
                                                                                <th>Satın Alım</th>
                                                                                <th>Stok</th>
                                                                                <th>Durum</th>
                                                                                <th>Tarih</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($ürünler as $ürün )
                                                                            @if ($ürün->reklam == "Aktif")

                                                                            <tr>
                                                                                <td>
                                                                                    <p>Ürün Aktif Olarak Reklamda</p>
                                                                                </td>
                                                                                <td><img width="50" src="images/{{ $ürün->resim }}" alt="resim"></td>

                                                                                <td>{{ $ürün->baslik }}</td>
                                                                                @if ($ürün->fiyat )
                                                                                <td>{{ $ürün->fiyat }}</td>
                                                                                @else
                                                                                <td>Fiyat Girilmemiş</td>
                                                                                @endif

                                                                                @if ($ürün->satis_miktari )
                                                                                <td>{{ $ürün->satis_miktari }}</td>
                                                                                @else
                                                                                <td>Henüz Satiş Yok</td>
                                                                                @endif

                                                                                @if ($ürün->stok_miktarı)
                                                                                <td>{{ $ürün->stok_miktarı }}</td>
                                                                                @else
                                                                                <td>Stok Yok</td>
                                                                                @endif



                                                                                @if ($ürün->active == 1)
                                                                                <td>Aktif</td>
                                                                                @else
                                                                                <td>Pasif</td>
                                                                                @endif

                                                                                <td>{{ $ürün->created_at }}</td>
                                                                            </tr>

                                                                            @elseif($ürün->reklam == "Beklemede")
                                                                            <tr>
                                                                                <td>
                                                                                    <p>Ürün Reklam İçin Yayınlanacak Tarihi Bekliyor</p>
                                                                                    <a class="mx-3" href="">İptal Et</a>

                                                                                </td>
                                                                                <td><img width="50" src="images/{{ $ürün->resim }}" alt="resim"></td>

                                                                                <td>{{ $ürün->baslik }}</td>
                                                                                @if ($ürün->fiyat )
                                                                                <td>{{ $ürün->fiyat }}</td>
                                                                                @else
                                                                                <td>Fiyat Girilmemiş</td>
                                                                                @endif

                                                                                @if ($ürün->satis_miktari )
                                                                                <td>{{ $ürün->satis_miktari }}</td>
                                                                                @else
                                                                                <td>Henüz Satiş Yok</td>
                                                                                @endif

                                                                                @if ($ürün->stok_miktarı)
                                                                                <td>{{ $ürün->stok_miktarı }}</td>
                                                                                @else
                                                                                <td>Stok Yok</td>
                                                                                @endif



                                                                                @if ($ürün->active == 1)
                                                                                <td>Aktif</td>
                                                                                @else
                                                                                <td>Pasif</td>
                                                                                @endif

                                                                                <td>{{ $ürün->created_at }}</td>
                                                                            </tr>


                                                                            @else
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="{{ $ürün->id }}" id="product1" name="ürünler[]">
                                                                                    </div>
                                                                                </td>
                                                                                <td><img width="50" src="images/{{ $ürün->resim }}" alt="resim"></td>

                                                                                <td>{{ $ürün->baslik }}</td>
                                                                                @if ($ürün->fiyat )
                                                                                <td>{{ $ürün->fiyat }}</td>
                                                                                @else
                                                                                <td>Fiyat Girilmemiş</td>
                                                                                @endif

                                                                                @if ($ürün->satis_miktari )
                                                                                <td>{{ $ürün->satis_miktari }}</td>
                                                                                @else
                                                                                <td>Henüz Satiş Yok</td>
                                                                                @endif

                                                                                @if ($ürün->stok_miktarı)
                                                                                <td>{{ $ürün->stok_miktarı }}</td>
                                                                                @else
                                                                                <td>Stok Yok</td>
                                                                                @endif



                                                                                @if ($ürün->active == 1)
                                                                                <td>Aktif</td>
                                                                                @else
                                                                                <td>Pasif</td>
                                                                                @endif

                                                                                <td>{{ $ürün->created_at }}</td>
                                                                            </tr>

                                                                            @endif

                                                                            @endforeach

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-secondary mt-4 mb-4" id="backButton">Geri Dön</button>
                                                <button type="submit" class="btn btn-success mx-3 mt-4 mb-4" id="submitButton">Onayla Ve Satın Al</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


				</div> <!-- End Content -->
			</div>

<!-- End Content Wrapper -->

			<!-- Footer -->
            @include('admin.head.footer')

		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
	<script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/plugins/simplebar/simplebar.min.js"></script>
	<script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
	<script src="assets/plugins/slick/slick.min.js"></script>

	<!-- Option Switcher -->
	<script src="assets/plugins/options-sidebar/optionswitcher.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var today = new Date().toISOString().split('T')[0];
            var startDateInput = document.getElementById('startDate');
            var endDateInput = document.getElementById('endDate');

            startDateInput.setAttribute('min', today);
            endDateInput.setAttribute('min', today);

            startDateInput.addEventListener('change', function() {
                var startDate = this.value;
                if (startDate) {
                    endDateInput.removeAttribute('disabled');
                    endDateInput.setAttribute('min', startDate);
                } else {
                    endDateInput.setAttribute('disabled', true);
                    endDateInput.value = '';
                }
            });

            document.getElementById('nextStepButton').addEventListener('click', function() {
                var form = document.getElementById('myForm');
                if (form.checkValidity()) {
                    var step2Tab = new bootstrap.Tab(document.getElementById('v-pills-step2-tab'));
                    step2Tab.show();
                    document.getElementById('v-pills-step2-tab').removeAttribute('disabled');
                    document.getElementById('v-pills-home-tab').classList.remove('active');
                    document.getElementById('v-pills-home').classList.remove('show', 'active');
                    document.getElementById('v-pills-step2').classList.add('show', 'active');
                } else {
                    form.classList.add('was-validated');
                }
            });

            document.getElementById('backButton').addEventListener('click', function() {
                var homeTab = new bootstrap.Tab(document.getElementById('v-pills-home-tab'));
                homeTab.show();
                document.getElementById('v-pills-home-tab').classList.add('active');
                document.getElementById('v-pills-home').classList.add('show', 'active');
                document.getElementById('v-pills-step2-tab').classList.remove('active');
                document.getElementById('v-pills-step2').classList.remove('show', 'active');
            });

            document.getElementById('submitButton').addEventListener('click', function(event) {
                var checkboxes = document.querySelectorAll('#responsive-data-table .form-check-input');
                var isChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
                if (!isChecked) {
                    event.preventDefault();
                    alert('Lütfen en az bir ürün seçiniz.');
                }
            });
        });
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
	<script src="assets/js/ekka.js"></script>
</body>

</html>
