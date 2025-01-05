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


 <!-- blog-detail -->
 <div class="blog-detail">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-detail-main">
                    <div class="blog-detail-main-heading">
                        <ul class="tags-lists justify-content-center">
                            <li>
                                <a class="tags-item">{{$blog->kategori}}</a>
                            </li>

                        </ul>
                        <div class="title">{{$blog->baslik}}</div>

                        {{-- <div class="meta">by <span>admin</span> on <span>Oct 02</span></div> --}}
                        <div class="image">
                            <img class="lazyload" data-src="{{$blog->resim}}" src="{{$blog->resim}}" alt="">
                        </div>
                    </div>

                    {{-- <div class="grid-image">
                        <div>
                            <img class="lazyload" data-src="images/blog/blog-detail-1.jpg" src="images/blog/blog-detail-1.jpg" alt="">
                        </div>
                        <div>
                            <img class="lazyload" data-src="images/blog/blog-detail-2.jpg" src="images/blog/blog-detail-2.jpg" alt="">
                        </div>
                    </div> --}}
                    <div class="desc">
                      {!! $blog->icerik !!}
                    </div>
                    <div class="bot d-flex justify-content-between flex-wrap align-items-center">
                        {{-- <ul class="tags-lists">
                            <li>
                                <a href="blog-detail.html#" class="tags-item"><span>Accessories</span></a>
                            </li>
                        </ul> --}}
                        <div class="d-flex align-items-center gap-20">
                            <p>Share:</p>
                            <ul class="tf-social-icon d-flex style-default">
                                <li><a href="blog-detail.html#" class="box-icon round social-facebook border-line-black"><i class="icon fs-14 icon-fb"></i></a></li>
                                <li><a href="blog-detail.html#" class="box-icon round social-twiter border-line-black"><i class="icon fs-12 icon-Icon-x"></i></a></li>
                                <li><a href="blog-detail.html#" class="box-icon round social-instagram border-line-black"><i class="icon fs-14 icon-instagram"></i></a></li>
                                <li><a href="blog-detail.html#" class="box-icon round social-tiktok border-line-black"><i class="icon fs-14 icon-tiktok"></i></a></li>
                                <li><a href="blog-detail.html#" class="box-icon round social-pinterest border-line-black"><i class="icon fs-14 icon-pinterest-1"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tf-article-navigation">
                        @if ($öncekblog)
                        <div class="item position-relative d-flex w-100 prev">
                            <a href="{{ route("haberdetay",$öncekblog->id) }}" class="icon">
                                <i class="icon-arrow-left"></i>
                            </a>
                            <div class="inner">
                                <a href="{{ route("haberdetay",$öncekblog->id) }}">Önceki</a>
                                <h6>
                                    <a href="{{ route("haberdetay",$öncekblog->id) }}">{{ $öncekblog->baslik }}</a>
                                </h6>
                            </div>
                        </div>
                        @endif
                        @if ($sonrakiblog)
                        <div class="item position-relative d-flex w-100 justify-content-end next">
                            <div class="inner text-end">
                                <a href="{{ route("haberdetay",$sonrakiblog->id) }}">Sonraki</a>
                                <h6>
                                    <a href="{{ route("haberdetay",$sonrakiblog->id) }}">{{ $sonrakiblog->baslik }}</a>
                                </h6>
                            </div>
                            <a href="{{ route("haberdetay",$sonrakiblog->id) }}" class="icon">
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="btn-sidebar-mobile d-flex">
    <button data-bs-toggle="offcanvas" data-bs-target="#sidebarmobile" aria-controls="offcanvasRight"><i class="icon-open"></i></button>
</div>
<!-- /blog-detail -->

