<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Student Dashboard - Online Courses & Education Bootstrap5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets2/images/favicon.png">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="assets2/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets2/css/vendor/slick.css">
    <link rel="stylesheet" href="assets2/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets2/css/plugins/sal.css">
    <link rel="stylesheet" href="assets2/css/plugins/feather.css">
    <link rel="stylesheet" href="assets2/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="assets2/css/plugins/euclid-circulara.css">
    <link rel="stylesheet" href="assets2/css/plugins/swiper.css">
    <link rel="stylesheet" href="assets2/css/plugins/magnify.css">
    <link rel="stylesheet" href="assets2/css/plugins/odometer.css">
    <link rel="stylesheet" href="assets2/css/plugins/animation.css">
    <link rel="stylesheet" href="assets2/css/plugins/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets2/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets2/css/plugins/magnigy-popup.min.css">
    <link rel="stylesheet" href="assets2/css/plugins/plyr.css">
    <link rel="stylesheet" href="assets2/css/style.css">
</head>

<body>
    <!-- Start Header Area -->
    @include('frontend.components.header.headernew')

    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
    </div>
    <!-- Start Card Style -->
    <div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Dashboard Top  -->

                        @include('frontend.Müşteri.head.dashboard-content')


                    <!-- End Dashboard Top  -->

                    <div class="row g-5">
                        @include('frontend.Müşteri.head.sidebar')


                        <div class="col-lg-9">
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb--60">
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Ana Sayfa</h4>
                                    </div>
                                    <div class="row g-5">

                                        <!-- Start Single Card  -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-primary-opacity">
                                                <div class="inner">
                                                    <div class="rbt-round-icon bg-primary-opacity">
                                                        <i class="feather-book-open"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="counter without-icon color-primary">
                                                            <span class="odometer" data-count="30">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">Takip Edilen Kuponlar</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Card  -->

                                        <!-- Start Single Card  -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-secondary-opacity">
                                                <div class="inner">
                                                    <div class="rbt-round-icon bg-secondary-opacity">
                                                        <i class="feather-monitor"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="counter without-icon color-secondary">
                                                            <span class="odometer" data-count="10">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">Aktif Kuponlar</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Card  -->

                                        <!-- Start Single Card  -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-violet-opacity">
                                                <div class="inner">
                                                    <div class="rbt-round-icon bg-violet-opacity">
                                                        <i class="feather-award"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="counter without-icon color-violet">
                                                            <span class="odometer" data-count="7">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">Tamamlanan Kuponlar</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Card  -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- Start Footer aera -->

    @include('frontend.components.footer.footernew')

    <!-- End Footer aera -->
    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="assets2/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets2/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets2/js/vendor/bootstrap.min.js"></script>
    <!-- sal.js -->
    <script src="assets2/js/vendor/sal.js"></script>
    <script src="assets2/js/vendor/swiper.js"></script>
    <script src="assets2/js/vendor/magnify.min.js"></script>
    <script src="assets2/js/vendor/jquery-appear.js"></script>
    <script src="assets2/js/vendor/odometer.js"></script>
    <script src="assets2/js/vendor/backtotop.js"></script>
    <script src="assets2/js/vendor/isotop.js"></script>
    <script src="assets2/js/vendor/imageloaded.js"></script>

    <script src="assets2/js/vendor/wow.js"></script>
    <script src="assets2/js/vendor/waypoint.min.js"></script>
    <script src="assets2/js/vendor/easypie.js"></script>
    <script src="assets2/js/vendor/text-type.js"></script>
    <script src="assets2/js/vendor/jquery-one-page-nav.js"></script>
    <script src="assets2/js/vendor/bootstrap-select.min.js"></script>
    <script src="assets2/js/vendor/jquery-ui.js"></script>
    <script src="assets2/js/vendor/magnify-popup.min.js"></script>
    <script src="assets2/js/vendor/paralax-scroll.js"></script>
    <script src="assets2/js/vendor/paralax.min.js"></script>
    <script src="assets2/js/vendor/countdown.js"></script>
    <script src="assets2/js/vendor/plyr.js"></script>
    <!-- Main JS -->
    <script src="assets2/js/main.js"></script>
</body>

</html>
