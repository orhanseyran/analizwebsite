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
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @elseif (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>

                            @endif
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb--60">
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Jetonlarım</h4>
                                    </div>
                                    <div class="row g-5">

                                        <!-- Start Single Card  -->

                                        <!-- End Single Card  -->

                                        <!-- Start Single Card  -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-secondary-opacity">
                                                <div class="inner">

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="rbt-round-icon bg-secondary-opacity">
                                                                <i class="feather-dollar-sign"></i>
                                                            </div>
                                                            @if ($tokenget)
                                                            <div class="content">
                                                                <h3 class="counter without-icon color-secondary">
                                                                    <span class="odometer" data-count="{{ $tokenget }}">00</span>
                                                                </h3>
                                                                <span class="rbt-title-style-2 d-block">Jetonlarım</span>
                                                            </div>
                                                            @else
                                                            <div class="content">
                                                                <h3 class="counter without-icon color-secondary">
                                                                    <span class="odometer" data-count="0">00</span>
                                                                </h3>
                                                                <span class="rbt-title-style-2 d-block">Jetonlarım</span>
                                                            </div>
                                                            @endif

                                                        </div>
                                                        <div class="col-md-6">
                                                            <form action="{{ route("addToken") }}" method="POST">
                                                                @csrf
                                                                <style>
                                                             input[type=text], input[type=password], input[type=email], input[type=number], input[type=tel], input[type=date], textarea {
                                                                    font-size: 24px;
                                                                    text-align: center;                                                                        font-weight: 600;
                                                                        height: 50px;
                                                                        line-height: 28px;
                                                                        background: transparent;
                                                                        -webkit-box-shadow: none;
                                                                        box-shadow: none;
                                                                        padding: 0 15px;
                                                                        outline: none;
                                                                        border: var(--border-width) solid var(--color-border);
                                                                        border-radius: var(--radius);
                                                                        color: var(--color-body);
                                                                        box-shadow: var(--shadow-10);
                                                                    }
                                                                </style>
                                                                <div class="mb-3">
                                                                    <label for="" class="form-label">Jeton Ekle</label>
                                                                    <input
                                                                    required
                                                                        type="number"
                                                                        class="form-control"
                                                                        name="token"
                                                                        id=""
                                                                        value="100"
                                                                        min="100"
                                                                        aria-describedby="helpId"
                                                                        placeholder=""
                                                                    />
                                                                    <small id="helpId" class="form-text text-muted">1 Jeton 2 TL Olarak Hesaplanır</small> <br>
                                                                    <small id="helpId" class="form-text text-muted">Minimum 100 Jeton Eklenebilir</small>
                                                                </div>
                                                                <button type="submit" class="rbt-btn btn-sm btn-gradient hover-icon-reverse">
                                                                    Jeton Ekle
                                                                </button>

                                                            </form>
                                                        </div>
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
