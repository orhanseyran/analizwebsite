<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('admin.head.SideBarComponents.head')
<style>
    .money-box{
        box-sizing: border-box;
        height: 50px;
        width: 350px;
        border: 1px solid #d5d9e1;
        border-radius: 6px;
        background-color: #fff;
        color: #273142;
        font-weight: 500;
        font-size: 20px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
</style>

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
                            @if (auth()->user()->Role == "Admin")
                            <a href="{{ route("index.reklamadd.admin") }}"><button type="button" class="btn btn-success" data-bs-toggle="modal"
								data-bs-target="">Reklam Ekle +
							</button></a>
                            @else
                            <a href="{{ route("index.reklamadd") }}"><button type="button" class="btn btn-success" data-bs-toggle="modal"
								data-bs-target="">Reklam Ekle +
							</button></a>

                            @endif

                            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
								data-bs-target="#modal-add-member">Bakiye Ekle +
							</button>

                            <form action="{{ route("index.addbakiye") }}" method="POST">
                                @csrf
                                <div class="modal fade" id="modal-add-member" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-add-member" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                                                </li>
                                                {{-- <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
                                                </li> --}}
                                              </ul>

                                              <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                                    <div class="row">

                                                        <h4 class="mt-3">Bakiye Seçin</h4>
                                                        <div class="col-md-4 mt-3">
                                                            <button disabled class="money-box  text-center">
                                                                <input type="checkbox"  value="100" name="reklam_bakiyesi_1" >
                                                                <label for="">100 TL</label>
                                                            </button>
                                                        </div>
                                                        <div class="col-md-4 mt-3">
                                                            <button disabled class="money-box  text-center">
                                                                <input type="checkbox"  value="100" name="reklam_bakiyesi_2" >
                                                                <label for="">100 TL</label>
                                                            </button>
                                                        </div>
                                                        <div class="col-md-4 mt-3">
                                                            <button disabled class="money-box  text-center">
                                                                <input type="checkbox"  value="100" name="reklam_bakiyesi_3" >
                                                                <label for="">100 TL</label>
                                                            </button>
                                                        </div>
                                                        <div class="col-md-4 mt-3">
                                                            <button disabled class="money-box  text-center">
                                                                <input type="checkbox"  value="100" name="reklam_bakiyesi_4" >
                                                                <label for="">100 TL</label>
                                                            </button>
                                                        </div>
                                                        <div class="col-md-4 mt-3">
                                                            <button disabled class="money-box  text-center">
                                                                <input type="checkbox"  value="100" name="reklam_bakiyesi_5" >
                                                                <label for="">100 TL</label>
                                                            </button>
                                                        </div>
                                                        <div class="col-md-4 mt-3">
                                                            <input type="number" placeholder="Farklı Tutar ..." name="reklam_bakiyesi_3" class="money-box  text-center"></input>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">..fdsfds.</div>
                                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                                                {{-- <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div> --}}
                                              </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Bakiye Ekle</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                            </form>



						</div>
					</div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                                <div class="card card-mini dash-card card-1">
                                    <div class="card-body">
                                        <h2 class="mb-1">{{ $reklamyönetim->günlük_reklam_gösterimi == null ?  0 : $reklamyönetim->günlük_reklam_gösterimi  }}</h2>
                                        <p>Günlük Reklam Gösterimi</p>
                                        <span class="mdi mdi-account-arrow-left"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                                <div class="card card-mini dash-card card-2">
                                    <div class="card-body">
                                        <h2 class="mb-1">{{ $reklamyönetim->günlük_reklam_tiklamasi == null ?  0 : $reklamyönetim->günlük_reklam_tiklamasi }}</h2>
                                        <p>Günlük Reklam Tıklanması</p>
                                        <span class="mdi mdi-account-clock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                                <div class="card card-mini dash-card card-3">
                                    <div class="card-body">
                                        <h2 class="mb-1">{{ $reklamyönetim->tbm_performans == null ?  0 : $reklamyönetim->tbm_performans }}</h2>
                                        <p> Günlük TBM Performans</p>
                                        <span class="mdi mdi-package-variant"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 p-b-15 lbl-card">
                                <div class="card card-mini dash-card card-4">
                                    <div class="card-body">
                                        <h2 class="mb-1">{{ $reklamyönetim->toplam_reklam_bakiyesi == null ?  0 : $reklamyönetim->toplam_reklam_bakiyesi }} TL</h2>
                                        <p>Toplam Reklam Bakiyem</p>
                                        <span class="mdi mdi-currency-try"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row bg-gray-100 p-4">
                            <div class="card">
                                <img class="text-center mb-5 mt-5" src="images/reklam.png" alt="reklam">
                                <ul class="nav nav-pills mb-3 mt-4" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="pills-home-tab3" data-bs-toggle="pill" data-bs-target="#pills-home3" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Ürün Reklamları</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button disabled class="nav-link" id="pills-profile-tab4" data-bs-toggle="pill" data-bs-target="#pills-profile4" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Mağaza Reklamları (Yakında Aktif)</button>
                                    </li>
                                    {{-- <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
                                    </li> --}}
                                  </ul>


                            </div>
                            <div class="card mt-5 p-4">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home3" role="tabpanel" aria-labelledby="pills-home-tab3" tabindex="0">
                                        <div class="row">

                                            <h2>Oluşturulan Reklamlar</h2>
                                            <div class="row mt-4">
                                                <div class="col-12">
                                                    <div class="ec-vendor-list card card-default">
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table id="responsive-data-table" class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Reklam Bilgisi</th>
                                                                            <th>Reklam Bütcesi</th>
                                                                            <th>Harcanan Bütce</th>
                                                                            <th>TBM</th>
                                                                            <th>Gösterim Sayısı</th>
                                                                            <th>Tıklanma Sayısı</th>
                                                                            {{-- <th>Satiş Adeti</th> --}}
                                                                            <th>Reklam Durumu</th>
                                                                            <th>Reklam Ayarları</th>

                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>

                                                                        @foreach ($reklamlar as $reklam )
                                                                        @if ($reklam->Aktif)
                                                                        <tr>
                                                                            <td><img class="vendor-thumb" src="assets/img/vendor/u6.jpg" alt="user profile" /></td>
                                                                            <td>{{ $reklam->reklam_adi}}</td>
                                                                            <td>{{ $reklam->reklam_bütce}} TL</td>
                                                                            <td>{{ $reklam->tbm }}</td>
                                                                            <td>{{ $reklam->gösterim_sayisi }}</td>
                                                                            <td>{{ $reklam->tiklanma_sayisi }}</td>
                                                                            {{-- <td>2021-10-14</td> --}}
                                                                            <td>{{ $reklam->Aktif }}</td>
                                                                            <td>
                                                                                <div class="btn-group mb-1">
                                                                                    <button type="button"
                                                                                        class="btn btn-outline-success">Reklam Detayları</button>
                                                                                    <button type="button"
                                                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                                        aria-expanded="false" data-display="static">
                                                                                        <span class="sr-only">Reklam Detayları</span>
                                                                                    </button>

                                                                                    <div class="dropdown-menu">
                                                                                        <a class="dropdown-item" href="#">Düzenle</a>

                                                                                    </div>
                                                                                </div>
                                                                            </td>
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
                                        </div>


                                    </div>
                                    <div class="tab-pane fade" id="pills-profile4" role="tabpanel" aria-labelledby="pills-profile-tab4" tabindex="0">mağaza</div>
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                                    <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
                                  </div>
                            </div>
                        </div>
                    </div>


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

	<!-- Ekka Custom -->
	<script src="assets/js/ekka.js"></script>
</body>

</html>
