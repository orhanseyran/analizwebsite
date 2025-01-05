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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-list-main">
                    <div class="list-blog">
                        @if ($blog->count() == 0)
                        <h6 class="text-center">Haber Listesi Bulunamadı</h6>


                        @else
                        @foreach ($blog as $get )
                        <div class="blog-article-item style-row">
                            <div class="article-thumb">
                                <a href="{{ route("haberdetay", $get->id) }}">
                                    <img class="lazyload" data-src="{{ $get->resim }}" src="{{ $get->resim }}" alt="{{ $get->resim }}">
                                </a>
                            </div>
                            <div class="article-content">
                                <div class="article-label">

                                    <a href="{{ route("haberdetay", $get->id) }}" class="tf-btn btn-sm radius-3 btn-fill animate-hover-btn">{{ $get->kategori == null ? "Kategori Belirlenmemiş" : $get->kategori }}</a>
                                </div>
                                <div class="article-title">
                                    <a href="{{ route("haberdetay", $get->id) }}" class="">{{ $get->baslik }}</a>
                                </div>
                                <div class="desc">
                                    {!! Str::limit($get->icerik, 100) !!}
                                </div>
                                <div class="article-btn">
                                    <a href="{{ route("haberdetay", $get->id) }}" class="tf-btn btn-line fw-6">Haberi Oku<i class="icon icon-arrow1-top-left"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{ $blog->links('pagination::bootstrap-5') }}

                        @endif




                    </div>
                    <aside class="tf-section-sidebar wrap-sidebar-mobile">
                        {{-- <div class="sidebar-item sidebar-categories">
                            <div class="sidebar-title">Blog categories</div>
                            <div class="sidebar-content">
                                <ul>
                                    <li>
                                        <a href="blog-list.html#">Accessories<span>(9)</span></a>
                                    </li>
                                    <li>
                                        <a href="blog-list.html#">Bag<span>(9)</span></a>
                                    </li>
                                    <li>
                                        <a href="blog-list.html#">Cookware & Kitchen<span>(9)</span></a>
                                    </li>
                                    <li>
                                        <a href="blog-list.html#">Decor<span>(9)</span></a>
                                    </li>
                                    <li>
                                        <a href="blog-list.html#">Decorate<span>(9)</span></a>
                                    </li>
                                    <li>
                                        <a href="blog-list.html#">Denim<span>(9)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                        <div class="sidebar-item sidebar-post">

                            @if ($latest->count() == 0)
                            <h6 class="text-center">En Son Yayınlanan Haber Yok</h6>

                            @else
                            <div class="sidebar-title">En Son Haberler</div>
                            <div class="sidebar-content">
                                <ul>
                                    @foreach ($latest as $get)
                                    <li>
                                        <div class="blog-article-item style-sidebar">
                                            <div class="article-thumb">
                                                <a href="blog-detail.html">
                                                    <img src="{{ $get->resim }}" alt="">
                                                </a>
                                            </div>
                                            <div class="article-content">
                                                <div class="article-label">
                                                    <a href="blog-detail.html" class="tf-btn btn-sm radius-3 btn-fill animate-hover-btn">{{ $get->kategori == null ? "Kategori Belirlenmemiş" : $get->kategori }}</a>
                                                </div>
                                                <div class="article-title">
                                                    <a href="blog-detail.html" class="">{{ $get->baslik }}</a>                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                            @endif

                        </div>
                        {{-- <div class="sidebar-item sidebar-tags">
                            <div class="sidebar-title">Blog tags</div>
                            <div class="sidebar-content">
                                <ul class="tags-lists">
                                    <li>
                                        <a href="blog-list.html#" class="tags-item">Bags</a>
                                    </li>
                                    <li>
                                        <a href="blog-list.html#" class="tags-item">Fashion</a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                        {{-- <div class="sidebar-item sidebar-instagram">
                            <div class="sidebar-title">Instagram</div>
                            <div class="sidebar-content">
                                <ul>
                                    <li>
                                        <img src="images/shop/file/img-1.jpg" alt="">
                                    </li>
                                    <li>
                                        <img src="images/shop/file/img-2.jpg" alt="">
                                    </li>
                                    <li>
                                        <img src="images/shop/file/img-3.jpg" alt="">
                                    </li>
                                    <li>
                                        <img src="images/shop/file/img-4.jpg" alt="">
                                    </li>
                                    <li>
                                        <img src="images/shop/file/img-5.jpg" alt="">
                                    </li>
                                    <li>
                                        <img src="images/shop/file/img-6.png" alt="">
                                    </li>

                                </ul>
                            </div>
                        </div> --}}
                    </aside>
                </div>
            </div>
        </div>
    </div>

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
