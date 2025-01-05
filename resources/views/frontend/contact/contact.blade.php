<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet"type="text/css" href="css/styles.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
</head>

<body class="preload-wrapper" >
    <style>
        p{
            color: black;
        }
        h5{
            color: black;
        }
    </style>
    @include('frontend.components.header.header')

    <section class="flat-spacing-9">
        <div class="container">
            <div class="tf-grid-layout gap-0 lg-col-2">
                <div class="w-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d317859.6089702069!2d-0.075949!3d51.508112!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760349331f38dd%3A0xa8bf49dde1d56467!2sTower%20of%20London!5e0!3m2!1sen!2sus!4v1719221598456!5m2!1sen!2sus" width="100%" height="894" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="tf-content-left has-mt">
                    <div class="sticky-top">
                        <h5 class="mb_20">İletişim Bilgilerimiz</h5>
                        <div class="mb_20">
                            <p class="mb_15"><strong>Adres</strong></p>
                            <p>66 Mott St, New York, New York, Zip Code: 10006, AS</p>
                        </div>
                        <div class="mb_20">
                            <p class="mb_15"><strong>Telefon</strong></p>
                            <p>(623) 934-2400</p>
                        </div>
                        <div class="mb_20">
                            <p class="mb_15"><strong>Email</strong></p>
                            <p>EComposer@example.com</p>
                        </div>

                        <div>
                            <ul class="tf-social-icon d-flex gap-20 style-default">
                                <li><a href="contact-2.html#" class="box-icon link round social-facebook border-line-black"><i class="icon fs-14 icon-fb"></i></a></li>
                                <li><a href="contact-2.html#" class="box-icon link round social-twiter border-line-black"><i class="icon fs-12 icon-Icon-x"></i></a></li>
                                <li><a href="contact-2.html#" class="box-icon link round social-instagram border-line-black"><i class="icon fs-14 icon-instagram"></i></a></li>
                                <li><a href="contact-2.html#" class="box-icon link round social-tiktok border-line-black"><i class="icon fs-14 icon-tiktok"></i></a></li>
                                <li><a href="contact-2.html#" class="box-icon link round social-pinterest border-line-black"><i class="icon fs-14 icon-pinterest-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /map -->
    <!-- form -->
    <section class="bg_grey-7 flat-spacing-9">
        <div class="container">
            <div class="flat-title">
                <span class="title">Bize Soru Sor</span>
                <p class="sub-title text_black-2">İstek Ve Şikayetleriniz</p>
            </div>
            <div>
                <form class="mw-705 mx-auto text-center form-contact" id="contactform" action="" method="post">
                    <div class="d-flex gap-15 mb_15">
                        <fieldset class="w-100">
                            <input type="text" name="name" id="name" required placeholder="Name *"/>
                        </fieldset>
                        <fieldset class="w-100">
                            <input type="email" name="email" id="email" required placeholder="Email *"/>
                        </fieldset>
                    </div>
                    <div class="mb_15">
                        <textarea placeholder="Mesajınız" name="message" id="message" required cols="30" rows="10"></textarea>
                    </div>
                    <div class="send-wrap">
                        <button type="submit" class="tf-btn radius-3 btn-fill animate-hover-btn justify-content-center">Gönder</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    @include('frontend.components.footer.footer')

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/carousel.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/count-down.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/multiple-modal.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>
