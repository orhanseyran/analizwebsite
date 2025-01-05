<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home - Online Courses & Education Bootstrap5 Template</title>
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
.table-sm>:not(caption)>*>* {
    padding: 0px;
}
</style>

<body class="rbt-header-sticky">

    <!-- Start Header Area -->
    @include('frontend.components.header.headernew')



    <main class="rbt-main-wrapper">
        <div class="container">
            <div class="match-card">
                <div class="row align-items-center">
                    <!-- Sol Takım -->
                    <div class="col-4">
                        <img width="100" height="100" src="{{ $maçdetay['teams']['home']['logo'] ?? 'f.png' }}" alt="Ludogorets Logo" class="team-logos">
                        <h5 class="mt-2">{{ $maçdetay['teams']['home']['name'] ?? 'N/A' }}</h5>
                    </div>
                    <!-- Skor -->
                    <div class="col-4">
    
    
    
                        <img width="60" src="logo2.png" alt="logo" class="logo">
                    </div>
                    <!-- Sağ Takım -->
                    <div class="col-4">
                        <img width="200" height="200" src="{{ $maçdetay['teams']['away']['logo'] ?? 'f.png' }}" alt="{{ $maçdetay['teams']['away']['logo'] ?? 'f.png' }}" class="team-logos">
                        <h5 class="mt-2">{{ $maçdetay['teams']['away']['name'] ?? 'N/A' }}</h5>
                    </div>
                </div>
                <div class="match-info mt-3">
    
                    {{ \Carbon\Carbon::parse($maçdetay['fixture']['date'])->format('H:i') }} | {{$maçdetay['league']['name']  }} | {{$maçdetay['fixture']['venue']['name']  }}
                </div>
            </div>
            <div class="container py-4">
                <div class="row g-3">
                    <!-- Sol Sütun: Rekabet Geçmişi & Son Maçlar -->
                    <div class="col-md-8">
                        <!-- Rekabet Geçmişi -->
                        <div class="card mb-4">
                            <div class="card-header bg-dark text-white">
                                REKABET GEÇMİŞİ
                            </div>
                            <div class="card-body">
                                {{-- <div class="d-flex justify-content-between align-items-center mb-3">
                                   <h6 class="mb-0">Son 5 Maç</h6>
                                    <select class="form-select form-select-sm" style="width:150px;">
                                        <option>ADS İç Saha</option>
                                        <option>Beşiktaş İç Saha</option>
                                    </select>
                                </div> --}}
                                <div class="table-responsive">
                                    <table class="table table-striped table-sm mb-0">
                                        <thead>
                                            <tr>
                                                <th  >Lig</th>
                                                <th>Sez</th>
                                                <th class="text-end">Ev</th>
                                                <th class="text-center" ></th>
                                                <th class="text-center">Sonuç</th>
                                                <th class="text-center"></th>
    
                                                <th class="text-start">Dep</th>
    
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($headToHeadMatches as $get )
                                            <tr>
                                                <td class="text-center">{{ $get["league"]["name"] }}</td>
                                                <td class="text-center" >{{ $get["league"]["season"] }}</td>
                                                <td class="text-end">
                                                    {{ $get["teams"]["home"]["name"] }}
                                                </td>
                                                <td class="text-end ">
                                                    <img src="{{ $get["teams"]["home"]["logo"] }}" alt="Beşiktaş" width="20" height="20" class="team-icon">
    
                                                </td>
                                                <td class="text-center score">{{ $get["goals"]["home"] }}-{{ $get["goals"]["away"] }}</td>
                                                <td  >
                                                    <img src="{{ $get["teams"]["away"]["logo"] }}" alt="Adana Demir" width="20" height="20" class="team-icon">
    
                                                </td>
                                                <td class="text-start">
                                                    {{ $get["teams"]["away"]["name"] }}
                                                </td>
                                            </tr>
                                            @endforeach
    
    
                                        </tbody>
                                    </table>
                                </div>
                                <a href="#" class="small mt-2 d-block text-end">Daha Eski Maçları Göster</a>
                            </div>
                        </div>
    
                        <!-- Son Maçlar -->
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        Son Maçlar - {{ $maçdetay['teams']['home']['name']  }}
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Lig</th>
                                                        <th>Ev</th>
                                                        <th></th>
                                                        <th>Sonuç</th>
                                                        <th></th>
                                                        <th>Dep</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($homeFixtures as $get )
                                                    <tr>
                                                        <td>{{ $get["league"]["name"] }}</td>
    
                                                        <td>
                                                            {{ $get["teams"]["home"]["name"] }}
                                                        </td>
                                                        <td>
                                                            <img src="{{ $get["teams"]["home"]["logo"] }}" alt="Göztepe" width="20" height="20" class="team-icon">
    
                                                        </td>
                                                        <td class="text-center score">{{ $get["goals"]["home"] }}-{{ $get["goals"]["away"] }}</td>
                                                        <td>
                                                            <img src="{{ $get["teams"]["away"]["logo"] }}" alt="Adana Demir" width="20" height="20" class="team-icon">
    
                                                        </td>
                                                        <td>
                                                            {{ $get["teams"]["away"]["name"] }}
                                                        </td>
                                                    </tr>
    
    
                                                    @endforeach
    
    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Beşiktaş Son Maçlar -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        Son Maçlar - {{ $maçdetay['teams']['away']['name'] ?? 'N/A' }}
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Lig</th>
                                                        <th>Ev</th>
                                                        <th></th>
                                                        <th>Sonuç</th>
                                                        <th></th>
                                                        <th>Dep</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($awayFixtures as $get )
                                                    <tr>
                                                        <td>{{ $get["league"]["name"] }}</td>
    
                                                        <td>
                                                            {{ $get["teams"]["home"]["name"] }}
                                                        </td>
                                                        <td>
                                                            <img src="{{ $get["teams"]["home"]["logo"] }}" alt="Göztepe" width="20" height="20" class="team-icon">
    
                                                        </td>
                                                        <td class="text-center score">{{ $get["goals"]["home"] }}-{{ $get["goals"]["away"] }}</td>
                                                        <td>
                                                            <img src="{{ $get["teams"]["away"]["logo"] }}" alt="Adana Demir" width="20" height="20" class="team-icon">
    
                                                        </td>
                                                        <td>
                                                            {{ $get["teams"]["away"]["name"] }}
                                                        </td>
                                                    </tr>
    
    
                                                    @endforeach
    
    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row mt-3">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    Teknik Direktör Bilgisi Ev
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-sm mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Fotoğraf</th>
                                                    <th>Adı</th>
                                                    <th>Yaş</th>
                                                    <th>Doğum Tarihi</th>
                                                    <th>Milliyet</th>
                                                    <th>Boy</th>
    
                                                    <th>Takım</th>
                                                    <th>Göreve Başlama Tarihi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center"><img width="60" src="{{ $coacheshome[0]["photo"] }}" alt="Koç Fotoğrafı"></td>
                                                    <td class="text-center">{{ $coacheshome[0]["name"] }}</td>
                                                    <td class="text-center">{{ $coacheshome[0]["age"] }}</td>
                                                    <td class="text-center">{{ $coacheshome[0]["birth"]["date"] }}</td>
                                                    <td class="text-center">{{ $coacheshome[0]["birth"]["country"] }}</td>
                                                    <td class="text-center">{{ $coacheshome[0]["height"] }}</td>
    
                                                    <td class="text-center"><img class="team-logo" src="{{ $coacheshome[0]["team"]["logo"] }} " alt="{{ $coacheshome[0]["team"]["logo"] }}"> {{ $coacheshome[0]["team"]["name"] }}</td>
                                                    <td class="text-center">{{ $coacheshome[0]["career"][0]["start"] }}</td>
                                                </tr>
    
    
    
    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    Teknik Direktör Bilgisi Dep
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-sm mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Fotoğraf</th>
                                                    <th>Adı</th>
                                                    <th>Yaş</th>
                                                    <th>Doğum Tarihi</th>
                                                    <th>Milliyet</th>
                                                    <th>Boy</th>
    
                                                    <th>Takım</th>
                                                    <th>Göreve Başlama Tarihi</th>
    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <tr>
                                                        <td class="text-center"><img width="60" src="{{ $coachesaway[0]["photo"] }}" alt="Koç Fotoğrafı"></td>
                                                        <td class="text-center">{{ $coachesaway[0]["name"] }}</td>
                                                        <td class="text-center">{{ $coachesaway[0]["age"] }}</td>
                                                        <td class="text-center">{{ $coachesaway[0]["birth"]["date"] }}</td>
                                                        <td class="text-center">{{ $coachesaway[0]["birth"]["country"] }}</td>
                                                        <td class="text-center">{{ $coachesaway[0]["height"] }}</td>
    
                                                        <td class="text-center"><img class="team-logo" src="{{ $coachesaway[0]["team"]["logo"] }} " alt="{{ $coachesaway[0]["team"]["logo"] }}"> {{ $coachesaway[0]["team"]["name"] }}</td>
                                                        <td class="text-center">{{ $coachesaway[0]["career"][0]["start"] }}</td>
                                                    </tr>
                                                </tr>
    
    
    
    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
    {{--
                        <div class="row mt-3">
                            <div class="card">
                                <div class="card-header bg-primary text-white">
                                    Teknik Direktör Bilgisi Dep
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-sm mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Lig</th>
                                                    <th>Ev</th>
                                                    <th></th>
                                                    <th>Sonuç</th>
                                                    <th></th>
                                                    <th>Dep</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($awayFixtures as $get )
                                                <tr>
                                                    <td>{{ $get["league"]["name"] }}</td>
    
                                                    <td>
                                                        {{ $get["teams"]["home"]["name"] }}
                                                    </td>
                                                    <td>
                                                        <img src="{{ $get["teams"]["home"]["logo"] }}" alt="Göztepe" width="20" height="20" class="team-icon">
    
                                                    </td>
                                                    <td class="text-center score">{{ $get["goals"]["home"] }}-{{ $get["goals"]["away"] }}</td>
                                                    <td>
                                                        <img src="{{ $get["teams"]["away"]["logo"] }}" alt="Adana Demir" width="20" height="20" class="team-icon">
    
                                                    </td>
                                                    <td>
                                                        {{ $get["teams"]["away"]["name"] }}
                                                    </td>
                                                </tr>
    
    
                                                @endforeach
    
    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        @if ($lineups != null)
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        Kadro Bilgileri Ev
                                        Formasyon : {{ $lineups[0]["formation"] }}
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Ad </th>
                                                        <th>Numara</th>
                                                        <th>Pozisyon</th>
    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($lineups[0]["startXI"] as $get )
    
                                                    <tr>
                                                        <td class="text-center">{{ $get["player"]["name"] }}</td>
    
                                                            <td class="text-center">{{ $get["player"]["number"] }}</td>
    
    
                                                            <td class="text-center">{{ $get["player"]["pos"] }}</td>
    
    
                                                    </tr>
    
    
    
    
                                                    @endforeach
    
    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6>Yedekler</h6>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Ad </th>
                                                        <th>Numara</th>
                                                        <th>Pozisyon</th>
    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($lineups[0]["substitutes"] as $get )
    
                                                    <tr>
                                                        <td class="text-center">{{ $get["player"]["name"] }}</td>
    
                                                            <td class="text-center">{{ $get["player"]["number"] }}</td>
    
    
                                                            <td class="text-center">{{ $get["player"]["pos"] }}</td>
    
    
                                                    </tr>
    
    
    
    
                                                    @endforeach
    
    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        Kadro Bilgileri Dep
                                        Formasyon : {{ $lineups[1]["formation"] }}
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Ad </th>
                                                        <th>Numara</th>
                                                        <th>Pozisyon</th>
    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($lineups[1]["startXI"] as $get )
    
                                                    <tr>
                                                        <td class="text-center">{{ $get["player"]["name"] }}</td>
    
                                                            <td class="text-center">{{ $get["player"]["number"] }}</td>
    
    
                                                            <td class="text-center">{{ $get["player"]["pos"] }}</td>
    
    
                                                    </tr>
    
    
    
    
                                                    @endforeach
    
    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6>Yedekler</h6>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Ad </th>
                                                        <th>Numara</th>
                                                        <th>Pozisyon</th>
    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($lineups[1]["substitutes"] as $get )
    
                                                    <tr>
                                                        <td class="text-center">{{ $get["player"]["name"] }}</td>
    
                                                            <td class="text-center">{{ $get["player"]["number"] }}</td>
    
    
                                                            <td class="text-center">{{ $get["player"]["pos"] }}</td>
    
    
                                                    </tr>
    
    
    
    
                                                    @endforeach
    
    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </div>
    
                        @else
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        Kadro Bilgileri Ev
                                        Formasyon : Bulunamadı
                                    </div>
                                    <div class="card-body">
                                        Kadro Bilgileri Bulunamadı
    
                                    </div>
    
                                </div>
    
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        Kadro Bilgileri Dep
                                        Formasyon : Bulunamadı
    
                                    </div>
                                    <div class="card-body">
                                        Kadro Bilgileri Bulunamadı
    
                                    </div>
    
                                </div>
    
                            </div>
                        </div>
    
                        @endif
    
                        {{-- <div class="row mt-3">
                            <!-- Kadro Ev Tablosu -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        Kadro Ev
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Fotoğraf</th>
                                                        <th class="text-center">Ad</th>
                                                        <th class="text-center">Yaş</th>
                                                        <th class="text-center">Toplam Aldığı Süre</th>
                                                        <th class="text-center">Toplam Gol</th>
                                                        <th class="text-center">Toplam Asist</th>
                                                        <th class="text-center">Kırmızı Kart</th>
                                                        <th class="text-center">Sarı Kart</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($getstatichomeplayer as $player)
                                                        <tr>
                                                            <td class="text-center">
                                                                <img src="{{ $player['player']['photo'] }}" alt="{{ $player['player']['name'] }}" width="40" height="40" class="rounded-circle">
                                                            </td>
                                                            <td class="text-center">{{ $player['player']['name'] }}</td>
                                                            <td class="text-center">{{ $player['player']['age'] }}</td>
                                                            <td class="text-center">
                                                                @php
                                                                    $minutes = $player['statistics'][0]['games']['minutes'] ?? null;
                                                                    if ($minutes) {
                                                                        $hours = intdiv($minutes, 60);
                                                                        $remainingMinutes = $minutes % 60;
                                                                        echo "{$hours} sa { $remainingMinutes} dk";
                                                                    } else {
                                                                        echo "Süre Alamadı";
                                                                    }
                                                                @endphp
                                                            </td>
                                                            <td class="text-center">{{ $player['statistics'][0]['goals']['total'] ?? 0 }}</td>
                                                            <td class="text-center">{{ $player['statistics'][0]['goals']['assists'] ?? 0 }}</td>
                                                            <td class="text-center">{{ $player['statistics'][0]['cards']['red'] ?? 0 }}</td>
                                                            <td class="text-center">{{ $player['statistics'][0]['cards']['yellow'] ?? 0 }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Deplasman Tablosu -->
                            <div class="col-md-12 mt-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        Deplasman
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Fotoğraf</th>
                                                        <th class="text-center">Ad</th>
                                                        <th class="text-center">Yaş</th>
                                                        <th class="text-center">Toplam Aldığı Süre</th>
                                                        <th class="text-center">Toplam Gol</th>
                                                        <th class="text-center">Toplam Asist</th>
                                                        <th class="text-center">Kırmızı Kart</th>
                                                        <th class="text-center">Sarı Kart</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($getstaticawayplayer as $player)
                                                        <tr>
                                                            <td class="text-center">
                                                                <img src="{{ $player['player']['photo'] }}" alt="{{ $player['player']['name'] }}" width="40" height="40" class="rounded-circle">
                                                            </td>
                                                            <td class="text-center">{{ $player['player']['name'] }}</td>
                                                            <td class="text-center">{{ $player['player']['age'] }}</td>
                                                            <td class="text-center">
                                                                @php
                                                                    $minutes = $player['statistics'][0]['games']['minutes'] ?? null;
                                                                    if ($minutes) {
                                                                        $hours = intdiv($minutes, 60);
                                                                        $remainingMinutes = $minutes % 60;
                                                                        echo "{$hours} sa { $remainingMinutes} dk";
                                                                    } else {
                                                                        echo "Süre Alamadı";
                                                                    }
                                                                @endphp
                                                            </td>
                                                            <td class="text-center">{{ $player['statistics'][0]['goals']['total'] ?? 0 }}</td>
                                                            <td class="text-center">{{ $player['statistics'][0]['goals']['assists'] ?? 0 }}</td>
                                                            <td class="text-center">{{ $player['statistics'][0]['cards']['red'] ?? 0 }}</td>
                                                            <td class="text-center">{{ $player['statistics'][0]['cards']['yellow'] ?? 0 }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
    
    
    
    
    
                        {{-- <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        En Son 5 Transferler Ev
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Ad </th>
                                                        <th>Transfer Miktarı</th>
                                                        <th>Geldiği Takım</th>
                                                        <th>Gittiği Takım</th>
                                                        <th>Transfer Tarihi</th>
    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($lastfivetransferhome as $get )
    
                                                    <tr>
                                                        <td class="text-center">{{ $get["player"]["name"] }}</td>
    
    
    
                                                        <td class="text-center">{{ $get["transfers"][0]["type"] }}</td>
                                                        <td class="text-center">{{ $get["transfers"][0]["teams"]["in"]["name"] }}</td>
                                                            <td class="text-center">{{ $get["transfers"][0]["teams"]["out"]["name"] }}</td>
                                                            <td class="text-center">{{ $get["transfers"][0]["date"] }}</td>
    
    
                                                    </tr>
    
    
    
    
                                                    @endforeach
    
    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
    
                                </div>
    
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        En Son 5 Transferler Dep
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Ad </th>
                                                        <th>Transfer Miktarı</th>
                                                        <th>Geldiği Takım</th>
                                                        <th>Gittiği Takım</th>
                                                        <th>Transfer Tarihi</th>
    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($lastfivetransferaway as $get )
    
                                                    <tr>
                                                        <td class="text-center">{{ $get["player"]["name"] }}</td>
    
    
    
                                                            <td class="text-center">{{ $get["transfers"][0]["type"] }}</td>
                                                            <td class="text-center">{{ $get["transfers"][0]["teams"]["in"]["name"] }}</td>
                                                            <td class="text-center">{{ $get["transfers"][0]["teams"]["out"]["name"] }}</td>
                                                            <td class="text-center">{{ $get["transfers"][0]["date"] }}</td>
    
    
                                                    </tr>
    
    
    
    
                                                    @endforeach
    
    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
    
                                </div>
    
                            </div>
                        </div> --}}
    
                        <!-- TSL İç & Dış Saha Performansları -->
                        <div class="row g-4 mt-4">
                            <div class="col-12">
                                <h6 class="section-title">TSL İÇ & DIŞ SAHA PERFORMANSLARI</h6>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-secondary text-white">
                                        İç Saha -  {{ $maçdetay['teams']['home']['name'] ?? 'N/A' }}
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Takım</th>
                                                        <th>O</th>
                                                        <th>G</th>
                                                        <th>B</th>
                                                        <th>M</th>
    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">{{ $homePerformance["team"]["id"] }}</td>
                                                        <td class="text-center">
                                                            <img src="{{ $homePerformance["team"]["logo"] }}" alt="Adana Demir" width="20" height="20" class="team-icon">
                                                            {{ $homePerformance["team"]["name"] }}
                                                        </td>
                                                        <td class="text-center" >{{ $homePerformance["fixtures"]["played"]["total"] }}</td>
                                                        <td class="text-center" >{{ $homePerformance["fixtures"]["wins"]["total"] }}</td>
                                                        <td class="text-center" >{{ $homePerformance["fixtures"]["draws"]["total"] }}</td>
                                                        <td class="text-center" >{{ $homePerformance["fixtures"]["loses"]["total"] }}</td>
    
    
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-secondary text-white">
                                        Dış Saha -  {{ $maçdetay['teams']['away']['name'] ?? 'N/A' }}
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Takım</th>
                                                        <th>O</th>
                                                        <th>G</th>
                                                        <th>B</th>
                                                        <th>M</th>
    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">{{ $awayPerformance["team"]["id"] }}</td>
                                                        <td class="text-center">
                                                            <img src="{{ $awayPerformance["team"]["logo"] }}" alt="Adana Demir" width="20" height="20" class="team-icon">
                                                            {{ $awayPerformance["team"]["name"] }}
                                                        </td>
                                                        <td class="text-center" >{{ $awayPerformance["fixtures"]["played"]["total"] }}</td>
                                                        <td class="text-center" >{{ $awayPerformance["fixtures"]["wins"]["total"] }}</td>
                                                        <td class="text-center" >{{ $awayPerformance["fixtures"]["draws"]["total"] }}</td>
                                                        <td class="text-center">{{ $awayPerformance["fixtures"]["loses"]["total"] }}</td>
    
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Maç Sonucu İstatistikleri -->
                        {{-- <div class="row g-4 mt-4">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                                        <span>İç Saha - Adana Demir</span>
                                        <span class="small">Maç Sonucu</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-sm mb-3">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Takım</th>
                                                        <th>O</th>
                                                        <th>G</th>
                                                        <th>B</th>
                                                        <th>M</th>
                                                        <th>A:Y</th>
                                                        <th>P</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>19</td>
                                                        <td>
                                                            <img src="f.png" alt="Adana Demir" width="20" height="20" class="team-icon">
                                                            Adana Demir
                                                        </td>
                                                        <td>14</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>7</td>
                                                        <td>5:18</td>
                                                        <td>0</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>MS1</th>
                                                        <th>MSX</th>
                                                        <th>MS2</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>0% (0)</td>
                                                        <td>0% (0)</td>
                                                        <td>100% (7)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <p class="small text-muted mt-2">Tarafsız sahada oynanan maçlar bahis istatistiklerine yansıtılmamaktadır.</p>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                                        <span>Dış Saha - Beşiktaş</span>
                                        <span class="small">Maç Sonucu</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-sm mb-3">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Takım</th>
                                                        <th>O</th>
                                                        <th>G</th>
                                                        <th>B</th>
                                                        <th>M</th>
                                                        <th>A:Y</th>
                                                        <th>P</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>
                                                            <img src="f.png" alt="Beşiktaş" width="20" height="20" class="team-icon">
                                                            Beşiktaş
                                                        </td>
                                                        <td>7</td>
                                                        <td>2</td>
                                                        <td>1</td>
                                                        <td>4</td>
                                                        <td>9:5</td>
                                                        <td>10</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>MS1</th>
                                                        <th>MSX</th>
                                                        <th>MS2</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>14% (1)</td>
                                                        <td>57% (4)</td>
                                                        <td>29% (2)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <p class="small text-muted mt-2">Tarafsız sahada oynanan maçlar bahis istatistiklerine yansıtılmamaktadır.</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Maç Sonucu Sonu --> --}}
    
                        <!-- Sakat & Cezalı Bölümü -->
                        <div class="row g-4 mt-4">
                            <div class="col-12">
                                <h6 class="section-title">SAKAT & CEZALI</h6>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-danger text-white">
                                        {{ $maçdetay['teams']['home']['name'] ?? 'N/A' }}
                                    </div>
                                    <div class="card-body">
                                        @if ($injuries)
                                        <ul class="list-group list-group-flush">
                                            @foreach ($injuries as $get )
                                            @if ($maçdetay['teams']['home']['name'] == $get["team"]["name"])
                                            <li class="list-group-item d-flex justify-content-between small">
                                                <span>{{ $get["player"]["name"] }} </span>
                                                <span>Sebep - {{ $get["player"]["reason"] }}</span>
                                            </li>
    
                                            @endif
                                            @endforeach
                                        </ul>
                                        @else
                                        <p>Sakat Veya Cezalı Oyuncu Yok</p>
                                        @endif
    
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-danger text-white">
                                        {{ $maçdetay['teams']['away']['name'] ?? 'N/A' }}
                                    </div>
                                    <div class="card-body">
    
                                        <ul class="list-group list-group-flush">
                                            @foreach ($injuries as $get )
                                            @if ($maçdetay['teams']['away']['name'] == $get["team"]["name"])
                                            <li class="list-group-item d-flex justify-content-between small">
                                                <span>{{ $get["player"]["name"] }} </span>
                                                <span>Sebep - {{ $get["player"]["reason"] }}</span>
                                            </li>
                                            @endif
                                            @endforeach
    
    
    
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
    
    
                        <div class="row g-4 mt-4">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header bg-success text-white">
                                        Genel Tahminler
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 p-3">
                                            <div style="height: 150px" class="card bg-primary text-white">
                                                <div class="card-body " style="font-size: 16px; font-weight: 500;">
                                                    <div class="row text-center">
                                                        <h5 style="font-weight: 900;">Tahmini Kazanan Takım</h5>
                                                    </div>
                                                    <div class="row text-center">
                                                       <h5 style="font-size:19px; font-weight: 800;">{{ $predict["predictions"]['winner']["name"] }}
                                                    </h5>
                                                    </div>
    
                                                </div>
                                            </div>
    
                                        </div>
                                        <div  class="col-md-4 p-3">
                                            <div style="height: 150px" class="card bg-primary  text-white">
                                                <div class="card-body " style="font-size: 16px; font-weight: 500;">
                                                    <div class="row text-center">
                                                        <h5 style="font-weight: 900;">Tahmini Gol Sayısı Ev </h5>
                                                    </div>
                                                    <div class="row text-center">
                                                       <p style="font-size:19px; font-weight: 800;">Ev  {{ $predict["predictions"]['goals']["home"] }}
                                                       </p>
                                                    </div>
    
                                                </div>
                                            </div>
    
                                        </div>
                                        <div class="col-md-4 p-3">
                                            <div style="height: 150px" class="card bg-primary  text-white">
                                                <div class="card-body " style="font-size: 16px; font-weight: 500;">
                                                    <div class="row text-center">
                                                        <h5 style="font-weight: 900;">Tahmini Gol Sayısı Dep </h5>
                                                    </div>
                                                    <div class="row text-center">
                                                        <p style="font-size:17px; font-weight: 800;">Dep   {{ $predict["predictions"]['goals']["away"] }}
                                                        </p>
                                                    </div>
    
                                                </div>
                                            </div>
    
                                        </div>
    
                                            {{-- Form Durumu --}}
                                            <div class="col-md-4 p-3">
                                                <div style="height: 150px" class="card bg-primary text-white">
                                                    <div class="card-body" style="font-size: 16px; font-weight: 500;">
                                                        <div class="row text-center">
                                                            <h5 style="font-weight: 900;">Form Durumu %</h5>
                                                        </div>
                                                        <div class="row text-center">
                                                            <div class="col-md-6">
                                                                <h5 style="font-size:15px; font-weight: 800;">
                                                                    Ev {{ $predict['comparison']['form']['home'] }}
                                                                </h5>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h5 style="font-size:15px; font-weight: 800;">
                                                                    Dep {{ $predict['comparison']['form']['away'] }}
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                            {{-- Atak Performansları --}}
                                            <div class="col-md-4 p-3">
                                                <div style="height: 150px" class="card bg-primary text-white">
                                                    <div class="card-body" style="font-size: 16px; font-weight: 500;">
                                                        <div class="row text-center">
                                                            <h5 style="font-weight: 900;">Atak Performansları %</h5>
                                                        </div>
                                                        <div class="row text-center">
                                                            <div class="col-md-6">
                                                                <h5 style="font-size:15px; font-weight: 800;">
                                                                    Ev  {{ $predict['comparison']['att']['home'] }}
                                                                </h5>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h5 style="font-size:15px; font-weight: 800;">
                                                                    Dep {{ $predict['comparison']['att']['away'] }}
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                            {{-- Defans Performansları --}}
                                            <div class="col-md-4 p-3">
                                                <div style="height: 150px" class="card bg-primary text-white">
                                                    <div class="card-body" style="font-size: 16px; font-weight: 500;">
                                                        <div class="row text-center">
                                                            <h5 style="font-weight: 900;">Defans Performansları %</h5>
                                                        </div>
                                                        <div class="row text-center">
                                                            <div class="col-md-6">
                                                                <h5 style="font-size:15px; font-weight: 800;">
                                                                    Ev  {{ $predict['comparison']['def']['home'] }}
                                                                </h5>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h5 style="font-size:15px; font-weight: 800;">
                                                                    Dep  {{ $predict['comparison']['def']['away'] }}
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                            {{-- Pozisyon Dağılımı (Poisson Distribution) --}}
                                            <div class="col-md-4 p-3">
                                                <div style="height: 150px" class="card bg-primary text-white">
                                                    <div class="card-body" style="font-size: 16px; font-weight: 500;">
                                                        <div class="row text-center">
                                                            <h5 style="font-weight: 900;">Pozisyon Dağılımı %</h5>
                                                        </div>
                                                        <div class="row text-center">
                                                            <div class="col-md-6">
                                                                <h5 style="font-size:15px; font-weight: 800;">
                                                                    Ev {{ $predict['comparison']['poisson_distribution']['home'] }}
                                                                </h5>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h5 style="font-size:15px; font-weight: 800;">
                                                                    Dep  {{ $predict['comparison']['poisson_distribution']['away'] }}
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                            {{-- H2H --}}
                                            <div class="col-md-4 p-3">
                                                <div style="height: 150px" class="card bg-primary text-white">
                                                    <div class="card-body" style="font-size: 16px; font-weight: 500;">
                                                        <div class="row text-center">
                                                            <h5 style="font-weight: 900;">H2H %</h5>
                                                        </div>
                                                        <div class="row text-center">
                                                            <div class="col-md-6">
                                                                <h5 style="font-size:15px; font-weight: 800;">
                                                                    Ev {{ $predict['comparison']['h2h']['home'] }}
                                                                </h5>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h5 style="font-size:15px; font-weight: 800;">
                                                                    Dep {{ $predict['comparison']['h2h']['away'] }}
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                            {{-- Goller --}}
                                            <div class="col-md-4 p-3">
                                                <div style="height: 150px" class="card bg-primary text-white">
                                                    <div class="card-body" style="font-size: 16px; font-weight: 500;">
                                                        <div class="row text-center">
                                                            <h5 style="font-weight: 900;">Goller %</h5>
                                                        </div>
                                                        <div class="row text-center">
                                                            <div class="col-md-6">
                                                                <h5 style="font-size:15px; font-weight: 800;">
                                                                    Ev  {{ $predict['comparison']['goals']['home'] }}
                                                                </h5>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h5 style="font-size:15px; font-weight: 800;">
                                                                    Dep  {{ $predict['comparison']['goals']['away'] }}
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                            {{-- Genel Analiz --}}
                                            <div class="col-md-12 p-3">
                                                <div style="height: 150px" class="card bg-primary text-white">
                                                    <div class="card-body" style="font-size: 16px; font-weight: 500;">
                                                        <div class="row text-center">
                                                            <h5 style="font-weight: 900;">Genel Analiz %</h5>
                                                        </div>
                                                        <div class="row text-center">
                                                            <div class="col-md-6">
                                                                <h5 style="font-size:24px; font-weight: 800;">
                                                                    Ev {{ $predict['comparison']['total']['home'] }}
                                                                </h5>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h5 style="font-size:24px; font-weight: 800;">
                                                                    Dep {{ $predict['comparison']['total']['away'] }}
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
    
                                    </div>
    
    
                                </div>
    
    
    
                             </div>
    
                        </div>
    
                                            <!-- Yapay Zeka Analizi -->
                        <div class="row g-4 ai-analysis">
                            <div class="col-12">
                                <button class="btn btn-primary mb-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                                    Önemli Bilgilendirme
                              </button>
    
                                  <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                                    <div class="offcanvas-header">
                                      <h6 class="offcanvas-title" id="staticBackdropLabel">Önemli Bilgilendirme
    
                                      </h6>
                                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                      <div>
                                        Harbigol.com olarak, sitemizde iddaa veya herhangi bir bahis faaliyeti yürütmemekteyiz. Amacımız, kullanıcılarımıza maç analizleri sunarak spor karşılaşmaları hakkında detaylı ve objektif bilgiler sağlamaktır. Sağladığımız veriler ve analizler, kendi kararlarınızı vermenizde rehberlik amacı taşımaktadır. Yapay zeka analizlerimizin içinden seçeceğiniz sonucu siz de değerlendirmenizi bekleriz.
    
                                        Sitemizde sunulan içeriklerin kullanımı sırasında oluşabilecek herhangi bir maddi kayıptan Harbigol.com olarak sorumlu olmadığımızı belirtmek isteriz. Kullanıcılarımızın bahis oynaması durumunda doğabilecek sonuçlar tamamen kendi sorumlulukları altındadır.
    
                                        Harbigol.com’u kullanarak bu bilgilendirmeleri kabul etmiş olursunuz. Herhangi bir sorunuz veya geri bildiriminiz olması durumunda, lütfen bizimle iletişime geçmekten çekinmeyiniz.
    
                                        Saygılarımızla,
    
                                        Harbigol.com Ekibi
                                      </div>
                                    </div>
                                  </div>
                                <div class="card">
                                    <div class="card-header bg-info text-white">
                                        YAPAY ZEKA ANALİZİ
                                    </div>
                                    <div class="card-body analysis-content" style="font-size: 16px; font-weight: 500;">
                                        {!!$yapayzeka!!}
    
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Yapay Zeka Analizi Sonu -->
    
    
                         <!-- Yapay Zeka Analizi Sonu -->
    
    
    
                    </div>
    
                    <!-- Sağ Sütun: Puan Tablosu -->
    <div class="col-md-4">
    
    
        <div class="card ranking-list">
            <div class="card-header bg-dark text-white">
                PUAN TABLOSU
            </div>
            @if ( $homeStandings == null && $awayStandings == null )
            <div class="card-body">
                <h6 style="color: #555" class="text-center">Bu müsabaka için şu anda <br>
                    "Puan Tablosu" <br>
                    bilgisi bulunmamaktadır.</h6>
                </div>
    
    
            @else
            <div class="card-body">
                <ul class="nav nav-pills mb-3" id="tabMenu" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link " id="icsaha-tab" data-bs-toggle="pill" data-bs-target="#icsaha" type="button" role="tab" aria-controls="icsaha" aria-selected="true">İç Saha</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="genel-tab" data-bs-toggle="pill" data-bs-target="#genel" type="button" role="tab" aria-controls="genel" aria-selected="false">Genel</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="dissaha-tab" data-bs-toggle="pill" data-bs-target="#dissaha" type="button" role="tab" aria-controls="dissaha" aria-selected="false">Dış Saha</button>
                    </li>
                </ul>
    
                <div class="tab-content" id="tabContent">
                    <!-- İç Saha Tab -->
                    <div class="tab-pane fade " id="icsaha" role="tabpanel" aria-labelledby="icsaha-tab">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Takım</th>
                                        <th>O</th>
                                        <th>G</th>
                                        <th>B</th>
                                        <th>M</th>
                                        <th>A:Y</th>
                                        <th>P</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($homeStandings as $team)
                                        <tr>
                                            <td>{{ $team['rank'] }}</td>
                                            @if ($team['team']['name'] ==  $maçdetay['teams']['away']['name'] )
                                            <td style=" color: rgb(192, 61, 61);">
                                                <i class="fas fa-futbol team-icon me-2"></i>
                                                {{ $team['team']['name'] }}
                                            </td>
                                            @elseif ($team['team']['name'] ==  $maçdetay['teams']['home']['name'] )
                                            <td style=" color: rgb(75, 39, 250);">
                                                <i class="fas fa-futbol team-icon me-2"></i>
                                                {{ $team['team']['name'] }}
    
    
                                                </td>
                                            @else
                                            <td >
                                                <i class="fas fa-futbol team-icon me-2"></i>
                                                {{ $team['team']['name'] }}
                                            </td>
                                            @endif
    
                                            <td>{{ $team['home']['played'] }}</td>
                                            <td>{{ $team['home']['win'] }}</td>
                                            <td>{{ $team['home']['draw'] }}</td>
                                            <td>{{ $team['home']['lose'] }}</td>
                                            <td>{{ $team['home']['goals']['for'] }}:{{ $team['home']['goals']['against'] }}</td>
                                            <td>{{ $team['home_points'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
    
                    <!-- Genel Tab -->
                    <div class="tab-pane fade show active" id="genel" role="tabpanel" aria-labelledby="genel-tab">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Takım</th>
                                        <th>O</th>
                                        <th>G</th>
                                        <th>B</th>
                                        <th>M</th>
                                        <th>A:Y</th>
                                        <th>P</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($overallStandings as $team)
                                        <tr>
                                            <td>{{ $team['rank'] }}</td>
                                            @if ($team['team']['name'] ==  $maçdetay['teams']['away']['name'] )
                                            <td style=" color: rgb(192, 61, 61);">
                                                <i class="fas fa-futbol team-icon me-2"></i>
                                                {{ $team['team']['name'] }}
                                            </td>
                                            @elseif ($team['team']['name'] ==  $maçdetay['teams']['home']['name'] )
                                            <td style=" color: rgb(75, 39, 250);">
                                                <i class="fas fa-futbol team-icon me-2"></i>
                                                {{ $team['team']['name'] }}
    
    
                                                </td>
                                            @else
                                            <td >
                                                <i class="fas fa-futbol team-icon me-2"></i>
                                                {{ $team['team']['name'] }}
                                            </td>
                                            @endif
                                            <td>{{ $team['all']['played'] }}</td>
                                            <td>{{ $team['all']['win'] }}</td>
                                            <td>{{ $team['all']['draw'] }}</td>
                                            <td>{{ $team['all']['lose'] }}</td>
                                            <td>{{ $team['all']['goals']['for'] }}:{{ $team['all']['goals']['against'] }}</td>
                                            <td>{{ $team['points'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
    
                    <!-- Dış Saha Tab -->
                    <div class="tab-pane fade" id="dissaha" role="tabpanel" aria-labelledby="dissaha-tab">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Takım</th>
                                        <th>O</th>
                                        <th>G</th>
                                        <th>B</th>
                                        <th>M</th>
                                        <th>A:Y</th>
                                        <th>P</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($awayStandings as $team)
                                        <tr>
                                            <td>{{ $team['rank'] }}</td>
                                            @if ($team['team']['name'] ==  $maçdetay['teams']['away']['name'] )
                                            <td style=" color: rgb(192, 61, 61);">
                                                <i class="fas fa-futbol team-icon me-2"></i>
                                                {{ $team['team']['name'] }}
                                            </td>
                                            @elseif ($team['team']['name'] ==  $maçdetay['teams']['home']['name'] )
                                            <td style=" color: rgb(75, 39, 250);">
                                                <i class="fas fa-futbol team-icon me-2"></i>
                                                {{ $team['team']['name'] }}
    
    
                                                </td>
                                            @else
                                            <td >
                                                <i class="fas fa-futbol team-icon me-2"></i>
                                                {{ $team['team']['name'] }}
                                            </td>
                                            @endif
                                            <td>{{ $team['away']['played'] }}</td>
                                            <td>{{ $team['away']['win'] }}</td>
                                            <td>{{ $team['away']['draw'] }}</td>
                                            <td>{{ $team['away']['lose'] }}</td>
                                            <td>{{ $team['away']['goals']['for'] }}:{{ $team['away']['goals']['against'] }}</td>
                                            <td>{{ $team['away_points'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end tab content -->
            </div>
            @endif
    
        </div>
    
        <div class="row g-4 ai-analysis">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-info text-white">
                       Ev Takım Analizi
                    </div>
                    <style>
                        h6{
                            color: #353535 !important;
                            font-weight: 600;
                        }
                    </style>
                    <div class="card-body analysis-content" style="font-size: 16px; font-weight: 500;">
                        <h6 class="mb-3 mt-3">Gol İstatistikleri (Atılan ve Yenilen Goller)</h6>
                        <canvas id="goalsChart1" width="400" height="200"></canvas>
    
                        <h6 class="mb-3 mt-3">Under/Over İstatistikleri (Atılan Goller)</h5>
                        <canvas id="underOverChart1" width="400" height="200"></canvas>
    
                        <h6 class="mb-3 mt-3">Gol Zaman Dağılımı (Yenilen Goller)</h6>
                        <canvas id="goalsAgainstMinutesChart1" width="400" height="200"></canvas>
    
                        <h6 class="mb-3 mt-3">Gol Zaman Dağılımı (Atılan Goller)</h6>
                        <canvas id="goalsForMinutesChart1" width="400" height="200"></canvas>
    
                        <h6 class="mb-3 mt-3">Fikstür Sonuçları (İç Saha, Dep ve Toplam)</h6>
                        <canvas id="fixturesChart1" width="400" height="200"></canvas>
    
                        <h6 class="mb-3 mt-3">Sarı ve Kırmızı Kart Dağılımı</h6>
                        <canvas id="yellowRedCardsChart1" width="400" height="200"></canvas>
    
                    </div>
                </div>
            </div>
        </div>
    
    
        <div class="row g-4 ai-analysis">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        Dep Takım Analizi
                    </div>
                    <style>
                        h6{
                            color: #353535 !important;
                            font-weight: 600;
                        }
                    </style>
                    <div class="card-body analysis-content" style="font-size: 16px; font-weight: 500;">
                        <h6 class="mb-3 mt-3">Gol İstatistikleri (Atılan ve Yenilen Goller)</h6>
                        <canvas id="goalsChart" width="400" height="200"></canvas>
    
                        <h6 class="mb-3 mt-3">Under/Over İstatistikleri (Atılan Goller)</h5>
                        <canvas id="underOverChart" width="400" height="200"></canvas>
    
                        <h6 class="mb-3 mt-3">Gol Zaman Dağılımı (Yenilen Goller)</h6>
                        <canvas id="goalsAgainstMinutesChart" width="400" height="200"></canvas>
    
                        <h6 class="mb-3 mt-3">Gol Zaman Dağılımı (Atılan Goller)</h6>
                        <canvas id="goalsForMinutesChart" width="400" height="200"></canvas>
    
                        <h6 class="mb-3 mt-3">Fikstür Sonuçları (İç Saha, Dep ve Toplam)</h6>
                        <canvas id="fixturesChart" width="400" height="200"></canvas>
    
                        <h6 class="mb-3 mt-3">Sarı ve Kırmızı Kart Dağılımı</h6>
                        <canvas id="yellowRedCardsChart" width="400" height="200"></canvas>
    
                    </div>
                </div>
            </div>
        </div>
    
    
    
        {{-- <div class="row g-4 ai-analysis">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        Dep DETAYLI İSTATİSTİK ANALİZİ
                    </div>
                    <div class="card-body analysis-content" style="font-size: 16px; font-weight: 500;">
                        {!!$awaytext!!}
    
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
                </div>
            </div>
    
        </div>
    
    
        
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    
     <script>
            // 1. Atılan ve Yenilen Goller için Bar Chart
            var ctx = document.getElementById('goalsChart').getContext('2d');
            var goalsChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['İç Saha', 'Dep', 'Toplam'],
                    datasets: [{
                        label: 'Atılan Goller',
                        data: [{{ $data['goalsForHome'] }}, {{ $data['goalsForAway'] }}, {{ $data['goalsForTotal'] }}],
                        backgroundColor: 'rgba(75, 192, 192, 0.5)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }, {
                        label: 'Yenilen Goller',
                        data: [{{ $data['goalsAgainstHome'] }}, {{ $data['goalsAgainstAway'] }}, {{ $data['goalsAgainstTotal'] }}],
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            var ctx2 = document.getElementById('underOverChart').getContext('2d');
        var underOverChart = new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['0.5 Üzerinde', '0.5 Altında', '1.5 Üzerinde', '1.5 Altında', '2.5 Üzerinde', '2.5 Altında'],
                datasets: [{
                    label: 'Atılan Goller (Under/Over)',
                    data: [
                        {{ $data['goalsForUnderOver']['0.5']['over'] + $data['goalsForUnderOver']['0.5']['under'] }},
                        {{ $data['goalsForUnderOver']['1.5']['over'] + $data['goalsForUnderOver']['1.5']['under'] }},
                        {{ $data['goalsForUnderOver']['2.5']['over'] + $data['goalsForUnderOver']['2.5']['under'] }},
                        {{ $data['goalsForUnderOver']['3.5']['over'] + $data['goalsForUnderOver']['3.5']['under'] }},
                        {{ $data['goalsForUnderOver']['4.5']['over'] + $data['goalsForUnderOver']['4.5']['under'] }}
                    ],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(153, 102, 255, 0.5)',
                        'rgba(255, 159, 64, 0.5)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    }
                }
            }
        });
        var ctx = document.getElementById('goalsAgainstMinutesChart').getContext('2d');
        var goalsAgainstMinutesChart = new Chart(ctx, {
            type: 'bar', // Bar Chart kullanıyoruz
            data: {
                labels: ['0-15', '16-30', '31-45', '46-60', '61-75', '76-90', '91-105', '106-120'], // Zaman dilimleri
                datasets: [{
                    label: 'Yenilen Goller (Toplam)',
                    data: [
                        {{ $data['goalsAgainstMinutes']['0-15']['total'] ?? 0 }},
                        {{ $data['goalsAgainstMinutes']['16-30']['total'] ?? 0 }},
                        {{ $data['goalsAgainstMinutes']['31-45']['total'] ?? 0 }},
                        {{ $data['goalsAgainstMinutes']['46-60']['total'] ?? 0 }},
                        {{ $data['goalsAgainstMinutes']['61-75']['total'] ?? 0 }},
                        {{ $data['goalsAgainstMinutes']['76-90']['total'] ?? 0 }},
                        {{ $data['goalsAgainstMinutes']['91-105']['total'] ?? 0 }},
                        {{ $data['goalsAgainstMinutes']['106-120']['total'] ?? 0 }}
                    ], // Verilerin toplandığı alan
                    backgroundColor: 'rgba(255, 99, 132, 0.5)', // Çubukların rengi
                    borderColor: 'rgba(255, 99, 132, 1)', // Çubukların kenar rengi
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                // Yüzdeleri eklemek için custom tooltips
                tooltips: {
                    callbacks: {
                        afterLabel: function(tooltipItem) {
                            var percentage = {!! json_encode($data['goalsAgainstMinutes']) !!}[tooltipItem.label].percentage;
                            return ' (' + percentage + ')'; // Yüzdeyi gösteriyoruz
                        }
                    }
                }
            }
        });
        var ctx = document.getElementById('goalsForMinutesChart').getContext('2d');
        var goalsForMinutesChart = new Chart(ctx, {
            type: 'bar', // Bar Chart kullanıyoruz
            data: {
                labels: ['0-15', '16-30', '31-45', '46-60', '61-75', '76-90', '91-105', '106-120'], // Zaman dilimleri
                datasets: [{
                    label: 'Atılan Goller (Toplam)',
                    data: [
                        {{ $data['goalsForMinutes']['0-15']['total'] ?? 0 }},
                        {{ $data['goalsForMinutes']['16-30']['total'] ?? 0 }},
                        {{ $data['goalsForMinutes']['31-45']['total'] ?? 0 }},
                        {{ $data['goalsForMinutes']['46-60']['total'] ?? 0 }},
                        {{ $data['goalsForMinutes']['61-75']['total'] ?? 0 }},
                        {{ $data['goalsForMinutes']['76-90']['total'] ?? 0 }},
                        {{ $data['goalsForMinutes']['91-105']['total'] ?? 0 }},
                        {{ $data['goalsForMinutes']['106-120']['total'] ?? 0 }}
                    ], // Verilerin toplandığı alan
                    backgroundColor: 'rgba(75, 192, 192, 0.5)', // Çubukların rengi
                    borderColor: 'rgba(75, 192, 192, 1)', // Çubukların kenar rengi
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    },
                    tooltip: {
                        callbacks: {
                            afterLabel: function(tooltipItem) {
                                var percentage = {!! json_encode($data['goalsForMinutes']) !!}[tooltipItem.label].percentage;
                                return ' (' + percentage + ')'; // Yüzdeyi gösteriyoruz
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        var ctx = document.getElementById('fixturesChart').getContext('2d');
        var fixturesChart = new Chart(ctx, {
            type: 'bar', // Çubuk grafik
            data: {
                labels: ['İç Saha', 'Dep', 'Toplam'], // X ekseninde etiketler
                datasets: [{
                    label: 'Oynanan Maçlar', // Grafik başlığı
                    data: [
                        {{ $data['fixturesPlayedHome'] ?? 0 }},
                        {{ $data['fixturesPlayedAway'] ?? 0 }},
                        {{ $data['fixturesPlayedTotal'] ?? 0 }}
                    ], // Veriler: İç Saha, Dep ve Toplam
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.5)',  // İç saha için renk
                        'rgba(255, 99, 132, 0.5)',  // Dep için renk
                        'rgba(54, 162, 235, 0.5)'   // Toplam için renk
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',   // İç saha için kenar rengi
                        'rgba(255, 99, 132, 1)',   // Dep için kenar rengi
                        'rgba(54, 162, 235, 1)'    // Toplam için kenar rengi
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,  // Grafik boyutunun ekran boyutuna uyumlu olması
                plugins: {
                    legend: {
                        position: 'top' // Efsane (legend) üstte
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true // Y ekseninin sıfırdan başlaması
                    }
                },
                // Animasyon özelleştirmeleri (isteğe bağlı)
                animation: {
                    duration: 1000, // Animasyon süresi
                    easing: 'easeInOutBounce' // Animasyon tipi
                }
            }
        });
        var ctx = document.getElementById('yellowRedCardsChart').getContext('2d');
        var yellowRedCardsChart = new Chart(ctx, {
            type: 'bar', // Yatay çubuk grafik kullanıyoruz
            data: {
                labels: ['0-15', '16-30', '31-45', '46-60', '61-75', '76-90', '91-105', '106-120'], // Zaman dilimleri
                datasets: [
                    {
                        label: 'Sarı Kartlar', // Sarı kartlar için veri kümesi
                        data: [
                            {{ $data['yellow']['0-15']['total'] ?? 0 }},
                            {{ $data['yellow']['16-30']['total'] ?? 0 }},
                            {{ $data['yellow']['31-45']['total'] ?? 0 }},
                            {{ $data['yellow']['46-60']['total'] ?? 0 }},
                            {{ $data['yellow']['61-75']['total'] ?? 0 }},
                            {{ $data['yellow']['76-90']['total'] ?? 0 }},
                            {{ $data['yellow']['91-105']['total'] ?? 0 }},
                            {{ $data['yellow']['106-120']['total'] ?? 0 }}
                        ], // Sarı kartlar için veriler
                        backgroundColor: 'rgba(255, 159, 64, 0.5)', // Sarı kartlar için renk
                        borderColor: 'rgba(255, 159, 64, 1)', // Sarı kartlar için kenar rengi
                        borderWidth: 1
                    },
                    {
                        label: 'Kırmızı Kartlar', // Kırmızı kartlar için veri kümesi
                        data: [
                            {{ $data['red']['0-15']['total'] ?? 0 }},
                            {{ $data['red']['16-30']['total'] ?? 0 }},
                            {{ $data['red']['31-45']['total'] ?? 0 }},
                            {{ $data['red']['46-60']['total'] ?? 0 }},
                            {{ $data['red']['61-75']['total'] ?? 0 }},
                            {{ $data['red']['76-90']['total'] ?? 0 }},
                            {{ $data['red']['91-105']['total'] ?? 0 }},
                            {{ $data['red']['106-120']['total'] ?? 0 }}
                        ], // Kırmızı kartlar için veriler
                        backgroundColor: 'rgba(255, 99, 132, 0.5)', // Kırmızı kartlar için renk
                        borderColor: 'rgba(255, 99, 132, 1)', // Kırmızı kartlar için kenar rengi
                        borderWidth: 1
                    }
                ]
            },
            options: {
                responsive: true,  // Grafik boyutunun ekran boyutuna uyumlu olması
                plugins: {
                    legend: {
                        position: 'top' // Efsane (legend) üstte
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true  // Y ekseninin sıfırdan başlaması
                    }
                },
                // Animasyon özelleştirmeleri (isteğe bağlı)
                animation: {
                    duration: 1000, // Animasyon süresi
                    easing: 'easeInOutBounce' // Animasyon tipi
                }
            }
        });
     </script>
     <script>
        // Atılan ve Yenilen Goller için Bar Chart (Home Team)
        var ctx = document.getElementById('goalsChart1').getContext('2d');
        var goalsChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['İç Saha', 'Dep', 'Toplam'],
                datasets: [
                    {
                        label: 'Atılan Goller (İç Saha)',
                        data: [
                            {{ $data['homeGoalsForHome'] ?? 0 }},
                            {{ $data['homeGoalsForAway'] ?? 0 }},
                            {{ $data['homeGoalsForTotal'] ?? 0 }}
                        ],
                        backgroundColor: 'rgba(75, 192, 192, 0.5)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Yenilen Goller (İç Saha)',
                        data: [
                            {{ $data['homeGoalsAgainstHome'] ?? 0 }},
                            {{ $data['homeGoalsAgainstAway'] ?? 0 }},
                            {{ $data['homeGoalsAgainstTotal'] ?? 0 }}
                        ],
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    
        // Under/Over Chart (Home Team Atılan Goller)
        var ctx2 = document.getElementById('underOverChart1').getContext('2d');
        var underOverChart = new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['0.5 Üzerinde', '0.5 Altında', '1.5 Üzerinde', '1.5 Altında', '2.5 Üzerinde', '2.5 Altında'],
                datasets: [{
                    label: 'Atılan Goller (Under/Over)',
                    data: [
                        {{ $data['homeGoalsForUnderOver']['0.5']['over'] + $data['homeGoalsForUnderOver']['0.5']['under'] }},
                        {{ $data['homeGoalsForUnderOver']['1.5']['over'] + $data['homeGoalsForUnderOver']['1.5']['under'] }},
                        {{ $data['homeGoalsForUnderOver']['2.5']['over'] + $data['homeGoalsForUnderOver']['2.5']['under'] }},
                        {{ $data['homeGoalsForUnderOver']['3.5']['over'] + $data['homeGoalsForUnderOver']['3.5']['under'] }},
                        {{ $data['homeGoalsForUnderOver']['4.5']['over'] + $data['homeGoalsForUnderOver']['4.5']['under'] }}
                    ],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(153, 102, 255, 0.5)',
                        'rgba(255, 159, 64, 0.5)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    }
                }
            }
        });
    
        // Yenilen Goller Zaman Dağılımı (Bar Chart)
        var ctx3 = document.getElementById('goalsAgainstMinutesChart1').getContext('2d');
        var goalsAgainstMinutesChart = new Chart(ctx3, {
            type: 'bar', // Bar Chart kullanıyoruz
            data: {
                labels: ['0-15', '16-30', '31-45', '46-60', '61-75', '76-90', '91-105', '106-120'],
                datasets: [{
                    label: 'Yenilen Goller (Toplam)',
                    data: [
                        {{ $data['homeGoalsAgainstMinutes']['0-15']['total'] ?? 0 }},
                        {{ $data['homeGoalsAgainstMinutes']['16-30']['total'] ?? 0 }},
                        {{ $data['homeGoalsAgainstMinutes']['31-45']['total'] ?? 0 }},
                        {{ $data['homeGoalsAgainstMinutes']['46-60']['total'] ?? 0 }},
                        {{ $data['homeGoalsAgainstMinutes']['61-75']['total'] ?? 0 }},
                        {{ $data['homeGoalsAgainstMinutes']['76-90']['total'] ?? 0 }},
                        {{ $data['homeGoalsAgainstMinutes']['91-105']['total'] ?? 0 }},
                        {{ $data['homeGoalsAgainstMinutes']['106-120']['total'] ?? 0 }}
                    ],
                    backgroundColor: 'rgba(255, 99, 132, 0.5)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    
        // Atılan Goller Zaman Dağılımı (Bar Chart)
        var ctx4 = document.getElementById('goalsForMinutesChart1').getContext('2d');
        var goalsForMinutesChart = new Chart(ctx4, {
            type: 'bar', // Bar Chart kullanıyoruz
            data: {
                labels: ['0-15', '16-30', '31-45', '46-60', '61-75', '76-90', '91-105', '106-120'],
                datasets: [{
                    label: 'Atılan Goller (Toplam)',
                    data: [
                        {{ $data['homeGoalsForMinutes']['0-15']['total'] ?? 0 }},
                        {{ $data['homeGoalsForMinutes']['16-30']['total'] ?? 0 }},
                        {{ $data['homeGoalsForMinutes']['31-45']['total'] ?? 0 }},
                        {{ $data['homeGoalsForMinutes']['46-60']['total'] ?? 0 }},
                        {{ $data['homeGoalsForMinutes']['61-75']['total'] ?? 0 }},
                        {{ $data['homeGoalsForMinutes']['76-90']['total'] ?? 0 }},
                        {{ $data['homeGoalsForMinutes']['91-105']['total'] ?? 0 }},
                        {{ $data['homeGoalsForMinutes']['106-120']['total'] ?? 0 }}
                    ],
                    backgroundColor: 'rgba(75, 192, 192, 0.5)', // Çubukların rengi
                    borderColor: 'rgba(75, 192, 192, 1)', // Çubukların kenar rengi
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    
        // Oynanan Maçlar (Home Team) Bar Chart
        var ctx5 = document.getElementById('fixturesChart1').getContext('2d');
        var fixturesChart = new Chart(ctx5, {
            type: 'bar', // Çubuk grafik
            data: {
                labels: ['İç Saha', 'Dep', 'Toplam'],
                datasets: [{
                    label: 'Oynanan Maçlar', // Grafik başlığı
                    data: [
                        {{ $data['homeFixturesPlayedHome'] ?? 0 }},
                        {{ $data['homeFixturesPlayedAway'] ?? 0 }},
                        {{ $data['homeFixturesPlayedTotal'] ?? 0 }}
                    ], // Veriler: İç Saha, Dep ve Toplam
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.5)',  // İç saha için renk
                        'rgba(255, 99, 132, 0.5)',  // Dep için renk
                        'rgba(54, 162, 235, 0.5)'   // Toplam için renk
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',   // İç saha için kenar rengi
                        'rgba(255, 99, 132, 1)',   // Dep için kenar rengi
                        'rgba(54, 162, 235, 1)'    // Toplam için kenar rengi
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,  // Grafik boyutunun ekran boyutuna uyumlu olması
                plugins: {
                    legend: {
                        position: 'top' // Efsane (legend) üstte
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true // Y ekseninin sıfırdan başlaması
                    }
                },
                // Animasyon özelleştirmeleri (isteğe bağlı)
                animation: {
                    duration: 1000, // Animasyon süresi
                    easing: 'easeInOutBounce' // Animasyon tipi
                }
            }
        });
    
        // Sarı ve Kırmızı Kartlar (Home Team) Bar Chart
        var ctx6 = document.getElementById('yellowRedCardsChart1').getContext('2d');
        var yellowRedCardsChart = new Chart(ctx6, {
            type: 'bar', // Yatay çubuk grafik kullanıyoruz
            data: {
                labels: ['0-15', '16-30', '31-45', '46-60', '61-75', '76-90', '91-105', '106-120'],
                datasets: [
                    {
                        label: 'Sarı Kartlar', // Sarı kartlar için veri kümesi
                        data: [
                            {{ $data['homeYellow']['0-15']['total'] ?? 0 }},
                            {{ $data['homeYellow']['16-30']['total'] ?? 0 }},
                            {{ $data['homeYellow']['31-45']['total'] ?? 0 }},
                            {{ $data['homeYellow']['46-60']['total'] ?? 0 }},
                            {{ $data['homeYellow']['61-75']['total'] ?? 0 }},
                            {{ $data['homeYellow']['76-90']['total'] ?? 0 }},
                            {{ $data['homeYellow']['91-105']['total'] ?? 0 }},
                            {{ $data['homeYellow']['106-120']['total'] ?? 0 }}
                        ],
                        backgroundColor: 'rgba(255, 159, 64, 0.5)', // Sarı kartlar için renk
                        borderColor: 'rgba(255, 159, 64, 1)', // Sarı kartlar için kenar rengi
                        borderWidth: 1
                    },
                    {
                        label: 'Kırmızı Kartlar', // Kırmızı kartlar için veri kümesi
                        data: [
                            {{ $data['homeRed']['0-15']['total'] ?? 0 }},
                            {{ $data['homeRed']['16-30']['total'] ?? 0 }},
                            {{ $data['homeRed']['31-45']['total'] ?? 0 }},
                            {{ $data['homeRed']['46-60']['total'] ?? 0 }},
                            {{ $data['homeRed']['61-75']['total'] ?? 0 }},
                            {{ $data['homeRed']['76-90']['total'] ?? 0 }},
                            {{ $data['homeRed']['91-105']['total'] ?? 0 }},
                            {{ $data['homeRed']['106-120']['total'] ?? 0 }}
                        ],
                        backgroundColor: 'rgba(255, 99, 132, 0.5)', // Kırmızı kartlar için renk
                        borderColor: 'rgba(255, 99, 132, 1)', // Kırmızı kartlar için kenar rengi
                        borderWidth: 1
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                animation: {
                    duration: 1000,
                    easing: 'easeInOutBounce'
                }
            }
        });
    </script>












        @include('frontend.components.footer.footernew')


    </main>

    <!-- End Page Wrapper Area -->
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


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script>
           // 1. Atılan ve Yenilen Goller için Bar Chart
           var ctx = document.getElementById('goalsChart').getContext('2d');
           var goalsChart = new Chart(ctx, {
               type: 'bar',
               data: {
                   labels: ['İç Saha', 'Dep', 'Toplam'],
                   datasets: [{
                       label: 'Atılan Goller',
                       data: [{{ $data['goalsForHome'] }}, {{ $data['goalsForAway'] }}, {{ $data['goalsForTotal'] }}],
                       backgroundColor: 'rgba(75, 192, 192, 0.5)',
                       borderColor: 'rgba(75, 192, 192, 1)',
                       borderWidth: 1
                   }, {
                       label: 'Yenilen Goller',
                       data: [{{ $data['goalsAgainstHome'] }}, {{ $data['goalsAgainstAway'] }}, {{ $data['goalsAgainstTotal'] }}],
                       backgroundColor: 'rgba(255, 99, 132, 0.5)',
                       borderColor: 'rgba(255, 99, 132, 1)',
                       borderWidth: 1
                   }]
               },
               options: {
                   scales: {
                       y: {
                           beginAtZero: true
                       }
                   }
               }
           });
           var ctx2 = document.getElementById('underOverChart').getContext('2d');
       var underOverChart = new Chart(ctx2, {
           type: 'doughnut',
           data: {
               labels: ['0.5 Üzerinde', '0.5 Altında', '1.5 Üzerinde', '1.5 Altında', '2.5 Üzerinde', '2.5 Altında'],
               datasets: [{
                   label: 'Atılan Goller (Under/Over)',
                   data: [
                       {{ $data['goalsForUnderOver']['0.5']['over'] + $data['goalsForUnderOver']['0.5']['under'] }},
                       {{ $data['goalsForUnderOver']['1.5']['over'] + $data['goalsForUnderOver']['1.5']['under'] }},
                       {{ $data['goalsForUnderOver']['2.5']['over'] + $data['goalsForUnderOver']['2.5']['under'] }},
                       {{ $data['goalsForUnderOver']['3.5']['over'] + $data['goalsForUnderOver']['3.5']['under'] }},
                       {{ $data['goalsForUnderOver']['4.5']['over'] + $data['goalsForUnderOver']['4.5']['under'] }}
                   ],
                   backgroundColor: [
                       'rgba(75, 192, 192, 0.5)',
                       'rgba(255, 99, 132, 0.5)',
                       'rgba(54, 162, 235, 0.5)',
                       'rgba(153, 102, 255, 0.5)',
                       'rgba(255, 159, 64, 0.5)'
                   ],
                   borderColor: [
                       'rgba(75, 192, 192, 1)',
                       'rgba(255, 99, 132, 1)',
                       'rgba(54, 162, 235, 1)',
                       'rgba(153, 102, 255, 1)',
                       'rgba(255, 159, 64, 1)'
                   ],
                   borderWidth: 1
               }]
           },
           options: {
               responsive: true,
               plugins: {
                   legend: {
                       position: 'top'
                   }
               }
           }
       });
       var ctx = document.getElementById('goalsAgainstMinutesChart').getContext('2d');
       var goalsAgainstMinutesChart = new Chart(ctx, {
           type: 'bar', // Bar Chart kullanıyoruz
           data: {
               labels: ['0-15', '16-30', '31-45', '46-60', '61-75', '76-90', '91-105', '106-120'], // Zaman dilimleri
               datasets: [{
                   label: 'Yenilen Goller (Toplam)',
                   data: [
                       {{ $data['goalsAgainstMinutes']['0-15']['total'] ?? 0 }},
                       {{ $data['goalsAgainstMinutes']['16-30']['total'] ?? 0 }},
                       {{ $data['goalsAgainstMinutes']['31-45']['total'] ?? 0 }},
                       {{ $data['goalsAgainstMinutes']['46-60']['total'] ?? 0 }},
                       {{ $data['goalsAgainstMinutes']['61-75']['total'] ?? 0 }},
                       {{ $data['goalsAgainstMinutes']['76-90']['total'] ?? 0 }},
                       {{ $data['goalsAgainstMinutes']['91-105']['total'] ?? 0 }},
                       {{ $data['goalsAgainstMinutes']['106-120']['total'] ?? 0 }}
                   ], // Verilerin toplandığı alan
                   backgroundColor: 'rgba(255, 99, 132, 0.5)', // Çubukların rengi
                   borderColor: 'rgba(255, 99, 132, 1)', // Çubukların kenar rengi
                   borderWidth: 1
               }]
           },
           options: {
               responsive: true,
               plugins: {
                   legend: {
                       position: 'top'
                   }
               },
               scales: {
                   y: {
                       beginAtZero: true
                   }
               },
               // Yüzdeleri eklemek için custom tooltips
               tooltips: {
                   callbacks: {
                       afterLabel: function(tooltipItem) {
                           var percentage = {!! json_encode($data['goalsAgainstMinutes']) !!}[tooltipItem.label].percentage;
                           return ' (' + percentage + ')'; // Yüzdeyi gösteriyoruz
                       }
                   }
               }
           }
       });
       var ctx = document.getElementById('goalsForMinutesChart').getContext('2d');
       var goalsForMinutesChart = new Chart(ctx, {
           type: 'bar', // Bar Chart kullanıyoruz
           data: {
               labels: ['0-15', '16-30', '31-45', '46-60', '61-75', '76-90', '91-105', '106-120'], // Zaman dilimleri
               datasets: [{
                   label: 'Atılan Goller (Toplam)',
                   data: [
                       {{ $data['goalsForMinutes']['0-15']['total'] ?? 0 }},
                       {{ $data['goalsForMinutes']['16-30']['total'] ?? 0 }},
                       {{ $data['goalsForMinutes']['31-45']['total'] ?? 0 }},
                       {{ $data['goalsForMinutes']['46-60']['total'] ?? 0 }},
                       {{ $data['goalsForMinutes']['61-75']['total'] ?? 0 }},
                       {{ $data['goalsForMinutes']['76-90']['total'] ?? 0 }},
                       {{ $data['goalsForMinutes']['91-105']['total'] ?? 0 }},
                       {{ $data['goalsForMinutes']['106-120']['total'] ?? 0 }}
                   ], // Verilerin toplandığı alan
                   backgroundColor: 'rgba(75, 192, 192, 0.5)', // Çubukların rengi
                   borderColor: 'rgba(75, 192, 192, 1)', // Çubukların kenar rengi
                   borderWidth: 1
               }]
           },
           options: {
               responsive: true,
               plugins: {
                   legend: {
                       position: 'top'
                   },
                   tooltip: {
                       callbacks: {
                           afterLabel: function(tooltipItem) {
                               var percentage = {!! json_encode($data['goalsForMinutes']) !!}[tooltipItem.label].percentage;
                               return ' (' + percentage + ')'; // Yüzdeyi gösteriyoruz
                           }
                       }
                   }
               },
               scales: {
                   y: {
                       beginAtZero: true
                   }
               }
           }
       });
       var ctx = document.getElementById('fixturesChart').getContext('2d');
       var fixturesChart = new Chart(ctx, {
           type: 'bar', // Çubuk grafik
           data: {
               labels: ['İç Saha', 'Dep', 'Toplam'], // X ekseninde etiketler
               datasets: [{
                   label: 'Oynanan Maçlar', // Grafik başlığı
                   data: [
                       {{ $data['fixturesPlayedHome'] ?? 0 }},
                       {{ $data['fixturesPlayedAway'] ?? 0 }},
                       {{ $data['fixturesPlayedTotal'] ?? 0 }}
                   ], // Veriler: İç Saha, Dep ve Toplam
                   backgroundColor: [
                       'rgba(75, 192, 192, 0.5)',  // İç saha için renk
                       'rgba(255, 99, 132, 0.5)',  // Dep için renk
                       'rgba(54, 162, 235, 0.5)'   // Toplam için renk
                   ],
                   borderColor: [
                       'rgba(75, 192, 192, 1)',   // İç saha için kenar rengi
                       'rgba(255, 99, 132, 1)',   // Dep için kenar rengi
                       'rgba(54, 162, 235, 1)'    // Toplam için kenar rengi
                   ],
                   borderWidth: 1
               }]
           },
           options: {
               responsive: true,  // Grafik boyutunun ekran boyutuna uyumlu olması
               plugins: {
                   legend: {
                       position: 'top' // Efsane (legend) üstte
                   }
               },
               scales: {
                   y: {
                       beginAtZero: true // Y ekseninin sıfırdan başlaması
                   }
               },
               // Animasyon özelleştirmeleri (isteğe bağlı)
               animation: {
                   duration: 1000, // Animasyon süresi
                   easing: 'easeInOutBounce' // Animasyon tipi
               }
           }
       });
       var ctx = document.getElementById('yellowRedCardsChart').getContext('2d');
       var yellowRedCardsChart = new Chart(ctx, {
           type: 'bar', // Yatay çubuk grafik kullanıyoruz
           data: {
               labels: ['0-15', '16-30', '31-45', '46-60', '61-75', '76-90', '91-105', '106-120'], // Zaman dilimleri
               datasets: [
                   {
                       label: 'Sarı Kartlar', // Sarı kartlar için veri kümesi
                       data: [
                           {{ $data['yellow']['0-15']['total'] ?? 0 }},
                           {{ $data['yellow']['16-30']['total'] ?? 0 }},
                           {{ $data['yellow']['31-45']['total'] ?? 0 }},
                           {{ $data['yellow']['46-60']['total'] ?? 0 }},
                           {{ $data['yellow']['61-75']['total'] ?? 0 }},
                           {{ $data['yellow']['76-90']['total'] ?? 0 }},
                           {{ $data['yellow']['91-105']['total'] ?? 0 }},
                           {{ $data['yellow']['106-120']['total'] ?? 0 }}
                       ], // Sarı kartlar için veriler
                       backgroundColor: 'rgba(255, 159, 64, 0.5)', // Sarı kartlar için renk
                       borderColor: 'rgba(255, 159, 64, 1)', // Sarı kartlar için kenar rengi
                       borderWidth: 1
                   },
                   {
                       label: 'Kırmızı Kartlar', // Kırmızı kartlar için veri kümesi
                       data: [
                           {{ $data['red']['0-15']['total'] ?? 0 }},
                           {{ $data['red']['16-30']['total'] ?? 0 }},
                           {{ $data['red']['31-45']['total'] ?? 0 }},
                           {{ $data['red']['46-60']['total'] ?? 0 }},
                           {{ $data['red']['61-75']['total'] ?? 0 }},
                           {{ $data['red']['76-90']['total'] ?? 0 }},
                           {{ $data['red']['91-105']['total'] ?? 0 }},
                           {{ $data['red']['106-120']['total'] ?? 0 }}
                       ], // Kırmızı kartlar için veriler
                       backgroundColor: 'rgba(255, 99, 132, 0.5)', // Kırmızı kartlar için renk
                       borderColor: 'rgba(255, 99, 132, 1)', // Kırmızı kartlar için kenar rengi
                       borderWidth: 1
                   }
               ]
           },
           options: {
               responsive: true,  // Grafik boyutunun ekran boyutuna uyumlu olması
               plugins: {
                   legend: {
                       position: 'top' // Efsane (legend) üstte
                   }
               },
               scales: {
                   y: {
                       beginAtZero: true  // Y ekseninin sıfırdan başlaması
                   }
               },
               // Animasyon özelleştirmeleri (isteğe bağlı)
               animation: {
                   duration: 1000, // Animasyon süresi
                   easing: 'easeInOutBounce' // Animasyon tipi
               }
           }
       });
    </script>
    <script>
       // Atılan ve Yenilen Goller için Bar Chart (Home Team)
       var ctx = document.getElementById('goalsChart1').getContext('2d');
       var goalsChart = new Chart(ctx, {
           type: 'bar',
           data: {
               labels: ['İç Saha', 'Dep', 'Toplam'],
               datasets: [
                   {
                       label: 'Atılan Goller (İç Saha)',
                       data: [
                           {{ $data['homeGoalsForHome'] ?? 0 }},
                           {{ $data['homeGoalsForAway'] ?? 0 }},
                           {{ $data['homeGoalsForTotal'] ?? 0 }}
                       ],
                       backgroundColor: 'rgba(75, 192, 192, 0.5)',
                       borderColor: 'rgba(75, 192, 192, 1)',
                       borderWidth: 1
                   },
                   {
                       label: 'Yenilen Goller (İç Saha)',
                       data: [
                           {{ $data['homeGoalsAgainstHome'] ?? 0 }},
                           {{ $data['homeGoalsAgainstAway'] ?? 0 }},
                           {{ $data['homeGoalsAgainstTotal'] ?? 0 }}
                       ],
                       backgroundColor: 'rgba(255, 99, 132, 0.5)',
                       borderColor: 'rgba(255, 99, 132, 1)',
                       borderWidth: 1
                   }
               ]
           },
           options: {
               scales: {
                   y: {
                       beginAtZero: true
                   }
               }
           }
       });
   
       // Under/Over Chart (Home Team Atılan Goller)
       var ctx2 = document.getElementById('underOverChart1').getContext('2d');
       var underOverChart = new Chart(ctx2, {
           type: 'doughnut',
           data: {
               labels: ['0.5 Üzerinde', '0.5 Altında', '1.5 Üzerinde', '1.5 Altında', '2.5 Üzerinde', '2.5 Altında'],
               datasets: [{
                   label: 'Atılan Goller (Under/Over)',
                   data: [
                       {{ $data['homeGoalsForUnderOver']['0.5']['over'] + $data['homeGoalsForUnderOver']['0.5']['under'] }},
                       {{ $data['homeGoalsForUnderOver']['1.5']['over'] + $data['homeGoalsForUnderOver']['1.5']['under'] }},
                       {{ $data['homeGoalsForUnderOver']['2.5']['over'] + $data['homeGoalsForUnderOver']['2.5']['under'] }},
                       {{ $data['homeGoalsForUnderOver']['3.5']['over'] + $data['homeGoalsForUnderOver']['3.5']['under'] }},
                       {{ $data['homeGoalsForUnderOver']['4.5']['over'] + $data['homeGoalsForUnderOver']['4.5']['under'] }}
                   ],
                   backgroundColor: [
                       'rgba(75, 192, 192, 0.5)',
                       'rgba(255, 99, 132, 0.5)',
                       'rgba(54, 162, 235, 0.5)',
                       'rgba(153, 102, 255, 0.5)',
                       'rgba(255, 159, 64, 0.5)'
                   ],
                   borderColor: [
                       'rgba(75, 192, 192, 1)',
                       'rgba(255, 99, 132, 1)',
                       'rgba(54, 162, 235, 1)',
                       'rgba(153, 102, 255, 1)',
                       'rgba(255, 159, 64, 1)'
                   ],
                   borderWidth: 1
               }]
           },
           options: {
               responsive: true,
               plugins: {
                   legend: {
                       position: 'top'
                   }
               }
           }
       });
   
       // Yenilen Goller Zaman Dağılımı (Bar Chart)
       var ctx3 = document.getElementById('goalsAgainstMinutesChart1').getContext('2d');
       var goalsAgainstMinutesChart = new Chart(ctx3, {
           type: 'bar', // Bar Chart kullanıyoruz
           data: {
               labels: ['0-15', '16-30', '31-45', '46-60', '61-75', '76-90', '91-105', '106-120'],
               datasets: [{
                   label: 'Yenilen Goller (Toplam)',
                   data: [
                       {{ $data['homeGoalsAgainstMinutes']['0-15']['total'] ?? 0 }},
                       {{ $data['homeGoalsAgainstMinutes']['16-30']['total'] ?? 0 }},
                       {{ $data['homeGoalsAgainstMinutes']['31-45']['total'] ?? 0 }},
                       {{ $data['homeGoalsAgainstMinutes']['46-60']['total'] ?? 0 }},
                       {{ $data['homeGoalsAgainstMinutes']['61-75']['total'] ?? 0 }},
                       {{ $data['homeGoalsAgainstMinutes']['76-90']['total'] ?? 0 }},
                       {{ $data['homeGoalsAgainstMinutes']['91-105']['total'] ?? 0 }},
                       {{ $data['homeGoalsAgainstMinutes']['106-120']['total'] ?? 0 }}
                   ],
                   backgroundColor: 'rgba(255, 99, 132, 0.5)',
                   borderColor: 'rgba(255, 99, 132, 1)',
                   borderWidth: 1
               }]
           },
           options: {
               responsive: true,
               plugins: {
                   legend: {
                       position: 'top'
                   }
               },
               scales: {
                   y: {
                       beginAtZero: true
                   }
               }
           }
       });
   
       // Atılan Goller Zaman Dağılımı (Bar Chart)
       var ctx4 = document.getElementById('goalsForMinutesChart1').getContext('2d');
       var goalsForMinutesChart = new Chart(ctx4, {
           type: 'bar', // Bar Chart kullanıyoruz
           data: {
               labels: ['0-15', '16-30', '31-45', '46-60', '61-75', '76-90', '91-105', '106-120'],
               datasets: [{
                   label: 'Atılan Goller (Toplam)',
                   data: [
                       {{ $data['homeGoalsForMinutes']['0-15']['total'] ?? 0 }},
                       {{ $data['homeGoalsForMinutes']['16-30']['total'] ?? 0 }},
                       {{ $data['homeGoalsForMinutes']['31-45']['total'] ?? 0 }},
                       {{ $data['homeGoalsForMinutes']['46-60']['total'] ?? 0 }},
                       {{ $data['homeGoalsForMinutes']['61-75']['total'] ?? 0 }},
                       {{ $data['homeGoalsForMinutes']['76-90']['total'] ?? 0 }},
                       {{ $data['homeGoalsForMinutes']['91-105']['total'] ?? 0 }},
                       {{ $data['homeGoalsForMinutes']['106-120']['total'] ?? 0 }}
                   ],
                   backgroundColor: 'rgba(75, 192, 192, 0.5)', // Çubukların rengi
                   borderColor: 'rgba(75, 192, 192, 1)', // Çubukların kenar rengi
                   borderWidth: 1
               }]
           },
           options: {
               responsive: true,
               plugins: {
                   legend: {
                       position: 'top'
                   }
               },
               scales: {
                   y: {
                       beginAtZero: true
                   }
               }
           }
       });
   
       // Oynanan Maçlar (Home Team) Bar Chart
       var ctx5 = document.getElementById('fixturesChart1').getContext('2d');
       var fixturesChart = new Chart(ctx5, {
           type: 'bar', // Çubuk grafik
           data: {
               labels: ['İç Saha', 'Dep', 'Toplam'],
               datasets: [{
                   label: 'Oynanan Maçlar', // Grafik başlığı
                   data: [
                       {{ $data['homeFixturesPlayedHome'] ?? 0 }},
                       {{ $data['homeFixturesPlayedAway'] ?? 0 }},
                       {{ $data['homeFixturesPlayedTotal'] ?? 0 }}
                   ], // Veriler: İç Saha, Dep ve Toplam
                   backgroundColor: [
                       'rgba(75, 192, 192, 0.5)',  // İç saha için renk
                       'rgba(255, 99, 132, 0.5)',  // Dep için renk
                       'rgba(54, 162, 235, 0.5)'   // Toplam için renk
                   ],
                   borderColor: [
                       'rgba(75, 192, 192, 1)',   // İç saha için kenar rengi
                       'rgba(255, 99, 132, 1)',   // Dep için kenar rengi
                       'rgba(54, 162, 235, 1)'    // Toplam için kenar rengi
                   ],
                   borderWidth: 1
               }]
           },
           options: {
               responsive: true,  // Grafik boyutunun ekran boyutuna uyumlu olması
               plugins: {
                   legend: {
                       position: 'top' // Efsane (legend) üstte
                   }
               },
               scales: {
                   y: {
                       beginAtZero: true // Y ekseninin sıfırdan başlaması
                   }
               },
               // Animasyon özelleştirmeleri (isteğe bağlı)
               animation: {
                   duration: 1000, // Animasyon süresi
                   easing: 'easeInOutBounce' // Animasyon tipi
               }
           }
       });
   
       // Sarı ve Kırmızı Kartlar (Home Team) Bar Chart
       var ctx6 = document.getElementById('yellowRedCardsChart1').getContext('2d');
       var yellowRedCardsChart = new Chart(ctx6, {
           type: 'bar', // Yatay çubuk grafik kullanıyoruz
           data: {
               labels: ['0-15', '16-30', '31-45', '46-60', '61-75', '76-90', '91-105', '106-120'],
               datasets: [
                   {
                       label: 'Sarı Kartlar', // Sarı kartlar için veri kümesi
                       data: [
                           {{ $data['homeYellow']['0-15']['total'] ?? 0 }},
                           {{ $data['homeYellow']['16-30']['total'] ?? 0 }},
                           {{ $data['homeYellow']['31-45']['total'] ?? 0 }},
                           {{ $data['homeYellow']['46-60']['total'] ?? 0 }},
                           {{ $data['homeYellow']['61-75']['total'] ?? 0 }},
                           {{ $data['homeYellow']['76-90']['total'] ?? 0 }},
                           {{ $data['homeYellow']['91-105']['total'] ?? 0 }},
                           {{ $data['homeYellow']['106-120']['total'] ?? 0 }}
                       ],
                       backgroundColor: 'rgba(255, 159, 64, 0.5)', // Sarı kartlar için renk
                       borderColor: 'rgba(255, 159, 64, 1)', // Sarı kartlar için kenar rengi
                       borderWidth: 1
                   },
                   {
                       label: 'Kırmızı Kartlar', // Kırmızı kartlar için veri kümesi
                       data: [
                           {{ $data['homeRed']['0-15']['total'] ?? 0 }},
                           {{ $data['homeRed']['16-30']['total'] ?? 0 }},
                           {{ $data['homeRed']['31-45']['total'] ?? 0 }},
                           {{ $data['homeRed']['46-60']['total'] ?? 0 }},
                           {{ $data['homeRed']['61-75']['total'] ?? 0 }},
                           {{ $data['homeRed']['76-90']['total'] ?? 0 }},
                           {{ $data['homeRed']['91-105']['total'] ?? 0 }},
                           {{ $data['homeRed']['106-120']['total'] ?? 0 }}
                       ],
                       backgroundColor: 'rgba(255, 99, 132, 0.5)', // Kırmızı kartlar için renk
                       borderColor: 'rgba(255, 99, 132, 1)', // Kırmızı kartlar için kenar rengi
                       borderWidth: 1
                   }
               ]
           },
           options: {
               responsive: true,
               plugins: {
                   legend: {
                       position: 'top'
                   }
               },
               scales: {
                   y: {
                       beginAtZero: true
                   }
               },
               animation: {
                   duration: 1000,
                   easing: 'easeInOutBounce'
               }
           }
       });
   </script>
   
</body>

</html>