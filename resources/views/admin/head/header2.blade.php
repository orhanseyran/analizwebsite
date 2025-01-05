<style>
    /* Mobil cihazlarda dropdown ikonunu görünür hale getir */
    .navbar-toggler-icon {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23333' class='bi bi-chevron-down' viewBox='0 0 16 16'%3e%3cpath d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    }
    .nav-link {
        color: #cfcde4;
        font-size: 15px; /* İstenilen boyutu ayarlayabilirsiniz */
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
    color: #cfcde4;
    background-color: rgb(228, 183, 117); /* Üzerine gelindiğinde arka plan rengini değiştir */
}
@media (max-width: 991.98px) {
      .offcanvas-backdrop {
        display: none;
      }
      .navbar .navbar-nav .nav-item .dropdown-menu {
        position: static;
        float: none;
        width: auto;
        margin-top: 0;
        background-color: rgba(228, 183, 117, 0.9); /* Arka plan rengini değiştir */
        border: none;
        box-shadow: none;
      }
      .navbar .navbar-nav .nav-item .dropdown-menu .dropdown-item {
        padding: 10px 20px;
        color: #cfcde4; /* Metin rengini değiştir */
      }
      .navbar .navbar-nav .nav-item .dropdown-menu .dropdown-item:hover {
        background-color: rgba(0, 0, 0, 0.1); /* Üzerine gelindiğinde arka plan rengini değiştir */
      }
      .navbar .navbar-nav .nav-item .dropdown-toggle::after {
        display: none;
      }
    }
    .navbar .navbar-nav .nav-item:hover {
      border-radius: 10px;
      color: #cfcde4;
      background-color: rgb(228, 183, 117); /* Üzerine gelindiğinde arka plan rengini değiştir */
    }
.navbar .navbar-nav .nav-item .nav-link:hover {
    color: #ffffff;
}
.nav-link {
    display: block;
    padding: 0.5rem 1rem;
    color: #ffffff;
    text-decoration: none;
    -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
}

.nav-link:hover {

    color: #000000;

}
@media (max-width: 991.98px) {
      .offcanvas-backdrop {
        display: none;
      }
    }

</style>

<div style="background-color: #7367f0"  class="">
    <ul
      class="nav justify-content-end  "
    >
    <li class="nav-item">
      <a class="nav-link active" href="/admin-index" aria-current="page">
        <i class="fas fa-user"></i> Yönetim Paneli
      </a>
    </li>
      <li class="nav-item">
        <a class="nav-link active" href="/" aria-current="page">
          <i class="fas fa-store"></i> Siteme Git
        </a>
      </li>
      <li class="nav-item d-none d-lg-block">
        <a class="nav-link active" href="/admin-product-add" aria-current="page">
          <i class="fas fa-plus"></i> Ürün Ekle
        </a>
      </li>
      <li class="nav-item mx-3 {{ request()->is('admin-user-*') ? 'active' : '' }}">
          <a class="nav-link " href="/dosyayöneticisi" role="button">
              <i class="mdi mdi-file"></i> Dosya Yöneticisi
          </a>
      </li>
      <li class="nav-item d-none d-lg-block">
          <a class="nav-link active" href="/Panel-Duyuru" aria-current="page">
            <i class="mdi mdi-code-tags-check"></i> Panel Duyuru Sistemi
          </a>
       </li>

      <li class="nav-item d-none d-lg-block">
        <a class="nav-link active" href="{{ route("indexdestek") }}" aria-current="page">
          <i class="fas fa-question-circle"></i> Destek
        </a>
      </li>
      <li class="nav-item d-none d-lg-block">
          <a class="nav-link active" href="{{ route("user.logout") }}" aria-current="page">
            <i class="fas fa-user"></i> Çıkış Yap
          </a>
      </li>

    </ul>



  </div>

<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
    <div style="max-width: 90%" class="container-xxl">
        <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
            <a href="/admin-index" class="app-brand-link">

                <img width="50" src="logo2.png" alt="">

            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                <i class="ti ti-x ti-md align-middle"></i>
            </a>
        </div>

        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="ti ti-menu-2 ti-md"></i>
            </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Search -->
                {{-- <li class="nav-item navbar-search-wrapper">
                    <a class="nav-link btn btn-text-secondary btn-icon rounded-pill search-toggler"
                        href="javascript:void(0);">
                        <i class="ti ti-search ti-md"></i>
                    </a>
                </li> --}}
                <!-- /Search -->

                <!-- Language -->
                {{-- <li class="nav-item dropdown-language dropdown">
            <a
              class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
              href="javascript:void(0);"
              data-bs-toggle="dropdown">
              <i class="ti ti-language rounded-circle ti-md"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-language="en" data-text-direction="ltr">
                  <span>English</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-language="fr" data-text-direction="ltr">
                  <span>French</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-language="ar" data-text-direction="rtl">
                  <span>Arabic</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="javascript:void(0);" data-language="de" data-text-direction="ltr">
                  <span>German</span>
                </a>
              </li>
            </ul>
          </li> --}}
                <!--/ Language -->

                <!-- Style Switcher -->
                <li class="nav-item dropdown-style-switcher dropdown">
                    <a class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
                        href="javascript:void(0);" data-bs-toggle="dropdown">
                        <i class="ti ti-md"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                <span class="align-middle"><i class="ti ti-sun ti-md me-3"></i>Light</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                <span class="align-middle"><i class="ti ti-moon-stars ti-md me-3"></i>Dark</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                <span class="align-middle"><i
                                        class="ti ti-device-desktop-analytics ti-md me-3"></i>System</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- / Style Switcher-->

                <!-- Quick links  -->
                {{-- <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown">
                    <a class="nav-link btn btn-text-secondary btn-icon rounded-pill btn-icon dropdown-toggle hide-arrow"
                        href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-expanded="false">
                        <i class="ti ti-layout-grid-add ti-md"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end p-0">
                        <div class="dropdown-menu-header border-bottom">
                            <div class="dropdown-header d-flex align-items-center py-3">
                                <h6 class="mb-0 me-auto">Shortcuts</h6>
                                <a href="javascript:void(0)"
                                    class="btn btn-text-secondary rounded-pill btn-icon dropdown-shortcuts-add"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i
                                        class="ti ti-plus text-heading"></i></a>
                            </div>
                        </div>
                        <div class="dropdown-shortcuts-list scrollable-container">
                            <div class="row row-bordered overflow-visible g-0">
                                <div class="dropdown-shortcuts-item col">
                                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                        <i class="ti ti-calendar ti-26px text-heading"></i>
                                    </span>
                                    <a href="app-calendar.html" class="stretched-link">Calendar</a>
                                    <small>Appointments</small>
                                </div>
                                <div class="dropdown-shortcuts-item col">
                                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                        <i class="ti ti-file-dollar ti-26px text-heading"></i>
                                    </span>
                                    <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                                    <small>Manage Accounts</small>
                                </div>
                            </div>
                            <div class="row row-bordered overflow-visible g-0">
                                <div class="dropdown-shortcuts-item col">
                                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                        <i class="ti ti-user ti-26px text-heading"></i>
                                    </span>
                                    <a href="app-user-list.html" class="stretched-link">User App</a>
                                    <small>Manage Users</small>
                                </div>
                                <div class="dropdown-shortcuts-item col">
                                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                        <i class="ti ti-users ti-26px text-heading"></i>
                                    </span>
                                    <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                                    <small>Permission</small>
                                </div>
                            </div>
                            <div class="row row-bordered overflow-visible g-0">
                                <div class="dropdown-shortcuts-item col">
                                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                        <i class="ti ti-device-desktop-analytics ti-26px text-heading"></i>
                                    </span>
                                    <a href="index.html" class="stretched-link">Dashboard</a>
                                    <small>User Dashboard</small>
                                </div>
                                <div class="dropdown-shortcuts-item col">
                                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                        <i class="ti ti-settings ti-26px text-heading"></i>
                                    </span>
                                    <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                                    <small>Account Settings</small>
                                </div>
                            </div>
                            <div class="row row-bordered overflow-visible g-0">
                                <div class="dropdown-shortcuts-item col">
                                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                        <i class="ti ti-help ti-26px text-heading"></i>
                                    </span>
                                    <a href="pages-faq.html" class="stretched-link">FAQs</a>
                                    <small>FAQs & Articles</small>
                                </div>
                                <div class="dropdown-shortcuts-item col">
                                    <span class="dropdown-shortcuts-icon rounded-circle mb-3">
                                        <i class="ti ti-square ti-26px text-heading"></i>
                                    </span>
                                    <a href="modal-examples.html" class="stretched-link">Modals</a>
                                    <small>Useful Popups</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </li> --}}
                <!-- Quick links -->

                <!-- Notification -->
                {{-- <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                    <a class="nav-link btn btn-text-secondary btn-icon rounded-pill dropdown-toggle hide-arrow"
                        href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                        aria-expanded="false">
                        <span class="position-relative">
                            <i class="ti ti-bell ti-md"></i>
                            <span class="badge rounded-pill bg-danger badge-dot badge-notifications border"></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end p-0">
                        <li class="dropdown-menu-header border-bottom">
                            <div class="dropdown-header d-flex align-items-center py-3">
                                <h6 class="mb-0 me-auto">Notification</h6>
                                <div class="d-flex align-items-center h6 mb-0">
                                    <span class="badge bg-label-primary me-2">8 New</span>
                                    <a href="javascript:void(0)"
                                        class="btn btn-text-secondary rounded-pill btn-icon dropdown-notifications-all"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Mark all as read"><i class="ti ti-mail-opened text-heading"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-notifications-list scrollable-container">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <img src="admin2/assets/img/avatars/1.png" alt
                                                    class="rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="small mb-1">Congratulation Lettie 🎉</h6>
                                            <small class="mb-1 d-block text-body">Won the monthly best seller gold
                                                badge</small>
                                            <small class="text-muted">1h ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                    class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)"
                                                class="dropdown-notifications-archive"><span
                                                    class="ti ti-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 small">Charles Franklin</h6>
                                            <small class="mb-1 d-block text-body">Accepted your connection</small>
                                            <small class="text-muted">12hr ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                    class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)"
                                                class="dropdown-notifications-archive"><span
                                                    class="ti ti-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <img src="admin2/assets/img/avatars/2.png" alt
                                                    class="rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 small">New Message ✉️</h6>
                                            <small class="mb-1 d-block text-body">You have new message from
                                                Natalie</small>
                                            <small class="text-muted">1h ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                    class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)"
                                                class="dropdown-notifications-archive"><span
                                                    class="ti ti-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <span class="avatar-initial rounded-circle bg-label-success"><i
                                                        class="ti ti-shopping-cart"></i></span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 small">Whoo! You have new order 🛒</h6>
                                            <small class="mb-1 d-block text-body">ACME Inc. made new order
                                                $1,154</small>
                                            <small class="text-muted">1 day ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                    class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)"
                                                class="dropdown-notifications-archive"><span
                                                    class="ti ti-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <img src="admin2/assets/img/avatars/9.png" alt
                                                    class="rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 small">Application has been approved 🚀</h6>
                                            <small class="mb-1 d-block text-body">Your ABC project application has
                                                been approved.</small>
                                            <small class="text-muted">2 days ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                    class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)"
                                                class="dropdown-notifications-archive"><span
                                                    class="ti ti-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <span class="avatar-initial rounded-circle bg-label-success"><i
                                                        class="ti ti-chart-pie"></i></span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 small">Monthly report is generated</h6>
                                            <small class="mb-1 d-block text-body">July monthly financial report is
                                                generated </small>
                                            <small class="text-muted">3 days ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                    class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)"
                                                class="dropdown-notifications-archive"><span
                                                    class="ti ti-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <img src="admin2/assets/img/avatars/5.png" alt
                                                    class="rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 small">Send connection request</h6>
                                            <small class="mb-1 d-block text-body">Peter sent you connection
                                                request</small>
                                            <small class="text-muted">4 days ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                    class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)"
                                                class="dropdown-notifications-archive"><span
                                                    class="ti ti-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <img src="admin2/assets/img/avatars/6.png" alt
                                                    class="rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 small">New message from Jane</h6>
                                            <small class="mb-1 d-block text-body">Your have new message from
                                                Jane</small>
                                            <small class="text-muted">5 days ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                    class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)"
                                                class="dropdown-notifications-archive"><span
                                                    class="ti ti-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar">
                                                <span class="avatar-initial rounded-circle bg-label-warning"><i
                                                        class="ti ti-alert-triangle"></i></span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 small">CPU is running high</h6>
                                            <small class="mb-1 d-block text-body">CPU Utilization Percent is currently
                                                at 88.63%,</small>
                                            <small class="text-muted">5 days ago</small>
                                        </div>
                                        <div class="flex-shrink-0 dropdown-notifications-actions">
                                            <a href="javascript:void(0)" class="dropdown-notifications-read"><span
                                                    class="badge badge-dot"></span></a>
                                            <a href="javascript:void(0)"
                                                class="dropdown-notifications-archive"><span
                                                    class="ti ti-x"></span></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="border-top">
                            <div class="d-grid p-4">
                                <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
                                    <small class="align-middle">View all notifications</small>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li> --}}
                <!--/ Notification -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);"
                        data-bs-toggle="dropdown">
                        <div class="avatar avatar-online">
                            <img src="admin2/assets/img/avatars/1.png" alt class="rounded-circle" />
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item mt-0" href="pages-account-settings-account.html">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-2">
                                        <div class="avatar avatar-online">
                                            <img src="admin2/assets/img/avatars/1.png" alt class="rounded-circle" />
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                                        <small class="text-muted">{{ auth()->user()->Role }}</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        {{-- <li>
                            <div class="dropdown-divider my-1 mx-n2"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-profile-user.html">
                                <i class="ti ti-user me-3 ti-md"></i><span class="align-middle">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-account-settings-account.html">
                                <i class="ti ti-settings me-3 ti-md"></i><span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-account-settings-billing.html">
                                <span class="d-flex align-items-center align-middle">
                                    <i class="flex-shrink-0 ti ti-file-dollar me-3 ti-md"></i><span
                                        class="flex-grow-1 align-middle">Billing</span>
                                    <span
                                        class="flex-shrink-0 badge bg-danger d-flex align-items-center justify-content-center">4</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider my-1 mx-n2"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-pricing.html">
                                <i class="ti ti-currency-dollar me-3 ti-md"></i><span
                                    class="align-middle">Pricing</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pages-faq.html">
                                <i class="ti ti-question-mark me-3 ti-md"></i><span class="align-middle">FAQ</span>
                            </a>
                        </li> --}}
                        <li>
                            <div class="d-grid px-2 pt-2 pb-1">
                                <a class="btn btn-sm btn-danger d-flex" href="{{ route('user.logout') }}"
                                    target="_blank">
                                    <small class="align-middle">Çıkış Yap</small>
                                    <i class="ti ti-logout ms-2 ti-14px"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!--/ User -->
            </ul>
        </div>

        <!-- Search Small Screens -->
        <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
            <input type="text" class="form-control search-input border-0" placeholder="Search..."
                aria-label="Search..." />
            <i class="ti ti-x search-toggler cursor-pointer"></i>
        </div>
    </div>
</nav>
