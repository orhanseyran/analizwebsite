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
                @if(session('success'))
                <div id="allert" class="alert alert-success">
                    {{ session('success') }}
                </div>


                @endif
                <script>
                    setTimeout(() => {
                        document.getElementById("allert").style.display = "none";

                    }, 3000);
                </script>
                <div class="content">
                    <div class="breadcrumb-wrapper breadcrumb-contacts">
                        <div>
                            <h1>Kullanıcı Profili</h1>
                            <p class="breadcrumbs"><span><a href="index.html">Ana Sayfa</a></span>
                                <span><i class="mdi mdi-chevron-right"></i></span>Profil
                            </p>
                        </div>
                        <div>
                            <a href="user-list.html" class="btn btn-primary">Düzenle</a>
                        </div>
                    </div>
                    <div class="card bg-white profile-content">
                        <div class="row">
                            <div class="col-lg-4 col-xl-3">
                                <div class="profile-content-left profile-left-spacing">
                                    <div class="text-center widget-profile px-0 border-0">
                                        <div class="card-img mx-auto rounded-circle">
                                            <img src="assets/img/user/u1.jpg" alt="kullanıcı resmi">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="py-2 text-dark">Mark Deo</h4>
                                            <p>mark.example@gmail.com</p>
                                            <a class="btn btn-primary my-3" href="#">Takip Et</a>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between ">
                                        <div class="text-center pb-4">
                                            <h6 class="text-dark pb-2">546</h6>
                                            <p>Satın Alınan</p>
                                        </div>

                                        <div class="text-center pb-4">
                                            <h6 class="text-dark pb-2">32</h6>
                                            <p>İstek Listesi</p>
                                        </div>

                                        <div class="text-center pb-4">
                                            <h6 class="text-dark pb-2">1150</h6>
                                            <p>Takip Edilen</p>
                                        </div>
                                    </div>

                                    <hr class="w-100">

                                    <div class="contact-info pt-4">
                                        <h5 class="text-dark">İletişim Bilgileri</h5>
                                        <p class="text-dark font-weight-medium pt-24px mb-2">Email Adresi</p>
                                        <p>mark.example@gmail.com</p>
                                        <p class="text-dark font-weight-medium pt-24px mb-2">Telefon Numarası</p>
                                        <p>+00 1234 5678 91</p>
                                        <p class="text-dark font-weight-medium pt-24px mb-2">Doğum Günü</p>
                                        <p>10 Aralık 1991</p>
                                        <p class="text-dark font-weight-medium pt-24px mb-2">Sosyal Profil</p>
                                        <p class="social-button">
                                            <a href="#" class="mb-1 btn btn-outline btn-twitter rounded-circle">
                                                <i class="mdi mdi-twitter"></i>
                                            </a>

                                            <a href="#" class="mb-1 btn btn-outline btn-linkedin rounded-circle">
                                                <i class="mdi mdi-linkedin"></i>
                                            </a>

                                            <a href="#" class="mb-1 btn btn-outline btn-facebook rounded-circle">
                                                <i class="mdi mdi-facebook"></i>
                                            </a>

                                            <a href="#" class="mb-1 btn btn-outline btn-skype rounded-circle">
                                                <i class="mdi mdi-skype"></i>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8 col-xl-9">
                                <div class="profile-content-right profile-right-spacing py-5">
                                    <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myProfileTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#profile" type="button" role="tab"
                                                aria-controls="profile" aria-selected="true">Profil</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="settings-tab" data-bs-toggle="tab"
                                                data-bs-target="#settings" type="button" role="tab"
                                                aria-controls="settings" aria-selected="false">Ayarlar</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content px-3 px-xl-5" id="myTabContent">

                                        <div class="tab-pane fade show active" id="profile" role="tabpanel"
                                            aria-labelledby="profile-tab">
                                            <div class="tab-widget mt-5">
                                                <div class="row">
                                                    <div class="col-xl-4">
                                                        <div class="media widget-media p-3 bg-white border">
                                                            <div class="icon rounded-circle mr-3 bg-primary">
                                                                <i class="mdi mdi-account-outline text-white "></i>
                                                            </div>

                                                            <div class="media-body align-self-center">
                                                                <h4 class="text-primary mb-2">546</h4>
                                                                <p>Satın Alınan</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-4">
                                                        <div class="media widget-media p-3 bg-white border">
                                                            <div class="icon rounded-circle bg-warning mr-3">
                                                                <i class="mdi mdi-cart-outline text-white "></i>
                                                            </div>

                                                            <div class="media-body align-self-center">
                                                                <h4 class="text-primary mb-2">1953</h4>
                                                                <p>İstek Listesi</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-4">
                                                        <div class="media widget-media p-3 bg-white border">
                                                            <div class="icon rounded-circle mr-3 bg-success">
                                                                <i class="mdi mdi-ticket-percent text-white "></i>
                                                            </div>

                                                            <div class="media-body align-self-center">
                                                                <h4 class="text-primary mb-2">02</h4>
                                                                <p>Kupon</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-12">

                                                        <!-- Bildirim Tablosu -->
                                                        <div class="card card-default">
                                                            <div class="card-header justify-content-between mb-1">
                                                                <h2>Son Bildirimler</h2>
                                                                <div>
                                                                    <button class="text-black-50 mr-2 font-size-20"><i
                                                                            class="mdi mdi-cached"></i></button>
                                                                    <div
                                                                        class="dropdown show d-inline-block widget-dropdown">
                                                                        <a class="dropdown-toggle icon-burger-mini"
                                                                            href="#" role="button"
                                                                            id="dropdown-notification"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true" aria-expanded="false"
                                                                            data-display="static"></a>
                                                                        <ul class="dropdown-menu dropdown-menu-right"
                                                                            aria-labelledby="dropdown-notification">
                                                                            <li class="dropdown-item"><a
                                                                                    href="#">Eylem</a></li>
                                                                            <li class="dropdown-item"><a
                                                                                    href="#">Başka bir eylem</a></li>
                                                                            <li class="dropdown-item"><a
                                                                                    href="#">Burada başka bir şey</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="card-body compact-notifications" data-simplebar
                                                                style="height: 434px;">
                                                                <div
                                                                    class="media pb-3 align-items-center justify-content-between">
                                                                    <div
                                                                        class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                                                                        <i
                                                                            class="mdi mdi-cart-outline font-size-20"></i>
                                                                    </div>
                                                                    <div class="media-body pr-3 ">
                                                                        <a class="mt-0 mb-1 font-size-15 text-dark"
                                                                            href="#">Yeni Sipariş</a>
                                                                        <p>Selena yeni bir sipariş verdi</p>
                                                                    </div>
                                                                    <span class=" font-size-12 d-inline-block"><i
                                                                            class="mdi mdi-clock-outline"></i> 10
                                                                        AM</span>
                                                                </div>

                                                                <div
                                                                    class="media py-3 align-items-center justify-content-between">
                                                                    <div
                                                                        class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                                                                        <i
                                                                            class="mdi mdi-email-outline font-size-20"></i>
                                                                    </div>
                                                                    <div class="media-body pr-3">
                                                                        <a class="mt-0 mb-1 font-size-15 text-dark"
                                                                            href="#">Yeni Sorgulama</a>
                                                                        <p>Phileine yeni bir sipariş verdi</p>
                                                                    </div>
                                                                    <span class=" font-size-12 d-inline-block"><i
                                                                            class="mdi mdi-clock-outline"></i> 9
                                                                        AM</span>
                                                                </div>


                                                                <div
                                                                    class="media py-3 align-items-center justify-content-between">
                                                                    <div
                                                                        class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                                                                        <i
                                                                            class="mdi mdi-stack-exchange font-size-20"></i>
                                                                    </div>
                                                                    <div class="media-body pr-3">
                                                                        <a class="mt-0 mb-1 font-size-15 text-dark"
                                                                            href="#">Destek Bileti</a>
                                                                        <p>Emma yeni bir sipariş verdi</p>
                                                                    </div>
                                                                    <span class=" font-size-12 d-inline-block"><i
                                                                            class="mdi mdi-clock-outline"></i> 10
                                                                        AM</span>
                                                                </div>

                                                                <div
                                                                    class="media py-3 align-items-center justify-content-between">
                                                                    <div
                                                                        class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                                                                        <i
                                                                            class="mdi mdi-cart-outline font-size-20"></i>
                                                                    </div>
                                                                    <div class="media-body pr-3">
                                                                        <a class="mt-0 mb-1 font-size-15 text-dark"
                                                                            href="#">Yeni Sipariş</a>
                                                                        <p>Ryan yeni bir sipariş verdi</p>
                                                                    </div>
                                                                    <span class=" font-size-12 d-inline-block"><i
                                                                            class="mdi mdi-clock-outline"></i> 10
                                                                        AM</span>
                                                                </div>

                                                                <div
                                                                    class="media py-3 align-items-center justify-content-between">
                                                                    <div
                                                                        class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
                                                                        <i
                                                                            class="mdi mdi-calendar-blank font-size-20"></i>
                                                                    </div>
                                                                    <div class="media-body pr-3">
                                                                        <a class="mt-0 mb-1 font-size-15 text-dark"
                                                                            href="">Şirket Toplantısı</a>
                                                                        <p>Phileine yeni bir sipariş verdi</p>
                                                                    </div>
                                                                    <span class=" font-size-12 d-inline-block"><i
                                                                            class="mdi mdi-clock-outline"></i> 10
                                                                        AM</span>
                                                                </div>

                                                                <div
                                                                    class="media py-3 align-items-center justify-content-between">
                                                                    <div
                                                                        class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                                                                        <i
                                                                            class="mdi mdi-stack-exchange font-size-20"></i>
                                                                    </div>
                                                                    <div class="media-body pr-3">
                                                                        <a class="mt-0 mb-1 font-size-15 text-dark"
                                                                            href="#">Destek Bileti</a>
                                                                        <p>Emma yeni bir sipariş verdi</p>
                                                                    </div>
                                                                    <span class=" font-size-12 d-inline-block"><i
                                                                            class="mdi mdi-clock-outline"></i> 10
                                                                        AM</span>
                                                                </div>

                                                                <div
                                                                    class="media py-3 align-items-center justify-content-between">
                                                                    <div
                                                                        class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                                                                        <i
                                                                            class="mdi mdi-email-outline font-size-20"></i>
                                                                    </div>
                                                                    <div class="media-body pr-3">
                                                                        <a class="mt-0 mb-1 font-size-15 text-dark"
                                                                            href="#">Yeni Sorgulama</a>
                                                                        <p>Phileine yeni bir sipariş verdi</p>
                                                                    </div>
                                                                    <span class=" font-size-12 d-inline-block"><i
                                                                            class="mdi mdi-clock-outline"></i> 9
                                                                        AM</span>
                                                                </div>

                                                            </div>
                                                            <div class="mt-3"></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="settings" role="tabpanel"
                                            aria-labelledby="settings-tab">
                                            <div class="tab-pane-content mt-5">
                                                <form>
                                                    <div class="form-group row mb-6">
                                                        <label for="coverImage"
                                                            class="col-sm-4 col-lg-2 col-form-label">Kullanıcı Resmi</label>
                                                        <div class="col-sm-8 col-lg-10">
                                                            <div class="custom-file mb-1">
                                                                <input type="file" class="custom-file-input"
                                                                    id="coverImage" required>
                                                                <label class="custom-file-label" for="coverImage">Dosya seç...</label>
                                                                <div class="invalid-feedback">Geçersiz dosya seçimi örneği</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-2">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="firstName">Ad</label>
                                                                <input type="text" class="form-control" id="firstName"
                                                                    value="Ad">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="lastName">Soyad</label>
                                                                <input type="text" class="form-control" id="lastName"
                                                                    value="Soyad">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <label for="userName">Kullanıcı Adı</label>
                                                        <input type="text" class="form-control" id="userName"
                                                            value="Kullanıcı Adı">
                                                        <span class="d-block mt-1">Accusamus nobis at omnis consequuntur
                                                            culpa tempore saepe animi.</span>
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" id="email"
                                                            value="ekka.example@gmail.com">
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <label for="oldPassword">Eski Şifre</label>
                                                        <input type="password" class="form-control" id="oldPassword">
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <label for="newPassword">Yeni Şifre</label>
                                                        <input type="password" class="form-control" id="newPassword">
                                                    </div>

                                                    <div class="form-group mb-4">
                                                        <label for="conPassword">Şifreyi Onayla</label>
                                                        <input type="password" class="form-control" id="conPassword">
                                                    </div>

                                                    <div class="d-flex justify-content-end mt-5">
                                                        <button type="submit"
                                                            class="btn btn-primary mb-2 btn-pill">Profili Güncelle</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- İçeriğin Sonu -->
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
