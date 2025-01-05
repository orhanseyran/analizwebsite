<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Student Reviews - Online Courses & Education Bootstrap5 Template</title>
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
                                        <h4 class="rbt-title-style-3">Reviews</h4>
                                    </div>

                                    <div class="rbt-dashboard-table table-responsive mobile-table-750">
                                        <table class="rbt-table table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>Course</th>
                                                    <th>Feedback</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        <span class="b3"><a href="#">Speaking Korean for Beginners</a></span>
                                                    </th>
                                                    <td>
                                                        <div class="rbt-review">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="rating-count"> (9 Reviews)</span>
                                                        </div>
                                                        <p class="b2">Good</p>
                                                    </td>
                                                    <td>
                                                        <div class="rbt-button-group justify-content-end">
                                                            <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="#" title="Edit"><i class="feather-edit pl--0"></i></a>
                                                            <a class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger" href="#" title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <span class="b3"><a href="#">Introduction to Calculus</a></span>
                                                    </th>
                                                    <td>
                                                        <div class="rbt-review">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="rating-count"> (9 Reviews)</span>
                                                        </div>
                                                        <p class="b2">Good</p>
                                                    </td>
                                                    <td>
                                                        <div class="rbt-button-group justify-content-end">
                                                            <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="#" title="Edit"><i class="feather-edit pl--0"></i></a>
                                                            <a class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger" href="#" title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <span class="b3"><a href="#">How to Write Your First Novel</a></span>
                                                    </th>
                                                    <td>
                                                        <div class="rbt-review">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="rating-count"> (9 Reviews)</span>
                                                        </div>
                                                        <p class="b2">Good</p>
                                                    </td>
                                                    <td>
                                                        <div class="rbt-button-group justify-content-end">
                                                            <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="#" title="Edit"><i class="feather-edit pl--0"></i></a>
                                                            <a class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger" href="#" title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <span class="b3"><a href="#">Speaking Korean for Beginners</a></span>
                                                    </th>
                                                    <td>
                                                        <div class="rbt-review">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="rating-count"> (9 Reviews)</span>
                                                        </div>
                                                        <p class="b2">Good</p>
                                                    </td>
                                                    <td>
                                                        <div class="rbt-button-group justify-content-end">
                                                            <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="#" title="Edit"><i class="feather-edit pl--0"></i></a>
                                                            <a class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger" href="#" title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <span class="b3"><a href="#">How to Write Your First Novel</a></span>
                                                    </th>
                                                    <td>
                                                        <div class="rbt-review">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="rating-count"> (9 Reviews)</span>
                                                        </div>
                                                        <p class="b2">Good</p>
                                                    </td>
                                                    <td>
                                                        <div class="rbt-button-group justify-content-end">
                                                            <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="#" title="Edit"><i class="feather-edit pl--0"></i></a>
                                                            <a class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger" href="#" title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <span class="b3"><a href="#">Speaking Korean for Beginners</a></span>
                                                    </th>
                                                    <td>
                                                        <div class="rbt-review">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="rating-count"> (9 Reviews)</span>
                                                        </div>
                                                        <p class="b2">Good</p>
                                                    </td>
                                                    <td>
                                                        <div class="rbt-button-group justify-content-end">
                                                            <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="#" title="Edit"><i class="feather-edit pl--0"></i></a>
                                                            <a class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger" href="#" title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <span class="b3"><a href="#">Speaking Korean for Beginners</a></span>
                                                    </th>
                                                    <td>
                                                        <div class="rbt-review">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </div>
                                                            <span class="rating-count"> (9 Reviews)</span>
                                                        </div>
                                                        <p class="b2">Good</p>
                                                    </td>
                                                    <td>
                                                        <div class="rbt-button-group justify-content-end">
                                                            <a class="rbt-btn btn-xs bg-primary-opacity radius-round" href="#" title="Edit"><i class="feather-edit pl--0"></i></a>
                                                            <a class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger" href="#" title="Delete"><i class="feather-trash-2 pl--0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>

                                        </table>
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
