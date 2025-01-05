<?php

namespace App\Http\Controllers;

use App\Models\AnalizOlustur;
use App\Models\blog;
use App\Models\CouponMatch;
use App\Models\Fixture;
use App\Models\Ozelsayfalar;
use App\Models\Tahminler;
use App\Models\UserToken;
use Gemini\Data\Content;
use Gemini\Laravel\Facades\Gemini;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class FrontEndController extends Controller
{
    protected $client;
    protected $apiKey;
    protected $Host;
    protected $apiUrl;
    public function __construct()
    {


        $this->apiKey = '8f6f85e3fdmshf983d3d33f25e49p101c0djsna47b438d86fa';
        $this->Host = 'api-football-v1.p.rapidapi.com';
        $this->apiUrl = 'https://api-football-v1.p.rapidapi.com/';


    }
    public function home(Request $request)
    {
        $tokenget = null;
        if (auth()->check()) {
            $token = UserToken::where('user_id', auth()->user()->id)->first();
            $tokenget = $token->token;
        }
        $kuponlar = AnalizOlustur::latest()->get();

        return view('frontend.home.indexnew', [
            'tokenget' => $tokenget
            , 'kuponlar' => $kuponlar
        ]);
    }

    public function maçlar(Request $request)
    {


        $tokenget = null;
        if (auth()->check()) {
            $token = UserToken::where('user_id', auth()->user()->id)->first();
            $tokenget = $token->token;
        }

        // Cache anahtarını belirleyin. Tarihe göre farklı anahtar kullanılır.
        // $cacheKey = "fixtures_{$date}";

        // Cache süresi (saniye cinsinden) - Örneğin 5 dakika (300 saniye)
        // $cacheDuration = 300;
        $slider = Ozelsayfalar::where("sayfa_adi", "Slider")->get();
        $blog = blog::limit(2)->get();
        $blog15 = blog::limit(15)->get();









            // Türkiye saatine göre tarihleri dönüştürme
            // $allData->transform(function ($match) {
            //     // Maç saatini dönüştür
            //     $dateTime = new \DateTime($match['fixture']['date']);
            //     $dateTime->setTimezone(new \DateTimeZone('Europe/Istanbul'));  // Türkiye saatine ayarla
            //     $match['fixture']['date'] = $dateTime->format('Y-m-d H:i:s'); // Yeni tarihi formatla

            //     return $match;
            // });

            // Tarihe göre küçükten büyüğe sıralama
            // $allData = $allData->sortBy(function ($match) {
            //     return $match['fixture']['date'];
            // });



            return view('frontend.maçanalizler.index', [


                'slider' => $slider
                , 'tokenget' => $tokenget
                , 'blog' => $blog
                , 'blog15' => $blog15
            ]);

    }


public function detail($id)
{
    $tokenget = null;
    if (auth()->check()) {
        $token = UserToken::where('user_id', auth()->user()->id)->first();
        $tokenget = $token->token;
    }
    $client = new Client([
        'headers' => [
            'X-RapidAPI-Key' => $this->apiKey,
            'X-RapidAPI-Host' => $this->Host
        ]
    ]);

    try {
        // Maç detayını al
        $response = $client->get("{$this->apiUrl}v3/fixtures?id={$id}");
        $data = json_decode($response->getBody(), true);
        if (!isset($data['response'][0])) {
            return view('frontend.maçanalizler.detail', [
                'error' => 'Maç detay verisi bulunamadı.'
            ]);
        }

        $matchDetail = $data['response'][0];

        // Parametreleri al
        $leagueId = $matchDetail["league"]["id"] ?? null;
        $season = $matchDetail["league"]["season"] ?? null;
        $homeTeamId = $matchDetail["teams"]["home"]["id"] ?? null;
        $awayTeamId = $matchDetail["teams"]["away"]["id"] ?? null;

        if (!$leagueId || !$season || !$homeTeamId || !$awayTeamId) {
            return view('frontend.maçanalizler.detail', [
                'error' => 'Gerekli maç detay bilgileri alınamadı.'
            ]);
        }

        // Ev sahibi takımın teknik direktörleri
        $coachesResponsehome = $client->get("{$this->apiUrl}v3/coachs?team={$homeTeamId}");
        $coachesData = json_decode($coachesResponsehome->getBody(), true);
        $coacheshome = $coachesData['response'] ?? [];

        // Deplasman takımın teknik direktörleri
        $coachesawayResponse = $client->get("{$this->apiUrl}v3/coachs?team={$awayTeamId}");
        $coachesData = json_decode($coachesawayResponse->getBody(), true);
        $coachesaway = $coachesData['response'] ?? [];

        // Ev sahibi takım transferleri
        $transfersResponsehome = $client->get("{$this->apiUrl}v3/transfers?team={$homeTeamId}");
        $transfersData = json_decode($transfersResponsehome->getBody(), true);
        $transfershome = $transfersData['response'] ?? [];

        // Deplasman takım transferleri
        $transfersResponseaway = $client->get("{$this->apiUrl}v3/transfers?team={$awayTeamId}");
        $transfersData = json_decode($transfersResponseaway->getBody(), true);
        $transfersaway = $transfersData['response'] ?? [];

        // Son 5 transferi çek
        $lastfivetransferhome = array_slice($transfershome, -5);
        $lastfivetransferaway = array_slice($transfersaway, -5);

        // Ev sahibi takım istatistikleri
        $statsHomeResponse = $client->get("{$this->apiUrl}v3/teams/statistics?league={$leagueId}&season={$season}&team={$homeTeamId}");
        $statisticsDataHome = json_decode($statsHomeResponse->getBody(), true);
        $homePerformance = $statisticsDataHome['response'] ?? [];

        // Deplasman takım istatistikleri
        $statsAwayResponse = $client->get("{$this->apiUrl}v3/teams/statistics?league={$leagueId}&season={$season}&team={$awayTeamId}");
        $statisticsDataAway = json_decode($statsAwayResponse->getBody(), true);
        $awayPerformance = $statisticsDataAway['response'] ?? [];

        // Ek verileri düzenle
        $data = [
            // Away Team
            'leagueSeason'            => $awayPerformance['league']['season'] ?? 'Sezon Bilinmiyor',
            'leagueName'              => $awayPerformance['league']['name'] ?? 'Lig Bilinmiyor',
            'leagueCountry'           => $awayPerformance['league']['country'] ?? 'Ülke Bilinmiyor',
            'teamName'                => $awayPerformance['team']['name'] ?? 'Takım Adı Bulunamadı',
            'form'                    => $awayPerformance['form'] ?? 'Bilgi Yok',
            'fixturesPlayedHome'      => $awayPerformance['fixtures']['played']['home'] ?? 0,
            'fixturesPlayedAway'      => $awayPerformance['fixtures']['played']['away'] ?? 0,
            'fixturesPlayedTotal'     => $awayPerformance['fixtures']['played']['total'] ?? 0,
            'goalsForHome'            => $awayPerformance['goals']['for']['total']['home'] ?? 0,
            'goalsForAway'            => $awayPerformance['goals']['for']['total']['away'] ?? 0,
            'goalsForTotal'           => $awayPerformance['goals']['for']['total']['total'] ?? 0,
            'goalsAgainstHome'        => $awayPerformance['goals']['against']['total']['home'] ?? 0,
            'goalsAgainstAway'        => $awayPerformance['goals']['against']['total']['away'] ?? 0,
            'goalsAgainstTotal'       => $awayPerformance['goals']['against']['total']['total'] ?? 0,
            'goalsForMinutes'         => $awayPerformance['goals']['for']['minute'] ?? [],
            'goalsAgainstMinutes'     => $awayPerformance['goals']['against']['minute'] ?? [],
            'goalsForUnderOver'       => $awayPerformance['goals']['for']['under_over'] ?? [],
            'goalsAgainstUnderOver'   => $awayPerformance['goals']['against']['under_over'] ?? [],
            'streakWins'              => $awayPerformance['biggest']['streak']['wins'] ?? 0,
            'streakDraws'             => $awayPerformance['biggest']['streak']['draws'] ?? 0,
            'streakLoses'             => $awayPerformance['biggest']['streak']['loses'] ?? 0,
            'yellow'                  => $awayPerformance['cards']['yellow'] ?? [],
            'red'                     => $awayPerformance['cards']['red'] ?? [],

            // Home Team
            'homeFixturesPlayedHome'  => $homePerformance['fixtures']['played']['home'] ?? 0,
            'homeFixturesPlayedAway'  => $homePerformance['fixtures']['played']['away'] ?? 0,
            'homeFixturesPlayedTotal' => $homePerformance['fixtures']['played']['total'] ?? 0,
            'homeGoalsForHome'        => $homePerformance['goals']['for']['total']['home'] ?? 0,
            'homeGoalsForAway'        => $homePerformance['goals']['for']['total']['away'] ?? 0,
            'homeGoalsForTotal'       => $homePerformance['goals']['for']['total']['total'] ?? 0,
            'homeGoalsAgainstHome'    => $homePerformance['goals']['against']['total']['home'] ?? 0,
            'homeGoalsAgainstAway'    => $homePerformance['goals']['against']['total']['away'] ?? 0,
            'homeGoalsAgainstTotal'   => $homePerformance['goals']['against']['total']['total'] ?? 0,
            'homeGoalsForMinutes'     => $homePerformance['goals']['for']['minute'] ?? [],
            'homeGoalsAgainstMinutes' => $homePerformance['goals']['against']['minute'] ?? [],
            'homeGoalsForUnderOver'   => $homePerformance['goals']['for']['under_over'] ?? [],
            'homeGoalsAgainstUnderOver'=> $homePerformance['goals']['against']['under_over'] ?? [],
            'homeStreakWins'          => $homePerformance['biggest']['streak']['wins'] ?? 0,
            'homeStreakDraws'         => $homePerformance['biggest']['streak']['draws'] ?? 0,
            'homeStreakLoses'         => $homePerformance['biggest']['streak']['loses'] ?? 0,
            'homeYellow'              => $homePerformance['cards']['yellow'] ?? [],
            'homeRed'                 => $homePerformance['cards']['red'] ?? [],
        ];

        // Tahmin (Yapay Zeka Tahmini)
        $tahmin = Tahminler::where('mac_id', $id)->first();
        $yapayzeka = '';
        if ($tahmin) {
            $yapayzeka = $tahmin->tahmin;
            // Başlıkları büyük harfle
            $yapayzeka = preg_replace_callback('/^([A-Za-z0-9 ]+):/m', function ($matches) {
                return strtoupper($matches[0]);
            }, $yapayzeka);

            // ###, #### gibi işaretleri temizle
            $yapayzeka = preg_replace('/^#+\s*/m', '', $yapayzeka);
            // Yeni satırları <br> ile değiştir
            $yapayzeka = str_replace("\n", "<br>", $yapayzeka);
        }

        // Head-to-head (H2H) son 10 maç
        $headToHeadResponse = $client->get("{$this->apiUrl}v3/fixtures/headtohead?h2h={$homeTeamId}-{$awayTeamId}&last=10");
        $headToHeadData = json_decode($headToHeadResponse->getBody(), true);
        $headToHeadMatches = $headToHeadData['response'] ?? [];

        // Ev sahibi son 5 maç
        $homeFixturesResponse = $client->get("{$this->apiUrl}v3/fixtures?team={$homeTeamId}&last=5");
        $homeFixtures = json_decode($homeFixturesResponse->getBody(), true)['response'] ?? [];

        // Deplasman son 5 maç
        $awayFixturesResponse = $client->get("{$this->apiUrl}v3/fixtures?team={$awayTeamId}&last=5");
        $awayFixtures = json_decode($awayFixturesResponse->getBody(), true)['response'] ?? [];

        // Kadrolar
        $lineupsResponse = $client->get("{$this->apiUrl}v3/fixtures/lineups?fixture={$id}");
        $lineupsData = json_decode($lineupsResponse->getBody(), true);
        $lineups = $lineupsData['response'] ?? [];

        // Ev sahibi oyuncular
        $playershomeResponse = $client->get("{$this->apiUrl}v3/players/squads?team={$homeTeamId}");
        $playersDataHome = json_decode($playershomeResponse->getBody(), true);
        $playershome = $playersDataHome['response'][0]['players'] ?? [];

        // Deplasman oyuncular
        $playersawayResponse = $client->get("{$this->apiUrl}v3/players/squads?team={$awayTeamId}");
        $playersDataAway = json_decode($playersawayResponse->getBody(), true);
        $playersaway = $playersDataAway['response'][0]['players'] ?? [];

        // Ev sahibi oyuncu istatistikleri (2024)
        $playershomestaticResponse = $client->get("{$this->apiUrl}v3/players?team={$homeTeamId}&season=2024");
        $playershomesData = json_decode($playershomestaticResponse->getBody(), true);
        $getstatichomeplayer = $playershomesData['response'] ?? [];

        // Deplasman oyuncu istatistikleri (2024)
        $playersawaystaticResponse = $client->get("{$this->apiUrl}v3/players?team={$awayTeamId}&season=2024");
        $playersawaysData = json_decode($playersawaystaticResponse->getBody(), true);
        $getstaticawayplayer = $playersawaysData['response'] ?? [];

        // Sakatlıklar
        $injuresResponse = $client->get("{$this->apiUrl}v3/injuries?fixture=$id");
        $injuriesData = json_decode($injuresResponse->getBody(), true);
        $injuries = $injuriesData['response'] ?? [];


        // Lig sıralamaları
        $standingsResponse = $client->get("{$this->apiUrl}v3/standings?league={$leagueId}&season={$season}");
        $standingsData = json_decode($standingsResponse->getBody(), true);
        $standings = $standingsData['response'][0]['league']['standings'][0] ?? [];

        // Maç tahmini (Prediction)
        $predectResponse = $client->get("{$this->apiUrl}v3/predictions?fixture={$id}");
        $predictData = json_decode($predectResponse->getBody(), true);
        $predict = $predictData['response'][0] ?? [];

        // İç/Dış saha puanlarını hesapla
        foreach ($standings as $index => $team) {
            $homeWin = $team['home']['win'] ?? 0;
            $homeDraw = $team['home']['draw'] ?? 0;
            $homePoints = ($homeWin * 3) + $homeDraw;

            $awayWin = $team['away']['win'] ?? 0;
            $awayDraw = $team['away']['draw'] ?? 0;
            $awayPoints = ($awayWin * 3) + $awayDraw;

            $standings[$index]['home_points'] = $homePoints;
            $standings[$index]['away_points'] = $awayPoints;
        }

        // İç saha sıralaması
        $homeStandings = collect($standings)->sortByDesc('home_points')->values()->all();

        // Dış saha sıralaması
        $awayStandings = collect($standings)->sortByDesc('away_points')->values()->all();

        // Genel sıralama
        $overallStandings = collect($standings)->sortByDesc('points')->values()->all();

        return view('frontend.maçanalizler.detail', [
            'maçdetay'              => $matchDetail,
            'tokenget'           => $tokenget,
            'statisticsDataHome'    => $statisticsDataHome,
            'statisticsDataAway'    => $statisticsDataAway,
            'homePerformance'       => $homePerformance,
            'awayPerformance'       => $awayPerformance,
            'homeStandings'         => $homeStandings,
            'awayStandings'         => $awayStandings,
            'overallStandings'      => $overallStandings,
            'yapayzeka'             => $yapayzeka,
            'headToHeadMatches'     => $headToHeadMatches,
            'homeFixtures'          => $homeFixtures,
            'awayFixtures'          => $awayFixtures,
            'lineups'               => $lineups,
            'playershome'           => $playershome,
            'playersaway'           => $playersaway,
            'getstatichomeplayer'  => $getstatichomeplayer,
            'getstaticawayplayer'   => $getstaticawayplayer,

            'coacheshome'           => $coacheshome,
            'coachesaway'           => $coachesaway,
            'lastfivetransferhome'  => $lastfivetransferhome,
            'lastfivetransferaway'  => $lastfivetransferaway,
            'predict'               => $predict,
            'injuries'              => $injuries,
            'standings'             => $standings,
            'data'                  => $data,

        ]);
    } catch (\Exception $e) {
        return view('frontend.maçanalizler.detail', [
            'error' => 'Verilere erişilirken bir hata oluştu. Lütfen daha sonra tekrar deneyin.',
        ]);
    }
}
public function about(){
    $tokenget = null;
    if (auth()->check()) {
        $token = UserToken::where('user_id', auth()->user()->id)->first();
        $tokenget = $token->token;
    }
    return view('frontend.about.index',[
        'tokenget' => $tokenget
    ]);
}


public function blog(){
    $random = blog::inRandomOrder()->limit(1)->get();
    $latest = blog::latest()->limit(3)->get();
    $blog = blog::paginate(3);
    $tokenget = null;
    if (auth()->check()) {
        $token = UserToken::where('user_id', auth()->user()->id)->first();
        $tokenget = $token->token;
    }

    return view("frontend.blog.index",[
        'blog' => $blog,
        'tokenget' => $tokenget,
        'random' => $random,
        'latest' => $latest
    ]);
}

public function blogdetail($id){
    $blog = blog::find($id);
    $latest = blog::inRandomOrder()->limit(3)->get();
    $tokenget = null;
    if (auth()->check()) {
        $token = UserToken::where('user_id', auth()->user()->id)->first();
        $tokenget = $token->token;
    }
    return view("frontend.blog.detail.detail",[
        'blog' => $blog
        ,'tokenget' => $tokenget
        ,'latest' => $latest
    ]);
}


// Yardımcı Fonksiyonlar (Dilerseniz ayrı bir yardımcı sınıfa taşıyın)
function printGoalMinutes($data) {
    if (empty($data)) return "Veri Bulunamadı.\n";
    $text = "";
    foreach ($data as $interval => $values) {
        $total = $values['total'] ?? '0';
        $perc  = $values['percentage'] ?? '0%';
        $text .= " - Dakika Aralığı {$interval}: Toplam {$total}, Yüzde: {$perc}\n";
    }
    return $text;
}

function printUnderOver($data) {
    if (empty($data)) return "Veri Bulunamadı.\n";
    $text = "";
    foreach ($data as $line => $vals) {
        $over  = $vals['over'] ?? 0;
        $under = $vals['under'] ?? 0;
        $text .= " - {$line} Üzerinde: {$over}, Altında: {$under}\n";
    }
    return $text;
}

function printLineups($data) {
    if (empty($data)) return " - Diziliş bilgisi bulunamadı.\n";
    $text = "";
    foreach ($data as $lineup) {
        $formation = $lineup['formation'] ?? 'Bilinmiyor';
        $played    = $lineup['played'] ?? 0;
        $text .= " - Diziliş: {$formation}, Uygulanan Maç Sayısı: {$played}\n";
    }
    return $text;
}

function printCards($data) {
    if (empty($data)) return " - Kart bilgisi bulunamadı.\n";
    $text = "";
    foreach ($data as $interval => $values) {
        $total = $values['total'] ?? 0;
        $perc  = $values['percentage'] ?? '0%';
        $text .= " - Dakika Aralığı {$interval}: Kart Sayısı: {$total}, Yüzde: {$perc}\n";
    }
    return $text;
}

    public function contact()
    {
        $tokenget = null;
        if (auth()->check()) {
            $token = UserToken::where('user_id', auth()->user()->id)->first();
            $tokenget = $token->token;
        }
        return view('frontend.contact.contact',
    [
                'tokenget' => $tokenget
            ]);
    }
    public function haberler()
    {
        $tokenget = null;
        if (auth()->check()) {
            $token = UserToken::where('user_id', auth()->user()->id)->first();
            $tokenget = $token->token;
        }
        $blog = blog::paginate(15);

        $latest = blog::latest()->limit(3)->get();
        return view('frontend.haberler.haberler',[
            'blog' => $blog,
            'latest' => $latest
            ,'tokenget' => $tokenget

        ]);
    }
    public function haberdetay($id)
    {
        $tokenget = null;
        if (auth()->check()) {
            $token = UserToken::where('user_id', auth()->user()->id)->first();
            $tokenget = $token->token;
        }
        $blog = blog::findorfail($id);
        $öncekblog = blog::where('id','<',$id)->orderBy('id','desc')->first();
        $sonrakiblog = blog::where('id','>',$id)->orderBy('id','asc')->first();

        return view('frontend.haberler.haberdetail',[
            'blog' => $blog,
            'öncekblog' => $öncekblog,
            'sonrakiblog' =>$sonrakiblog,
            'tokenget' => $tokenget
        ]);

    }
    public function analizler()
{
    $tokenget = null;
    if (auth()->check()) {
        $token = UserToken::where('user_id', auth()->user()->id)->first();
        $tokenget = $token->token;
    }
    return view("frontend.ilanlar.index",[
        'tokenget' => $tokenget
    ]);

}
public function analizdetay($id)
{
    $tokenget = null;
    if (auth()->check()) {
        $token = UserToken::where('user_id', auth()->user()->id)->first();
        $tokenget = $token->token;
    }
    $anaanaliz = AnalizOlustur::findorfail($id);


    $cuponlar = CouponMatch::where('kupon_id',$anaanaliz->id)->get();

    return view("frontend.ilanlar.detay",[
            'tokenget' => $tokenget,
            'anaanaliz' => $anaanaliz,
            'cuponlar' => $cuponlar
    ]);
}




    //
}
