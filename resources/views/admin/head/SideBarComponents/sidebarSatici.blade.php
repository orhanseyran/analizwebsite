<style>
    /* Mobil cihazlarda dropdown ikonunu görünür hale getir */
    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23333' class='bi bi-chevron-down' viewBox='0 0 16 16'%3e%3cpath d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    }
    .nav-link {
        font-size: 17px; /* İstenilen boyutu ayarlayabilirsiniz */
    }
    .dropdown-toggle::after {
    color: rgb(134, 134, 134);
    border-right: 5px solid transparent;
    border-bottom: 0px;
    border-top: 6px solid;
    border-left: 5px solid transparent;
    vertical-align: middle;
}
.navbar .navbar-collapse {

    z-index: 100;
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1;

}
@media (max-width: 991px) {
    .navbar .navbar-collapse {
        background-color: white;
        z-index: 100;
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1;
    }
}
.ec-header-light .navbar {
    background-color: #ffffff;
    height: 70px;
}
.navbar .navbar-nav .nav-item {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    border-radius: 10px;
    transition: background-color 0.3s ease; /* Renk değişimini yumuşaklaştırmak için geçiş efekti */
}

.navbar .navbar-nav .nav-item:hover {
    border-radius: 10px;
    color: #ffffff;
    background-color: rgb(228, 183, 117); /* Üzerine gelindiğinde arka plan rengini değiştir */
}
.navbar .navbar-nav .nav-item .nav-link:hover {
    color: #ffffff;
}

</style>

<div class="container">

