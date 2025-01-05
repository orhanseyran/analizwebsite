

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Ecomus - Ultimate HTML</title>
    @vite(['resources/js/app.jsx'])
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- font -->
   @include('frontend.head.css')


</head>
<style>

.swiper {
      width: 100%;
      height: 100%;
      border-radius: 30px;
    }

    .swiper-slide {
        border-radius: 30px;
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
        border-radius: 30px;
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .autoplay-progress {
      position: absolute;
      right: 16px;
      bottom: 16px;
      z-index: 10;
      width: 48px;
      height: 48px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      color: var(--swiper-theme-color);
    }

    .autoplay-progress svg {
      --progress: 0;
      position: absolute;
      left: 0;
      top: 0px;
      z-index: 10;
      width: 100%;
      height: 100%;
      stroke-width: 4px;
      stroke: var(--swiper-theme-color);
      fill: none;
      stroke-dashoffset: calc(125.6px * (1 - var(--progress)));
      stroke-dasharray: 125.6;
      transform: rotate(-90deg);
    }

</style>

<body class="preload-wrapper">

    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>


    <!-- /preload -->
    <div id="wrapper">
        <!-- announcement-bar -->


        <!-- /announcement-bar -->

        <!-- header -->
@include('frontend.components.header.header')


    <!-- <div class="tf-slideshow slider-radius slider-effect-fade position-relative mt-3">
        <div class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1" data-centered="false" data-space="0" data-loop="true" data-auto-play="false" data-delay="2000" data-speed="1000">
            <div class="swiper-wrapper">
                <div class="swiper-slide" lazy="true">
                    <div class="wrap-slider">
                        <img class="lazyload" data-src="images/slider/slide-hp-1.jpg" src="images/slider/slide-hp-1.jpg" alt="hp-slideshow-01">
                        <div class="box-content">
                            <div class="container">
                                <p class="fade-item fade-item-1 subheading fw-7 text_white">İKONİK TASARIM VE MÜKEMMEL AKUSTİK</p>
                                <h2 class="fade-item fade-item-2 fw-6 text_white heading">Ecomus <br>Kablosuz Kulaklıklar</h2>
                                <a href="shop-default.html" class="fade-item fade-item-3 tf-btn btn-light-icon animate-hover-btn btn-xl radius-60"><span>Koleksiyonu Görüntüle</span><i class="icon icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" lazy="true">
                    <div class="wrap-slider row-end">
                        <img class="lazyload" data-src="images/slider/slide-hp-2.jpg" src="images/slider/slide-hp-2.jpg" alt="hp-slideshow-02">
                        <div class="box-content">
                            <div class="container">
                                <p class="fade-item fade-item-1 subheading fw-7 text_white">İKONİK TASARIM VE MÜKEMMEL AKUSTİK</p>
                                <h2 class="fade-item fade-item-2 fw-6 text_white heading">Ses Manzaraları <br>Yeniden Tanımlandı</h2>
                                <a href="shop-default.html" class="fade-item fade-item-3 tf-btn btn-light-icon animate-hover-btn btn-xl radius-60"><span>Koleksiyonu Görüntüle</span><i class="icon icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" lazy="true">
                    <div class="wrap-slider">
                        <img class="lazyload" data-src="images/slider/slide-hp-3.jpg" src="images/slider/slide-hp-3.jpg" alt="hp-slideshow-03">
                        <div class="box-content">
                            <div class="container">
                                <p class="fade-item fade-item-1 subheading fw-7 text_white">İKONİK TASARIM VE MÜKEMMEL AKUSTİK</p>
                                <h2 class="fade-item fade-item-2 fw-6 text_white heading">Kendinizi Sese <br>Daldırın</h2>
                                <a href="shop-default.html" class="fade-item fade-item-3 tf-btn btn-light-icon animate-hover-btn btn-xl radius-60"><span>Koleksiyonu Görüntüle</span><i class="icon icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-pagination">
            <div class="container">
                <div class="sw-dots line-white-pagination sw-pagination-slider justify-content-center"></div>
            </div>
        </div>
    </div> -->
        <!-- /header -->

        <!-- categories -->
        <!-- <section class="flat-spacing-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tf-categories-wrap">
                            <div class="tf-categories-container">
                                <div class="collection-item-circle hover-img">
                                    <a href="today-matches.html" class="collection-image img-style">
                                        <img class="lazyload" data-src="https://via.placeholder.com/150?text=Today+Matches" src="https://via.placeholder.com/150?text=Today+Matches" alt="Today Matches">
                                    </a>
                                    <div class="collection-content text-center">
                                        <a href="today-matches.html" class="link title fw-6">Bugünkü Maçlar</a>
                                    </div>
                                </div>
                                <div class="collection-item-circle hover-img">
                                    <a href="today-matches.html" class="collection-image img-style">
                                        <img class="lazyload" data-src="https://via.placeholder.com/150?text=Today+Matches" src="https://via.placeholder.com/150?text=Today+Matches" alt="Today Matches">
                                    </a>
                                    <div class="collection-content text-center">
                                        <a href="today-matches.html" class="link title fw-6">Bugünkü Maçlar</a>
                                    </div>
                                </div>
                                <div class="collection-item-circle hover-img">
                                    <a href="live-analyses.html" class="collection-image img-style">
                                        <img class="lazyload" data-src="https://via.placeholder.com/150?text=Live+Analyses" src="https://via.placeholder.com/150?text=Live+Analyses" alt="Live Analyses">
                                    </a>
                                    <div class="collection-content text-center">
                                        <a href="live-analyses.html" class="link title fw-6">Canlı Analizler</a>
                                    </div>
                                </div>
                                <div class="collection-item-circle hover-img">
                                    <a href="popular-picks.html" class="collection-image img-style">
                                        <img class="lazyload" data-src="https://via.placeholder.com/150?text=Popular+Picks" src="https://via.placeholder.com/150?text=Popular+Picks" alt="Popular Picks">
                                    </a>
                                    <div class="collection-content text-center">
                                        <a href="popular-picks.html" class="link title fw-6">Popüler Tahminler</a>
                                    </div>
                                </div>
                                <div class="collection-item-circle hover-img">
                                    <a href="league-analyses.html" class="collection-image img-style">
                                        <img class="lazyload" data-src="https://via.placeholder.com/150?text=League+Analyses" src="https://via.placeholder.com/150?text=League+Analyses" alt="League Analyses">
                                    </a>
                                    <div class="collection-content text-center">
                                        <a href="league-analyses.html" class="link title fw-6">Lig Analizleri</a>
                                    </div>
                                </div>
                                <div class="collection-item-circle hover-img">
                                    <a href="banko-kuponlar.html" class="collection-image img-style">
                                        <img class="lazyload" data-src="https://via.placeholder.com/150?text=Banko+Kuponlar" src="https://via.placeholder.com/150?text=Banko+Kuponlar" alt="Banko Kuponlar">
                                    </a>
                                    <div class="collection-content text-center">
                                        <a href="banko-kuponlar.html" class="link title fw-6">Banko Kuponlar</a>
                                    </div>
                                </div>
                                <div class="collection-item-circle hover-img">
                                    <div class="has-saleoff-wrap position-relative">
                                        <a href="special-offers.html" class="collection-image img-style">
                                            <img class="lazyload" data-src="https://via.placeholder.com/150?text=Special+Offers" src="https://via.placeholder.com/150?text=Special+Offers" alt="Special Offers">
                                        </a>
                                        <div class="sale-off fw-5">20% İndirim</div>
                                    </div>
                                    <div class="collection-content text-center">
                                        <a href="special-offers.html" class="link title fw-6">Özel Kampanyalar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-shopall-wrap">
                                <div class="collection-item-circle tf-shopall">
                                    <a href="all-analyses.html" class="collection-image img-style tf-shopall-icon">
                                        <i class="icon icon-arrow1-top-left"></i>
                                    </a>
                                    <div class="collection-content text-center">
                                        <a href="all-analyses.html" class="link title fw-6">Tüm Analizleri Gör</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <style>
            /* Mobil cihazlarda resimleri gizle */
            @media (max-width: 768px) {
                .team-logo {
                    display: none;
                }
            }
        </style>


<div class="container mt-3">
    <div class="row  justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($slider as $get )
                    <div class="swiper-slide"><img style=" height: 500px; " src="{{ $get->slider_resim }}" alt=""></div>

                    @endforeach

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="autoplay-progress">
                  <svg viewBox="0 0 48 48">
                    <circle cx="24" cy="24" r="20"></circle>
                  </svg>
                  <span></span>
                </div>
              </div>

        </div>
        <div class="col-md-4 mt-4 justify-content-center align-items-center">
            @foreach ($blog as $get )
            <div class="col-md-12 justify-content-center align-items-center">

                <div style="width: 370px;  margin-bottom:10px" class="blog-article-item">
                    <div class="article-thumb">
                        <a href="{{ route("haberdetay", $get->id) }}">
                            <img width="300" height="" class="lazyload" data-src="{{ $get->resim }}" src="images/blog/blog-5.jpg" alt="img-blog">
                        </a>
                        <div class="article-label">
                            <a href="{{ route("haberdetay", $get->id) }}" style="background-color: #4E0C6E; color: white; font-weight:900; font-size: 10px;" class="tf-btn btn-sm radius-3 btn-fill animate-hover-btn">{{ $get->baslik }}</a>
                        </div>
                    </div>

                </div>

        </div>

            @endforeach


        </div>
    </div>
</div>
{{-- <div class="col-md-12 text-center">
    <img style="border-radius: 30px; height: 200px;" src="images/collections/reaklam.png" alt="">

</div> --}}
<section class="flat-spacing-20" >
    <div class="container my-4">
        <div class="row">





        </div>
    </div>

    <div class="container my-4">
        <div class="container">

            <div class="row">


                <div style="background-color: #5a3599; color: #fff;   padding: 5px;  border-radius: 30px;" class="col-md-8 ">

                    <h6 style="color: white; font-weight: 800; " class="p-1 text-center" > <i class="fa-solid fa-check"></i>  Maç Analizleri</h6>
                </div>
                <div style="background-color: #5a3599; color: #fff;   padding: 5px; border-radius: 30px " class="mx-2 col-md-3 d-none d-md-block">
                    <h6 style="color: white; font-weight: 800;" class="p-1 text-center">
                        <i class="fa-solid fa-blog"></i> En Son Yayınlanan Haberler
                      </h6>
                </div>


            </div>
        

            <div class="row">
        <div class="col-md-8">
                @livewire('SearchFixture')
            </div>


                <div class="col-md-4">

                    <div class="sidebar-item sidebar-post">

                        <div class="sidebar-title"><h6></h6></div>

                        <div class="sidebar-content">
                            <ul>
                                @foreach ($blog15 as $get )
                                <li>
                                    <div class="blog-article-item style-sidebar mt-3">
                                        <div class="article-thumb">
                                            <a href="{{ route("haberdetay", $get->id) }}">
                                                <img src="{{ $get->resim }}" alt="">
                                            </a>
                                        </div>
                                        <div class="article-content">
                                            <div class="article-label">
                                                <a href="{{ route("haberdetay", $get->id) }}" class="tf-btn btn-sm radius-3 btn-fill animate-hover-btn">{{ $get->kategori }}</a>
                                            </div>
                                            <div class="article-title">
                                                <a href="{{ route("haberdetay", $get->id) }}" class="">{{ $get->baslik }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach


                            </ul>
                        </div>



                    </div>
                    {{-- <div class="position-relative bottom-0 right-0">
                        <img width="400" src="images/collections/dikey.png"  class="mt-3">
                    </div> --}}


                </div>
            </div>







        </div>

        <!-- <h3 class="text-danger">
            Trendyol 1. Lig
            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b4/Flag_of_Turkey.svg" alt="Türk Bayrağı" class="flag">
        </h3> -->

    </div>



</section>


@include('frontend.components.footer.footer')








    <!-- /modal find_size -->
    @include('frontend.head.script')

    <!-- Javascript -->

    <script>
        $(document).ready(function () {
            $('#ligTablosu').DataTable({
                "language": {
                    "decimal": "",
                    "emptyTable": "Tabloda veri yok",
                    "info": "_START_ ile _END_ arasında _TOTAL_ kayıt gösteriliyor",
                    "infoEmpty": "Kayıt yok",
                    "infoFiltered": "(_MAX_ toplam kayıttan filtrelendi)",
                    "thousands": ".",
                    "lengthMenu": "Göster _MENU_ kayıt",
                    "loadingRecords": "Yükleniyor...",
                    "processing": "İşleniyor...",
                    "search": "Ara:",
                    "zeroRecords": "Eşleşen kayıt bulunamadı",
                    "paginate": {
                        "first": "İlk",
                        "last": "Son",
                        "next": "Sonraki",
                        "previous": "Önceki"
                    }
                }
            });
        });
    </script>
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

      <!-- Initialize Swiper -->
      <script>
        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");
        var swiper = new Swiper(".mySwiper", {
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
          },
          on: {
            autoplayTimeLeft(s, time, progress) {
              progressCircle.style.setProperty("--progress", 1 - progress);
              progressContent.textContent = `${Math.ceil(time / 6000)}s`;
            }
          }
        });
      </script>
</body>

</html>
