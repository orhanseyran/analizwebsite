<!DOCTYPE html>
<html lang="en">
<head>
         <meta charset="utf-8">
         <title>Ecomus - Ultimate HTML</title>

         <meta name="author" content="themesflat.com">
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- font -->
        <link rel="stylesheet" href="fonts/fonts.css">
        <!-- Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="fonts/font-icons.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet"type="text/css" href="css/styles.css"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
         <!-- Favicon and Touch Icons  -->
         <link rel="shortcut icon" href="images/logo/favicon.png">
     <link rel="apple-touch-icon-precomposed" href="images/logo/favicon.png">
</head>
<style>

    .section-title {
            font-weight: bold;
            margin-bottom: 1rem;
            color: #333;
        }

        /* İkon ve Takım İsmi Stili */
        .team-icon {
            margin-right: 8px;
            vertical-align: middle;
        }

        /* Skor Vurgulama */
        .score {
            font-weight: bold;
            font-size:18px;
            color: #007bff;
        }
        .bg-primary {
    --bs-bg-opacity: 1;
    background-color: #4E0C6E !important;
}

        /* Tablo Başlıkları */
        .table thead th {
            background-color: #343a40;
            color: #fff;
            text-align: center;
        }

        /* Tabloların Genel Stil Ayarları */
        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .table td {
            vertical-align: middle;
        }

        /* Puan Tablosu Badges */
        .badge-sari {
            background-color: #ffc107;
            width: 15px;
            height: 15px;
            display: inline-block;
            border-radius: 50%;
        }

        .badge-yesil {
            background-color: #28a745;
            width: 15px;
            height: 15px;
            display: inline-block;
            border-radius: 50%;
        }

        .badge-mavi {
            background-color: #4E0C6E;
            width: 15px;
            height: 15px;
            display: inline-block;
            border-radius: 50%;
        }

        .badge-kirmizi {
            background-color: #dc3545;
            width: 15px;
            height: 15px;
            display: inline-block;
            border-radius: 50%;
        }

        /* Yapay Zeka Analizi Kartı */
        .ai-analysis {
            margin-top: 2rem;
        }

        .ai-analysis .card-header {
            background-color: #343a40;
            color: #fff;
            font-size: 1.1em;
        }

        .ai-analysis .analysis-content h6 {
            margin-top: 1rem;
            color: #343a40;
        }

        .ai-analysis .analysis-content p {
            color: #555;
        }

        /* Responsive İkon Ayarı */
        @media (max-width: 576px) {
            .team-icon {
                margin-right: 5px;
            }
        }
  </style>
<style>

    .match-card {
        background-color: #4E0C6E;
        color: white;
        border-radius: 8px;
        padding: 20px;
        text-align: center;
        margin: 20px auto;
        max-width: 1300px;
    }
    .accordion-button:not(.collapsed) {
    color: #ffffff;
    background-color: #4E0C6E;
    box-shadow: inset 0 calc(-1* var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
}
    .acordion-card{
        color: white;
        border-radius: 8px;
        padding: 20px;
        text-align: center;
        margin: 20px auto;
        text-align: center;
        max-width: 1200px;
    }
    .team-logos {
        width: 25%;
        height: auto;
    }
    .scores {
        font-size: 2.5rem;
        font-weight: bold;
    }
    .match-info {
        color: #f1f1f1;
        font-size: 0.9rem;
        margin-top: 10px;
    }
    .status-badge {
        background-color: #28a745;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 0.9rem;
    }
    .divider {
        font-size: 1.2rem;
        margin: 0 15px;
    }
    .fa-regular, .far {
    font-size: 100px;
    font-weight: 400;
}
h5{
    color: white;
}
</style>
<body class="preload-wrapper">

    @include('frontend.components.header.header')


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