</div>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand mt-3 mb-3 my-3" href="{{ route('satici.index') }}"><img width="90" class="mx-5" src="logo.png" alt="logo185dijital"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item mx-3 {{ request()->is('admin-index') ? 'active' : '' }}">
            <a class="nav-link " href="{{ route('satici.index') }}"><i class="mdi mdi-view-dashboard-outline"></i> Kontrol Paneli</a>
          </li>
          {{-- <li class="nav-item dropdown mx-3 {{ request()->is('admin-vendor-*') ? 'active' : '' }}">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-account-group-outline"></i> Satıcılar
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('satici.vendor-card') }}">Satıcı Kılavuzu</a></li>
              <li><a class="dropdown-item" href="{{ route('satici.vendor-list') }}">Satıcı Listesi</a></li>
              <li><a class="dropdown-item" href="{{ route('satici.vendor-profile') }}">Satıcı Profili</a></li>
            </ul>
          </li> --}}

          <li class="nav-item dropdown mx-3 {{ request()->is('admin-vendor-*') ? 'active' : '' }}">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-account-group-outline"></i> Müşteri Soruları
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('satici-siparis-soru') }}">Sipariş Soruları</a></li>
              <li><a class="dropdown-item" href="{{ route('satici-urun-soru') }}">Ürün Soruları</a></li>

            </ul>
          </li>
          <li class="nav-item dropdown mx-3 {{ request()->is('admin-vendor-*') ? 'active' : '' }}">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-fire"></i> Kupon
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('admin.vendor-card') }}">Kuponlarım</a></li>
              <li><a class="dropdown-item" href="{{ route('admin.vendor-list') }}">İndirim Kuponu Oluştur</a></li>
            </ul>
          </li>
          {{-- <li class="nav-item dropdown mx-3 {{ request()->is('admin-user-*') ? 'active' : '' }}">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-account-group"></i> Kullanıcılar
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('satici.user-card') }}">Kullanıcı Kılavuzu</a></li>
              <li><a class="dropdown-item" href="{{ route('satici.user-list') }}">Kullanıcı Listesi</a></li>
              <li><a class="dropdown-item" href="{{ route('satici.user-profile') }}">Kullanıcı Profili</a></li>
            </ul>
          </li> --}}

          {{-- <li class="nav-item dropdown {{ request()->is('admin-user-*') ? 'active' : '' }}">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-account-group"></i> Sipariş Ve Kargo
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('satici.user-card') }}">Kullanıcı Kılavuzu</a></li>
              <li><a class="dropdown-item" href="{{ route('satici.user-list') }}">Kullanıcı Listesi</a></li>
              <li><a class="dropdown-item" href="{{ route('satici.user-profile') }}">Kullanıcı Profili</a></li>
            </ul>
          </li> --}}
          <li class="nav-item dropdown {{ request()->is('admin-user-*') ? 'active' : '' }}">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-account-group"></i> Sipariş Ve Kargo
            </a>

            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('satici.new-order') }}">Siparişler</a></li>
              <li><a class="dropdown-item" href="{{ route('satici.product-list') }}">Ürünler</a></li>
              <li><a class="dropdown-item" href="{{ route('satici.product-add') }}">Ürün Ekle</a></li>


              <li><a class="dropdown-item" href="{{ route('satici.review-list') }}">İncelemeler</a></li>
              <li><a class="dropdown-item" href="{{ route('satici.brand-list') }}">Markalar</a></li>
              {{-- <li><a class="dropdown-item" href="{{ route('satici.cargo-list') }}">Kargo Şirketi Ekle</a></li> --}}
              {{-- <li><a class="dropdown-item" href="{{ route('satici.main-category') }}">Kargo</a></li>
              <li><a class="dropdown-item" href="{{ route('satici.main-category') }}">Kuponlar</a></li> --}}
            </ul>
          </li>
          <li class="nav-item dropdown mx-3 {{ request()->is('admin-user-*') ? 'active' : '' }}">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-briefcase"></i> Finans
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('admin.user-card') }}">Kullanıcı Kılavuzu</a></li>
              <li><a class="dropdown-item" href="{{ route('admin.user-list') }}">Kullanıcı Listesi</a></li>
              <li><a class="dropdown-item" href="{{ route('admin.user-profile') }}">Kullanıcı Profili</a></li>
            </ul>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link " href="{{ route('satici-index.reklam') }}"><i class="mdi mdi-gift"></i> Reklam Yönetimi</a>
          </li>

          {{-- <li class="nav-item {{ request()->is('admin-product-*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('satici.product-add') }}"><i class="mdi mdi-palette-advanced"></i> Ürünler</a>
          </li>

          <li class="nav-item {{ request()->is('admin-review-*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('satici.review-list') }}"><i class="mdi mdi-star-half"></i> İncelemeler</a>
          </li>
          <li class="nav-item {{ request()->is('admin-brand-*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('satici.brand-list') }}"><i class="mdi mdi-tag-faces"></i> Markalar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="mdi mdi-car"></i> Kargo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="mdi mdi-elevation-decline"></i> Kuponlar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="mdi mdi-blogger"></i> Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/"><i class="mdi mdi-web"></i> Web Siteye Dön</a>
          </li> --}}

        </ul>

        <ul class="navbar-nav ms-auto">
            <li class="dropdown user-menu">
              <button class="dropdown-toggle nav-link ec-drop" data-bs-toggle="dropdown" aria-expanded="false">
                  <img width="30" src="assets/img/user/user.png" class="user-image" alt="User Image" />
              </button>
              <ul class="dropdown-menu dropdown-menu-left ec-dropdown-menu">
                  <!-- User image -->
                  <li class="dropdown-header">
                      <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                      <div class="d-inline-block">
                          John Deo <small class="pt-1">john.example@gmail.com</small>
                      </div>
                  </li>
                  <li>
                      <a href="user-profile.html">
                          <i class="mdi mdi-account"></i> My Profile
                      </a>
                  </li>
                  <li>
                      <a href="#">
                          <i class="mdi mdi-email"></i> Message
                      </a>
                  </li>
                  <li>
                      <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                  </li>
                  <li class="left-sidebar-in">
                      <a href="javascript:0"> <i class="mdi mdi-settings-outline"></i> Setting </a>
                  </li>
                  <li class="dropdown-footer">
                      <a href="index.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                  </li>
              </ul>
            </li>
            <li class="dropdown notifications-menu custom-dropdown">
                <button class="dropdown-toggle notify-toggler custom-dropdown-toggler mx-4">
                    <i style="font-size : 28px; color:rgb(134, 134, 134)" class="mdi mdi-bell-outline"></i>
                </button>

                <div class="card card-default dropdown-notify dropdown-menu-right mb-0">
                    <div class="card-header card-header-border-bottom px-3">
                        <h2>Notifications</h2>
                    </div>

                    <div class="card-body px-0 py-0">
                        <ul class="nav nav-tabs nav-style-border p-0 justify-content-between" id="myTab"
                            role="tablist">
                            <li class="nav-item mx-3 my-0 py-0">
                                <a href="#" class="nav-link active pb-3" id="home2-tab"
                                    data-bs-toggle="tab" data-bs-target="#home2" role="tab"
                                    aria-controls="home2" aria-selected="true">All (10)</a>
                            </li>

                            <li class="nav-item mx-3 my-0 py-0">
                                <a href="#" class="nav-link pb-3" id="profile2-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile2" role="tab" aria-controls="profile2"
                                    aria-selected="false">Msgs (5)</a>
                            </li>

                            <li class="nav-item mx-3 my-0 py-0">
                                <a href="#" class="nav-link pb-3" id="contact2-tab" data-bs-toggle="tab"
                                    data-bs-target="#contact2" role="tab" aria-controls="contact2"
                                    aria-selected="false">Others (5)</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent3">
                            <div class="tab-pane fade show active" id="home2" role="tabpanel"
                                aria-labelledby="home2-tab">
                                <ul class="list-unstyled" data-simplebar style="height: 360px">
                                    <li>
                                        <a href="javscript:void(0)"
                                            class="media media-message media-notification">
                                            <div class="position-relative mr-3">
                                                <img class="rounded-circle" src="assets/img/user/u2.jpg"
                                                    alt="Image">
                                                <span class="status away"></span>
                                            </div>
                                            <div class="media-body d-flex justify-content-between">
                                                <div class="message-contents">
                                                    <h4 class="title">Nitin</h4>
                                                    <p class="last-msg">Lorem ipsum dolor sit, amet
                                                        consectetur adipisicing elit. Nam itaque
                                                        doloremque odio, eligendi delectus vitae.</p>

                                                    <span
                                                        class="font-size-12 font-weight-medium text-secondary">
                                                        <i class="mdi mdi-clock-outline"></i> 30 min
                                                        ago...
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>


                                </ul>
                            </div>

                            <div class="tab-pane fade" id="profile2" role="tabpanel"
                                aria-labelledby="profile2-tab">
                                <ul class="list-unstyled" data-simplebar style="height: 360px">
                                    <li>
                                        <a href="javscript:void(0)"
                                            class="media media-message media-notification">
                                            <div class="position-relative mr-3">
                                                <img class="rounded-circle" src="assets/img/user/u6.jpg"
                                                    alt="Image">
                                                <span class="status away"></span>
                                            </div>
                                            <div class="media-body d-flex justify-content-between">
                                                <div class="message-contents">
                                                    <h4 class="title">Hardiko</h4>
                                                    <p class="last-msg">Donec mattis augue a nisl
                                                        consequat, nec imperdiet ex rutrum. Fusce et
                                                        vehicula enim. Sed in enim eu odio vehic.</p>

                                                    <span
                                                        class="font-size-12 font-weight-medium text-secondary">
                                                        <i class="mdi mdi-clock-outline"></i> 1 hrs
                                                        ago...
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>



                                </ul>
                            </div>

                            <div class="tab-pane fade" id="contact2" role="tabpanel"
                                aria-labelledby="contact2-tab">
                                <ul class="list-unstyled" data-simplebar style="height: 360px">
                                    <li>
                                        <a href="javscript:void(0)"
                                            class="media media-message media-notification event-active">

                                            <div
                                                class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
                                                <i class="mdi mdi-calendar-check font-size-20"></i>
                                            </div>

                                            <div class="media-body d-flex justify-content-between">
                                                <div class="message-contents">
                                                    <h4 class="title">Upcomming event added</h4>
                                                    <p class="last-msg font-size-14">03/Jan/2020 (1pm -
                                                        2pm)</p>

                                                    <span
                                                        class="font-size-12 font-weight-medium text-secondary">
                                                        <i class="mdi mdi-clock-outline"></i> 10 min
                                                        ago...
                                                    </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <ul class="dropdown-menu dropdown-menu-right d-none">
                    <li class="dropdown-header">You have 5 notifications</li>
                    <li>
                        <a href="#">
                            <i class="mdi mdi-account-plus"></i> New user registered
                            <span class=" font-size-12 d-inline-block float-right"><i
                                    class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="mdi mdi-account-remove"></i> User deleted
                            <span class=" font-size-12 d-inline-block float-right"><i
                                    class="mdi mdi-clock-outline"></i> 07 AM</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                            <span class=" font-size-12 d-inline-block float-right"><i
                                    class="mdi mdi-clock-outline"></i> 12 PM</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="mdi mdi-account-supervisor"></i> New client
                            <span class=" font-size-12 d-inline-block float-right"><i
                                    class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="mdi mdi-server-network-off"></i> Server overloaded
                            <span class=" font-size-12 d-inline-block float-right"><i
                                    class="mdi mdi-clock-outline"></i> 05 AM</span>
                        </a>
                    </li>
                    <li class="dropdown-footer">
                        <a class="text-center" href="#"> View All </a>
                    </li>
                </ul>
            </li>
            <li class="right-sidebar-in right-sidebar-2-menu">
                <i  style="font-size : 28px; "   class="mdi mdi-settings-outline mdi-spin"></i>
            </li>
          </ul>




      </div>
    </div>
</nav>
