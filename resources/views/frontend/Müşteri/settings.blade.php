<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Student Settings - Online Courses & Education Bootstrap5 Template</title>
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

    <!-- End Side Vav -->
    <a class="close_side_menu" href="javascript:void(0);"></a>
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
                            <!-- Start Instructor Profile  -->
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                                <div class="content">

                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Ayarlar</h4>
                                    </div>

                                    <div class="advance-tab-button mb--30">
                                        <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="settinsTab-4" role="tablist">
                                            <li role="presentation">
                                                <a href="#" class="tab-button active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="true">
                                                    <span class="title">Profil</span>
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#" class="tab-button" id="password-tab" data-bs-toggle="tab" data-bs-target="#password" role="tab" aria-controls="password" aria-selected="false">
                                                    <span class="title">Şifre</span>
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#" class="tab-button" id="social-tab" data-bs-toggle="tab" data-bs-target="#social" role="tab" aria-controls="social" aria-selected="false">
                                                    <span class="title">Sosyal Medya</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="rbt-dashboard-content-wrapper">

                                                <!-- Cover Photo with background image -->
                                                <div
                                                    class="tutor-bg-photo bg_image bg_image--23 height-245"
                                                    id="cover-photo"
                                                    style="background-image: url('assets2/images/team/cover.jpg');
                                                           background-size: cover;
                                                           background-position: center;"
                                                >
                                                </div>

                                                <!-- Start Tutor Information -->
                                                <div class="rbt-tutor-information">
                                                    <div class="rbt-tutor-information-left">
                                                        <!-- Avatar Thumbnail (Profile Photo) -->
                                                        <div class="thumbnail rbt-avatars size-lg position-relative">
                                           <!-- This is where the uploaded image will appear after preview -->
                <img
                id="preview-image"
                src="assets2/images/team/avatar-2.jpg"
                alt="Instructor"
                style="object-fit: cover;"
            />

            <!-- Hidden file input triggered by the button -->
            <input
                type="file"
                id="upload-photo"
                accept="image/*"
                onchange="previewImage(event)"
                style="display: none;"
            />
            <div class="rbt-edit-photo-inner">
                <label
                    class="rbt-edit-photo"
                    title="Upload Photo"
                    for="upload-photo"
                    style="cursor: pointer;"
                >
                    <i class="feather-camera"></i>
                </label>
            </div>
                                                        </div>
                                                    </div>

                                                    <div class="rbt-tutor-information-right">
                                                        <div class="tutor-btn">
                                                            <!-- Hidden file input for cover photo -->
                                                            <input
                                                                type="file"
                                                                id="cover-photo-input"
                                                                style="display: none;"
                                                                accept="image/*"
                                                                onchange="previewCoverPhoto(event)"
                                                            />

                                                            <!-- Use a label to trigger the file input -->
                                                            <label
                                                                class="rbt-btn btn-sm btn-border color-white radius-round-10"
                                                                for="cover-photo-input"
                                                                style="cursor: pointer;"
                                                            >
                                                                Edit Cover Photo
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Tutor Information -->
                                            </div>
                                            <!-- End Wrapper -->

                                            <!-- Script to preview the new cover image immediately -->
                                            <script>
                                                function previewCoverPhoto(event) {
                                                    const file = event.target.files[0];
                                                    if (!file) return; // No file selected, do nothing.

                                                    const coverPhotoDiv = document.getElementById('cover-photo');
                                                    // Use URL.createObjectURL to generate a temporary URL for preview
                                                    coverPhotoDiv.style.backgroundImage = `url('${URL.createObjectURL(file)}')`;
                                                }
                                                function previewImage(event) {
                                                    const preview = document.getElementById('preview-image');
                                                    preview.src = URL.createObjectURL(event.target.files[0]);
                                                }
                                            </script>
                                            <!-- Start Profile Row  -->
                                            <form action="#" class="rbt-profile-row rbt-default-form row row--15">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="firstname">Ad</label>
                                                        <input id="firstname" type="text" value="John">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="lastname">Soyad</label>
                                                        <input id="lastname" type="text" value="Due">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="username">Kullanıcı Adı</label>
                                                        <input id="username" type="text" value="johndue">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="phonenumber">Telefon Numarası</label>
                                                        <input id="phonenumber" type="tel" value="+1-202-555-0174">
                                                    </div>
                                                </div>
                                                {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="skill">Skill/Occupation</label>
                                                        <input id="skill" type="text" value="Full Stack Developer">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="filter-select rbt-modern-select">
                                                        <label for="displayname" class="">Display name publicly as</label>
                                                        <select id="displayname" class="w-100">
                                                            <option>Emily Hannah</option>
                                                            <option>John</option>
                                                            <option>Due</option>
                                                            <option>Due John</option>
                                                            <option>johndue</option>
                                                        </select>
                                                    </div>
                                                </div> --}}
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="bio">Bio</label>
                                                        <textarea id="bio" cols="20" rows="5">I'm the Front-End Developer for #Rainbow IT in Bangladesh, OR. I have serious passion for UI effects, animations and creating intuitive, dynamic user experiences.</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt--20">
                                                    <div class="rbt-form-group">
                                                        <a class="rbt-btn btn-gradient" href="#">Update Info</a>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- End Profile Row  -->
                                        </div>

                                        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                                            <!-- Start Profile Row  -->
                                            <form action="#" class="rbt-profile-row rbt-default-form row row--15">
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="currentpassword">Current Password</label>
                                                        <input id="currentpassword" type="password" placeholder="Current Password">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="newpassword">New Password</label>
                                                        <input id="newpassword" type="password" placeholder="New Password">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="retypenewpassword">Re-type New Password</label>
                                                        <input id="retypenewpassword" type="password" placeholder="Re-type New Password">
                                                    </div>
                                                </div>
                                                <div class="col-12 mt--10">
                                                    <div class="rbt-form-group">
                                                        <a class="rbt-btn btn-gradient" href="#">Update Password</a>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- End Profile Row  -->
                                        </div>

                                        <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                                            <!-- Start Profile Row  -->
                                            <form action="#" class="rbt-profile-row rbt-default-form row row--15">
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="facebook"><i class="feather-facebook"></i> Facebook</label>
                                                        <input id="facebook" type="text" placeholder="https://facebook.com/">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="twitter"><i class="feather-twitter"></i> Twitter</label>
                                                        <input id="twitter" type="text" placeholder="https://twitter.com/">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="linkedin"><i class="feather-linkedin"></i> Linkedin</label>
                                                        <input id="linkedin" type="text" placeholder="https://linkedin.com/">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="website"><i class="feather-globe"></i> Website</label>
                                                        <input id="website" type="text" placeholder="https://website.com/">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="github"><i class="feather-github"></i> Github</label>
                                                        <input id="github" type="text" placeholder="https://github.com/">
                                                    </div>
                                                </div>
                                                <div class="col-12 mt--10">
                                                    <div class="rbt-form-group">
                                                        <a class="rbt-btn btn-gradient" href="#">Update Profile</a>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- End Profile Row  -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Instructor Profile  -->

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
