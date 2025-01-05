<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Course With Sidebar - Online Courses & Education Bootstrap5 Template</title>
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

<body class="rbt-header-sticky">
    @include('frontend.components.header.headernew')

    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
        <div class="rbt-banner-content">
            <!-- Start Banner Content Top  -->
            <div class="rbt-banner-content-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Start Breadcrumb Area  -->
                            <ul class="page-list">
                                <li class="rbt-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li>
                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                </li>
                                <li class="rbt-breadcrumb-item active">All Courses</li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div class=" title-wrapper">
                                <h1 class="title mb--0">Tüm Maç Analizleri</h1>
                                <a href="#" class="rbt-badge-2">
                                    <div class="image">🎉</div> 50 Analiz
                                </a>
                            </div>

                            <p class="description"> En Profesyonel Analizcini Bul </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Content Top  -->
            <!-- Start Course Top  -->
            <div class="rbt-course-top-wrapper mt--40">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5 col-md-12">
                            <div class="rbt-sorting-list d-flex flex-wrap align-items-center">
                                <div class="rbt-short-item switch-layout-container">
                                    <ul class="course-switch-layout">
                                        <li class="course-switch-item"><button class="rbt-grid-view active" title="Grid Layout"><i class="feather-grid"></i> <span class="text">Grid</span></button></li>
                                        <li class="course-switch-item"><button class="rbt-list-view" title="List Layout"><i class="feather-list"></i> <span class="text">Liste</span></button></li>
                                    </ul>
                                </div>
                                <div class="rbt-short-item">
                                    <span class="course-index">Showing 1-9 of 19 results</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="rbt-sorting-list d-flex flex-wrap align-items-center justify-content-start justify-content-lg-end">
                                <div class="rbt-short-item">
                                    <div class="filter-select">
                                        <span class="select-label d-block">Listele</span>
                                        <div class="filter-select rbt-modern-select search-by-category">
                                            <select data-size="7">
                                                <option>Varsayılan</option>
                                                <option>En Son Analizler</option>
                                                <option>Popüler</option>
                                                <option>Trend</option>
                                                <option>Fiyat: Düşükten Yüksek</option>
                                                <option>Fiyat: Yüksekten Düşük</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Course Top  -->
        </div>
    </div>

    <!-- Start Card Style -->
    <div class="rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row row--30 gy-5">
                <div class="col-lg-3 order-2 order-lg-1">
                    <aside class="rbt-sidebar-widget-wrapper">

                        <!-- Start Widget Area  -->
                        <div class="rbt-single-widget rbt-widget-search">
                            <div class="inner">
                                <form action="#" class="rbt-search-style-1">
                                    <input type="text" placeholder="Analiz Ara">
                                    <button class="search-btn"><i class="feather-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- End Widget Area  -->

                        <!-- Start Widget Area  -->
                        <div class="rbt-single-widget rbt-widget-categories has-show-more">
                            <div class="inner">
                                <h4 class="rbt-widget-title">Kategoriler</h4>
                                <ul class="rbt-sidebar-list-wrapper categories-list-check has-show-more-inner-content">
                                    <li class="rbt-check-group">
                                        <input id="cat-list-1" type="checkbox" name="cat-list-1">
                                        <label for="cat-list-1">Art &amp; Humanities <span class="rbt-lable count">15</span></label>
                                    </li>
                                   
                                </ul>
                            </div>
                            <div class="rbt-show-more-btn">Show More</div>
                        </div>
                        <!-- End Widget Area  -->

                        <!-- Start Widget Area  -->
                        <div class="rbt-single-widget rbt-widget-rating">
                            <div class="inner">
                                <h4 class="rbt-widget-title">Puanlama</h4>
                                <ul class="rbt-sidebar-list-wrapper rating-list-check">
                                    <li class="rbt-check-group">
                                        <input id="cat-radio-1" type="radio" name="rbt-radio">
                                        <label for="cat-radio-1">
                                            <span class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                                            <span class="rbt-lable count">5</span>
                                        </label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="cat-radio-2" type="radio" name="rbt-radio">
                                        <label for="cat-radio-2">
                                            <span class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="off fas fa-star"></i>
                        </span>
                                            <span class="rbt-lable count">4</span>
                                        </label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="cat-radio-3" type="radio" name="rbt-radio">
                                        <label for="cat-radio-3">
                                            <span class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="off fas fa-star"></i>
                            <i class="off fas fa-star"></i>
                        </span>
                                            <span class="rbt-lable count">3</span>
                                        </label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="cat-radio-4" type="radio" name="rbt-radio">
                                        <label for="cat-radio-4">
                                            <span class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="off fas fa-star"></i>
                            <i class="off fas fa-star"></i>
                            <i class="off fas fa-star"></i>
                        </span>
                                            <span class="rbt-lable count">2</span>
                                        </label>
                                    </li>

                                    <li class="rbt-check-group">
                                        <input id="cat-radio-5" type="radio" name="rbt-radio">
                                        <label for="cat-radio-5">
                                            <span class="rating">
                            <i class="fas fa-star"></i>
                            <i class="off fas fa-star"></i>
                            <i class="off fas fa-star"></i>
                            <i class="off fas fa-star"></i>
                            <i class="off fas fa-star"></i>
                        </span>
                                            <span class="rbt-lable count">1</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget Area  -->

                        <!-- Start Widget Area  -->
                        {{-- <div class="rbt-single-widget rbt-widget-instructor">
                            <div class="inner">
                                <h4 class="rbt-widget-title">Instructors</h4>
                                <ul class="rbt-sidebar-list-wrapper instructor-list-check">
                                    <li class="rbt-check-group">
                                        <input id="ins-list-1" type="checkbox" name="ins-list-1">
                                        <label for="ins-list-1">Slaughter <span class="rbt-lable count">15</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="ins-list-2" type="checkbox" name="ins-list-2">
                                        <label for="ins-list-2">Patrick <span class="rbt-lable count">20</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="ins-list-3" type="checkbox" name="ins-list-3">
                                        <label for="ins-list-3">Angela <span class="rbt-lable count">10</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="ins-list-4" type="checkbox" name="ins-list-4">
                                        <label for="ins-list-4">Fatima Asrafy <span class="rbt-lable count">15</span></label>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                        <!-- End Widget Area  -->

                        <!-- Start Widget Area  -->
                        {{-- <div class="rbt-single-widget rbt-widget-prices">
                            <div class="inner">
                                <h4 class="rbt-widget-title">Prices</h4>
                                <ul class="rbt-sidebar-list-wrapper prices-list-check">
                                    <li class="rbt-check-group">
                                        <input id="prices-list-1" type="checkbox" name="prices-list-1">
                                        <label for="prices-list-1">All <span class="rbt-lable count">15</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="prices-list-2" type="checkbox" name="prices-list-2">
                                        <label for="prices-list-2">Free <span class="rbt-lable count">0</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="prices-list-3" type="checkbox" name="prices-list-3">
                                        <label for="prices-list-3">Paid <span class="rbt-lable count">10</span></label>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                        <!-- End Widget Area  -->

                        <!-- Start Widget Area  -->
                        {{-- <div class="rbt-single-widget rbt-widget-lavels">
                            <div class="inner">
                                <h4 class="rbt-widget-title">Levels</h4>
                                <ul class="rbt-sidebar-list-wrapper lavels-list-check">
                                    <li class="rbt-check-group">
                                        <input id="lavels-list-1" type="checkbox" name="lavels-list-1">
                                        <label for="lavels-list-1">All Levels<span class="rbt-lable count">15</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="lavels-list-2" type="checkbox" name="lavels-list-2">
                                        <label for="lavels-list-2">Beginner <span class="rbt-lable count">0</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="lavels-list-3" type="checkbox" name="lavels-list-3">
                                        <label for="lavels-list-3">Intermediate <span class="rbt-lable count">10</span></label>
                                    </li>
                                    <li class="rbt-check-group">
                                        <input id="lavels-list-4" type="checkbox" name="lavels-list-4">
                                        <label for="lavels-list-4">Expert <span class="rbt-lable count">10</span></label>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                        <!-- End Widget Area  -->

                    </aside>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="rbt-course-grid-column">
                        <!-- Start Single Card  -->
                        <div class="course-grid-3">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <a href="course-details.html">
                                        <img src="assets2/images/course/course-online-01.jpg" alt="Card image">
                                        <div class="rbt-badge-3 bg-white">
                                            <span>-40%</span>
                                            <span>Off</span>
                                        </div>
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
                                            <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                    class="feather-bookmark"></i></a>
                                        </div>
                                    </div>

                                    <h4 class="rbt-card-title"><a href="course-details.html">React Front To Back</a>
                                    </h4>

                                    <ul class="rbt-meta">
                                        <li><i class="feather-book"></i>12 Lessons</li>
                                        <li><i class="feather-users"></i>50 Students</li>
                                    </ul>

                                    <p class="rbt-card-text">It is a long established fact that a reader will be
                                        distracted.</p>
                                    <div class="rbt-author-meta mb--10">
                                        <div class="rbt-avater">
                                            <a href="#">
                                                <img src="assets2/images/client/avatar-02.png" alt="Sophia Jaymes">
                                            </a>
                                        </div>
                                        <div class="rbt-author-info">
                                            By <a href="profile.html">Angela</a> In <a href="#">Development</a>
                                        </div>
                                    </div>
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


                    </div>

                    <div class="row">
                        <div class="col-lg-12 mt--60">
                            <nav>
                                <ul class="rbt-pagination">
                                    <li><a href="#" aria-label="Previous"><i class="feather-chevron-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#" aria-label="Next"><i class="feather-chevron-right"></i></a></li>
                                </ul>
                            </nav>
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
