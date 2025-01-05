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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
    <style>
         /* Görsel Alan */
    section img {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        margin-bottom: 2rem;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    section img:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    /* Başlıklar */
    h1, h2, h5 {
        font-weight: bold;
        color: #343a40;
    }

    h1.display-5 {
        font-size: 2.8rem;
        margin-bottom: 1.5rem;
    }

    h2 {
        font-size: 2.2rem;
        margin-bottom: 1rem;
        text-transform: uppercase;
        position: relative;
    }

    h2::after {
        content: '';
        display: block;
        width: 60px;
        height: 3px;
        background-color: #007bff; /* Modern vurgu rengi */
        margin: 0.5rem auto 0;
        border-radius: 2px;
    }

    /* Metinler */
    p.lead {
        color: #6c757d;
        font-size: 1.125rem;
        margin-bottom: 1.5rem;
        text-align: justify;
        line-height: 1.8;
    }

    p.text-center.lead {
        text-align: center;
        margin-bottom: 2rem;
    }

    /* Teknolojimiz İkonları */
    i {
        transition: transform 0.3s ease, color 0.3s ease;
        font-size: 3rem; /* Daha büyük ikonlar */
    }

    i:hover {
        transform: scale(1.2);
        color: #0056b3;
    }

    /* Kartlar */
    .text-center h5 {
        font-size: 1.3rem;
        margin-top: 1rem;
        margin-bottom: 0.5rem;
        color: #212529;
    }

    .text-center p {
        font-size: 1rem;
        color: #495057;
    }

    /* Container */
    .container {
        max-width: 1300px;
        margin: auto;
        padding: 0 15px;
    }

    /* Bölüm Ayarları */
    section.py-5 {
        padding-top: 3rem;
        padding-bottom: 3rem;
        background: #fff; /* Beyaz arka plan */
    }

    section.text-center {
        text-align: center;
    }

    /* Animasyonlar */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    section {
        animation: fadeIn 1s ease-in-out;
    }

    /* Responsive Ayarlar */
    @media (max-width: 768px) {
        h1.display-5 {
            font-size: 2rem;
        }

        h2 {
            font-size: 1.8rem;
        }

        p.lead {
            font-size: 1rem;
        }

        i {
            font-size: 2.5rem;
        }
    }

    </style>
    @include('frontend.components.header.header')
    <div class="container">

    <!-- Hakkımızda -->
    <!-- Hakkımızda -->
    <section class="py-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-5 mb-3">Biz Kimiz?</h1>
                    <p class="lead">
                        Harbigol.com, spor dünyasına yepyeni bir anlayış getirmek amacıyla kurulmuş, yapay zeka destekli analizler sunan bir platformdur.
                        Geleneksel spor analiz yöntemlerinin ötesine geçerek, büyük veri analitiği ve makine öğrenimi algoritmalarını kullanarak, kullanıcılarımızın
                        spor dünyasında daha bilinçli kararlar almasına olanak sağlıyoruz. Amacımız, hem profesyonel sporcular hem de spor tutkunları için
                        derinlemesine, objektif ve güvenilir analizler sunmaktır.
                    </p>
                    <p class="lead">
                        İşimizi yaparken yalnızca veri toplamakla yetinmiyor, aynı zamanda bu verileri anlamlı içgörüler ve tahminler haline getiriyoruz.
                        Kullanıcılarımızın yalnızca "ne olduğunu" değil, aynı zamanda "neden olduğunu" ve "ne olabileceğini" görmelerine yardımcı oluyoruz.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="bizkimiz.png" class="mt-5" width="100%" height="800" alt="bizkimiz">
                </div>
            </div>


        </div>
    </section>

    <!-- Teknolojimiz -->
    <section class="">
        <div class="container">
            <h2 class="text-center mb-4">Teknolojimiz</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <i class="bi bi-cpu-fill display-4 text-primary mb-3"></i>
                    <h5>Yapay Zeka Analizleri</h5>
                    <p>Makine öğrenimi algoritmalarımız ile maçları tahmin eder ve performansları analiz ederiz.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="bi bi-hdd-network-fill display-4 text-danger mb-3"></i>
                    <h5>Büyük Veri</h5>
                    <p>Milyonlarca veriyi işleyerek doğru ve güvenilir analizler sunuyoruz.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="bi bi-speedometer display-4 text-success mb-3"></i>
                    <h5>Gerçek Zamanlı Performans</h5>
                    <p>Canlı maç sırasında oyuncu ve takım performanslarını anında raporluyoruz.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Amacımız -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Amacımız</h2>
            <p class="text-center lead">
                Harbigol.com olarak amacımız, spor tutkunlarına en doğru ve kapsamlı analizleri sunarak karar alma süreçlerini kolaylaştırmaktır.
                Teknolojimizle spor dünyasında fark yaratmayı hedefliyoruz.
            </p>
        </div>
    </section>
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
