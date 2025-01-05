<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Student Wishlist - Online Courses & Education Bootstrap5 Template</title>
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
                            <!-- Start Enrole Course  -->
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Wishlist</h4>
                                    </div>
                                    <div class="row g-5">
                                        <!-- Start Single Course  -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="rbt-card variation-01 rbt-hover">
                                                <div class="rbt-card-img">
                                                    <a href="course-details.html">
                                                        <img src="assets2/images/course/course-online-01.jpg" alt="Card image">
                                                    </a>
                                                </div>
                                                <div class="rbt-card-body">
                                                    <div class="rbt-card-top">
                                                        <div class="rbt-review">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="rating-count"> (15 Reviews)</span>
                                                        </div>
                                                        <div class="rbt-bookmark-btn">
                                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                                                        </div>
                                                    </div>
                                                    <h4 class="rbt-card-title"><a href="course-details.html">React Front To Back</a>
                                                    </h4>
                                                    <ul class="rbt-meta">
                                                        <li><i class="feather-book"></i>20 Lessons</li>
                                                        <li><i class="feather-users"></i>40 Students</li>
                                                    </ul>

                                                    <div class="rbt-card-bottom">
                                                        <div class="rbt-price">
                                                            <span class="current-price">$60</span>
                                                            <span class="off-price">$120</span>
                                                        </div>
                                                        <a class="rbt-btn-link" href="course-details.html">Learn
                                                            More<i class="feather-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Course  -->

                                        <!-- Start Single Course  -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="rbt-card variation-01 rbt-hover">
                                                <div class="rbt-card-img">
                                                    <a href="course-details.html">
                                                        <img src="assets2/images/course/course-online-02.jpg" alt="Card image">
                                                    </a>
                                                </div>
                                                <div class="rbt-card-body">
                                                    <div class="rbt-card-top">
                                                        <div class="rbt-review">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="rating-count"> (15 Reviews)</span>
                                                        </div>
                                                        <div class="rbt-bookmark-btn">
                                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                                                        </div>
                                                    </div>
                                                    <h4 class="rbt-card-title"><a href="course-details.html">PHP
                                                            Beginner + Advanced</a>
                                                    </h4>
                                                    <ul class="rbt-meta">
                                                        <li><i class="feather-book"></i>10 Lessons</li>
                                                        <li><i class="feather-users"></i>30 Students</li>
                                                    </ul>

                                                    <div class="rbt-card-bottom">
                                                        <div class="rbt-price">
                                                            <span class="current-price">$20</span>
                                                            <span class="off-price">$43</span>
                                                        </div>
                                                        <a class="rbt-btn-link" href="course-details.html">Learn
                                                            More<i class="feather-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Course  -->

                                        <!-- Start Single Course  -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="rbt-card variation-01 rbt-hover">
                                                <div class="rbt-card-img">
                                                    <a href="course-details.html">
                                                        <img src="assets2/images/course/course-online-03.jpg" alt="Card image">
                                                    </a>
                                                </div>
                                                <div class="rbt-card-body">
                                                    <div class="rbt-card-top">
                                                        <div class="rbt-review">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="rating-count"> (4 Reviews)</span>
                                                        </div>
                                                        <div class="rbt-bookmark-btn">
                                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                                                        </div>
                                                    </div>
                                                    <h4 class="rbt-card-title"><a href="course-details.html">Angular Zero to
                                                            Mastery</a>
                                                    </h4>
                                                    <ul class="rbt-meta">
                                                        <li><i class="feather-book"></i>14 Lessons</li>
                                                        <li><i class="feather-users"></i>26 Students</li>
                                                    </ul>

                                                    <div class="rbt-card-bottom">
                                                        <div class="rbt-price">
                                                            <span class="current-price">$23</span>
                                                            <span class="off-price">$45</span>
                                                        </div>
                                                        <a class="rbt-btn-link" href="course-details.html">Learn
                                                            More<i class="feather-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Course  -->

                                        <!-- Start Single Course  -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="rbt-card variation-01 rbt-hover">
                                                <div class="rbt-card-img">
                                                    <a href="course-details.html">
                                                        <img src="assets2/images/course/course-online-04.jpg" alt="Card image">
                                                    </a>
                                                </div>
                                                <div class="rbt-card-body">
                                                    <div class="rbt-card-top">
                                                        <div class="rbt-review">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="rating-count"> (3 Reviews)</span>
                                                        </div>
                                                        <div class="rbt-bookmark-btn">
                                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                                        class="feather-bookmark"></i></a>
                                                        </div>
                                                    </div>
                                                    <h4 class="rbt-card-title"><a href="course-details.html">English Langiage Club</a>
                                                    </h4>
                                                    <ul class="rbt-meta">
                                                        <li><i class="feather-book"></i>20 Lessons</li>
                                                        <li><i class="feather-users"></i>30 Students</li>
                                                    </ul>

                                                    <div class="rbt-card-bottom">
                                                        <div class="rbt-price">
                                                            <span class="current-price">$40</span>
                                                            <span class="off-price">$86</span>
                                                        </div>
                                                        <a class="rbt-btn-link" href="course-details.html">Learn
                                                            More<i class="feather-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Course  -->

                                        <!-- Start Single Course  -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="rbt-card variation-01 rbt-hover">
                                                <div class="rbt-card-img">
                                                    <a href="course-details.html">
                                                        <img src="assets2/images/course/course-online-06.jpg" alt="Card image">
                                                    </a>
                                                </div>
                                                <div class="rbt-card-body">
                                                    <div class="rbt-card-top">
                                                        <div class="rbt-review">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="rating-count"> (3 Reviews)</span>
                                                        </div>
                                                        <div class="rbt-bookmark-btn">
                                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                                        class="feather-bookmark"></i></a>
                                                        </div>
                                                    </div>
                                                    <h4 class="rbt-card-title"><a href="course-details.html">Graphic Courses Club</a>
                                                    </h4>
                                                    <ul class="rbt-meta">
                                                        <li><i class="feather-book"></i>50 Lessons</li>
                                                        <li><i class="feather-users"></i>10 Students</li>
                                                    </ul>

                                                    <div class="rbt-card-bottom">
                                                        <div class="rbt-price">
                                                            <span class="current-price">$40</span>
                                                            <span class="off-price">$86</span>
                                                        </div>
                                                        <a class="rbt-btn-link" href="course-details.html">Learn
                                                            More<i class="feather-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Course  -->

                                        <!-- Start Single Course  -->
                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="rbt-card variation-01 rbt-hover">
                                                <div class="rbt-card-img">
                                                    <a href="course-details.html">
                                                        <img src="assets2/images/course/course-online-05.jpg" alt="Card image">
                                                    </a>
                                                </div>
                                                <div class="rbt-card-body">
                                                    <div class="rbt-card-top">
                                                        <div class="rbt-review">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="rating-count"> (3 Reviews)</span>
                                                        </div>
                                                        <div class="rbt-bookmark-btn">
                                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                                        class="feather-bookmark"></i></a>
                                                        </div>
                                                    </div>
                                                    <h4 class="rbt-card-title"><a href="course-details.html">Wed Design Club</a>
                                                    </h4>
                                                    <ul class="rbt-meta">
                                                        <li><i class="feather-book"></i>20 Lessons</li>
                                                        <li><i class="feather-users"></i>30 Students</li>
                                                    </ul>

                                                    <div class="rbt-card-bottom">
                                                        <div class="rbt-price">
                                                            <span class="current-price">$40</span>
                                                            <span class="off-price">$86</span>
                                                        </div>
                                                        <a class="rbt-btn-link" href="course-details.html">Learn
                                                            More<i class="feather-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Course  -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Enrole Course  -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Card Style -->




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