<!-- Related Articles -->
{{-- <section class="mb_30">
    <div class="container">
        <div class="flat-title">
            <h5 class="">Related Articles</h5>
        </div>
        <div class="hover-sw-nav view-default hover-sw-5">
            <div class="swiper tf-sw-recent" data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" lazy="true">
                        <div class="blog-article-item">
                            <div class="article-thumb radius-10">
                                <a href="blog-detail.html">
                                    <img class="lazyload" data-src="images/blog/blog-1.jpg" src="images/blog/blog-1.jpg" alt="img-blog">
                                </a>
                                <div class="article-label">
                                    <a href="shop-collection-list.html" class="tf-btn style-2 btn-fill radius-3 animate-hover-btn">Shop collection</a>
                                </div>
                            </div>
                            <div class="article-content">
                                <div class="article-title">
                                    <a href="blog-detail.html" class="">Pop-punk is back in fashion</a>
                                </div>
                                <div class="article-btn">
                                    <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="blog-article-item">
                            <div class="article-thumb radius-10">
                                <a href="blog-detail.html">
                                    <img class="lazyload" data-src="images/blog/blog-2.jpg" src="images/blog/blog-2.jpg" alt="img-blog">
                                </a>
                                <div class="article-label">
                                    <a href="shop-collection-list.html" class="tf-btn style-2 btn-fill radius-3 animate-hover-btn">Shop collection</a>
                                </div>
                            </div>
                            <div class="article-content">
                                <div class="article-title">
                                    <a href="blog-detail.html" class="">The next generation of leather alternatives</a>
                                </div>
                                <div class="article-btn">
                                    <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="blog-article-item">
                            <div class="article-thumb radius-10">
                                <a href="blog-detail.html">
                                    <img class="lazyload" data-src="images/blog/blog-3.jpg" src="images/blog/blog-3.jpg" alt="img-blog">
                                </a>
                                <div class="article-label">
                                    <a href="shop-collection-list.html" class="tf-btn style-2 btn-fill radius-3 animate-hover-btn">Shop collection</a>
                                </div>
                            </div>
                            <div class="article-content">
                                <div class="article-title">
                                    <a href="blog-detail.html" class="">An Exclusive Clothing Collaboration</a>
                                </div>
                                <div class="article-btn">
                                    <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="blog-article-item">
                            <div class="article-thumb radius-10">
                                <a href="blog-detail.html">
                                    <img class="lazyload" data-src="images/blog/blog-4.jpg" src="images/blog/blog-4.jpg" alt="img-blog">
                                </a>
                                <div class="article-label">
                                    <a href="shop-collection-list.html" class="tf-btn style-2 btn-fill radius-3 animate-hover-btn">Shop collection</a>
                                </div>
                            </div>
                            <div class="article-content">
                                <div class="article-title">
                                    <a href="blog-detail.html" class="">The next generation of leather alternatives</a>
                                </div>
                                <div class="article-btn">
                                    <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="blog-article-item">
                            <div class="article-thumb radius-10">
                                <a href="blog-detail.html">
                                    <img class="lazyload" data-src="images/blog/blog-5.jpg" src="images/blog/blog-5.jpg" alt="img-blog">
                                </a>
                                <div class="article-label">
                                    <a href="shop-collection-list.html" class="tf-btn style-2 btn-fill radius-3 animate-hover-btn">Shop collection</a>
                                </div>
                            </div>
                            <div class="article-content">
                                <div class="article-title">
                                    <a href="blog-detail.html" class="">The next generation of leather alternatives</a>
                                </div>
                                <div class="article-btn">
                                    <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="blog-article-item">
                            <div class="article-thumb radius-10">
                                <a href="blog-detail.html">
                                    <img class="lazyload" data-src="images/blog/blog-6.jpg" src="images/blog/blog-6.jpg" alt="img-blog">
                                </a>
                                <div class="article-label">
                                    <a href="shop-collection-list.html" class="tf-btn style-2 btn-fill radius-3 animate-hover-btn">Shop collection</a>
                                </div>
                            </div>
                            <div class="article-content">
                                <div class="article-title">
                                    <a href="blog-detail.html" class="">The next generation of leather alternatives</a>
                                </div>
                                <div class="article-btn">
                                    <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-sw nav-next-slider nav-next-recent box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
            <div class="nav-sw nav-prev-slider nav-prev-recent box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
            <div class="sw-dots d-flex style-2 sw-pagination-recent justify-content-center"></div>
        </div>
    </div>
</section> --}}
<!-- /Related Articles -->


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
