<?php

namespace App\Console\Commands;

use App\Models\Tahminler;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class GunlukVeritabaniKaydi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:gunluk-veritabani-kaydi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Günlük maç istatistiklerini veritabanına kaydeder';

    protected $client;
    protected $apiKey;
    protected $Host;
    protected $apiUrl;

    public function handle()
    {
        $this->apiKey = '8f6f85e3fdmshf983d3d33f25e49p101c0djsna47b438d86fa';
        $this->Host = 'api-football-v1.p.rapidapi.com';
        $this->apiUrl = 'https://api-football-v1.p.rapidapi.com/';

        function printGoalMinutes($data) {
            if(empty($data)) return "Veri Bulunamadı.\n";
            $text = "";
            foreach($data as $interval => $values) {
                $total = $values['total'] ?? '0';
                $perc  = $values['percentage'] ?? '0%';
                $text .= " - Dakika Aralığı {$interval}: Toplam {$total}, Yüzde: {$perc}\n";
            }
            return $text;
        }

        function printUnderOver($data) {
            if(empty($data)) return "Veri Bulunamadı.\n";
            $text = "";
            foreach($data as $line => $vals) {
                $over  = $vals['over'] ?? 0;
                $under = $vals['under'] ?? 0;
                $text .= " - {$line} Üzerinde: {$over}, Altında: {$under}\n";
            }
            return $text;
        }

        function printLineups($data) {
            if(empty($data)) return " - Diziliş bilgisi bulunamadı.\n";
            $text = "";
            foreach($data as $lineup) {
                $formation = $lineup['formation'] ?? 'Bilinmiyor';
                $played    = $lineup['played'] ?? 0;
                $text .= " - Diziliş: {$formation}, Uygulanan Maç Sayısı: {$played}\n";
            }
            return $text;
        }

        function printCards($data) {
            if(empty($data)) return " - Kart bilgisi bulunamadı.\n";
            $text = "";
            foreach($data as $interval => $values) {
                $total = $values['total'] ?? 0;
                $perc  = $values['percentage'] ?? '0%';
                $text .= " - Dakika Aralığı {$interval}: Kart Sayısı: {$total}, Yüzde: {$perc}\n";
            }
            return $text;
        }

        $client = new Client();
        $date = date('Y-m-d'); // Bugünün tarihi
        $sezon = date('Y'); // Bugünün yılı -> sezon için kullanılıyor

        $leagues = [
            // İngiltere
            39, 40,
            // İspanya
            140, 141,
            // Almanya
            78, 79,
            // İtalya
            135, 137,
            // Fransa
            61, 62,
            // Türkiye
            203, 381,
            // Hollanda
            88, 89,
            // Portekiz
            94, 95,
            // İskoçya
            179, 180,
            // Belçika
            144, 222,
            // ABD
            253,
            // Danimarka
            71, 72,
            // Norveç
            59, 60,
            // Finlandiya
            244, 245,
            // UEFA Kupaları
            2, 3, 848,
            // Dünya Kupası, Uluslar Ligi, Avrupa Şampiyonası, Copa America
            1, 5, 4, 9,
            // Japonya
            98, 99,
            // Güney Kore
            108, 109,
            // İsveç
            29, 30,
            // İsviçre
            194, 195,
        ];

        $allData = collect(); // Tüm verileri toplayacağımız koleksiyon

        // Liglere göre maçları çek
        foreach ($leagues as $leagueId) {
            $response = $client->request('GET', "{$this->apiUrl}v3/fixtures?league={$leagueId}&season=2024&date={$date}", [
                'headers' => [
                    'X-RapidAPI-Key' => $this->apiKey,
                    'X-RapidAPI-Host' => $this->Host
                ]
            ]);

            $decodedData = json_decode($response->getBody(), true);

            if (isset($decodedData['response'])) {
                $allData = $allData->merge($decodedData['response']);
            }
        }

        foreach ($allData as $fixture) {
            $clients = new Client([
                'headers' => [
                    'X-RapidAPI-Key' => $this->apiKey,
                    'X-RapidAPI-Host' => $this->Host
                ]
            ]);

            // Maç ID
            $match_id = $fixture['fixture']['id'];

            // Ev sahibi ve deplasman takımlarının ID'leri
            $homeTeamId = $fixture['teams']['home']['id'] ?? null;
            $awayTeamId = $fixture['teams']['away']['id'] ?? null;

            // Maça ait lig ID'si
            $currentLeagueId = $fixture['league']['id'] ?? null;
            if (!$currentLeagueId || !$homeTeamId || !$awayTeamId) {
                // Eksik veri varsa bu maçı atla
                continue;
            }

            // Deplasman takım istatistikleri
            $statsAwayResponse = $clients->get("{$this->apiUrl}v3/teams/statistics?league={$currentLeagueId}&season={$sezon}&team={$awayTeamId}");
            $statisticsDataAway = json_decode($statsAwayResponse->getBody(), true);
            $awayPerformance = $statisticsDataAway['response'] ?? [];
            sleep(2); // API limitlerini zorlamamak için ufak bir bekleme

            // Away takımı verileri çözümleniyor
            $leagueName   = $awayPerformance['league']['name'] ?? 'Lig Bilinmiyor';
            $leagueCountry= $awayPerformance['league']['country'] ?? 'Ülke Bilinmiyor';
            $leagueLogo   = $awayPerformance['league']['logo'] ?? '';
            $leagueFlag   = $awayPerformance['league']['flag'] ?? '';
            $leagueSeason = $awayPerformance['league']['season'] ?? 'Sezon Bilinmiyor';
            $leagueRound  = $awayPerformance['league']['round'] ?? 'Tur Bilinmiyor';

            $teamId       = $awayPerformance['team']['id'] ?? '';
            $teamName     = $awayPerformance['team']['name'] ?? 'Takım Adı Bulunamadı';
            $teamLogo     = $awayPerformance['team']['logo'] ?? '';
            $form         = $awayPerformance['form'] ?? 'Bilgi Yok';

            $fixturesPlayedHome  = $awayPerformance['fixtures']['played']['home'] ?? 0;
            $fixturesPlayedAway  = $awayPerformance['fixtures']['played']['away'] ?? 0;
            $fixturesPlayedTotal = $awayPerformance['fixtures']['played']['total'] ?? 0;

            $fixturesWinsHome    = $awayPerformance['fixtures']['wins']['home'] ?? 0;
            $fixturesWinsAway    = $awayPerformance['fixtures']['wins']['away'] ?? 0;
            $fixturesWinsTotal   = $awayPerformance['fixtures']['wins']['total'] ?? 0;

            $fixturesDrawsHome   = $awayPerformance['fixtures']['draws']['home'] ?? 0;
            $fixturesDrawsAway   = $awayPerformance['fixtures']['draws']['away'] ?? 0;
            $fixturesDrawsTotal  = $awayPerformance['fixtures']['draws']['total'] ?? 0;

            $fixturesLosesHome   = $awayPerformance['fixtures']['loses']['home'] ?? 0;
            $fixturesLosesAway   = $awayPerformance['fixtures']['loses']['away'] ?? 0;
            $fixturesLosesTotal  = $awayPerformance['fixtures']['loses']['total'] ?? 0;

            $goalsForHome         = $awayPerformance['goals']['for']['total']['home'] ?? 0;
            $goalsForAway         = $awayPerformance['goals']['for']['total']['away'] ?? 0;
            $goalsForTotal        = $awayPerformance['goals']['for']['total']['total'] ?? 0;

            $goalsAgainstHome     = $awayPerformance['goals']['against']['total']['home'] ?? 0;
            $goalsAgainstAway     = $awayPerformance['goals']['against']['total']['away'] ?? 0;
            $goalsAgainstTotal    = $awayPerformance['goals']['against']['total']['total'] ?? 0;

            $goalsForAvgHome      = $awayPerformance['goals']['for']['average']['home'] ?? '0';
            $goalsForAvgAway      = $awayPerformance['goals']['for']['average']['away'] ?? '0';
            $goalsForAvgTotal     = $awayPerformance['goals']['for']['average']['total'] ?? '0';

            $goalsAgainstAvgHome  = $awayPerformance['goals']['against']['average']['home'] ?? '0';
            $goalsAgainstAvgAway  = $awayPerformance['goals']['against']['average']['away'] ?? '0';
            $goalsAgainstAvgTotal = $awayPerformance['goals']['against']['average']['total'] ?? '0';

            $goalsForMinutes   = $awayPerformance['goals']['for']['minute'] ?? [];
            $goalsAgainstMinutes = $awayPerformance['goals']['against']['minute'] ?? [];

            $goalsForUnderOver    = $awayPerformance['goals']['for']['under_over'] ?? [];
            $goalsAgainstUnderOver = $awayPerformance['goals']['against']['under_over'] ?? [];

            $streakWins   = $awayPerformance['biggest']['streak']['wins'] ?? 0;
            $streakDraws  = $awayPerformance['biggest']['streak']['draws'] ?? 0;
            $streakLoses  = $awayPerformance['biggest']['streak']['loses'] ?? 0;

            $biggestWinHome  = $awayPerformance['biggest']['wins']['home'] ?? 'Yok';
            $biggestWinAway  = $awayPerformance['biggest']['wins']['away'] ?? 'Yok';
            $biggestLoseHome = $awayPerformance['biggest']['loses']['home'] ?? 'Yok';
            $biggestLoseAway = $awayPerformance['biggest']['loses']['away'] ?? 'Yok';

            $biggestGoalsForHome = $awayPerformance['biggest']['goals']['for']['home'] ?? 0;
            $biggestGoalsForAway = $awayPerformance['biggest']['goals']['for']['away'] ?? 0;
            $biggestGoalsAgainstHome = $awayPerformance['biggest']['goals']['against']['home'] ?? 0;
            $biggestGoalsAgainstAway = $awayPerformance['biggest']['goals']['against']['away'] ?? 0;

            $cleanSheetHome = $awayPerformance['clean_sheet']['home'] ?? 0;
            $cleanSheetAway = $awayPerformance['clean_sheet']['away'] ?? 0;
            $cleanSheetTotal= $awayPerformance['clean_sheet']['total'] ?? 0;

            $failedToScoreHome = $awayPerformance['failed_to_score']['home'] ?? 0;
            $failedToScoreAway = $awayPerformance['failed_to_score']['away'] ?? 0;
            $failedToScoreTotal= $awayPerformance['failed_to_score']['total'] ?? 0;

            $penaltiesTotal   = $awayPerformance['penalty']['total'] ?? 0;
            $penaltiesScored  = $awayPerformance['penalty']['scored']['total'] ?? 0;
            $penaltiesScoredPerc = $awayPerformance['penalty']['scored']['percentage'] ?? '0%';
            $penaltiesMissed  = $awayPerformance['penalty']['missed']['total'] ?? 0;
            $penaltiesMissedPerc= $awayPerformance['penalty']['missed']['percentage'] ?? '0%';

            $lineups = $awayPerformance['lineups'] ?? [];

            $yellowCardsData = $awayPerformance['cards']['yellow'] ?? [];
            $redCardsData    = $awayPerformance['cards']['red'] ?? [];

            $text = "
            {$leagueSeason} sezonunda {$leagueName} ({$leagueCountry}) liginde mücadele eden {$teamName}, genel performansını incelediğimizde şu sonuçlar göze çarpıyor:

            **Lig ve Takım Bilgileri:**
            - Lig: {$leagueName} ({$leagueCountry})
            - Lig Logosu: {$leagueLogo}
            - Lig Ülke Bayrağı: {$leagueFlag}
            - Sezon: {$leagueSeason}
            - Tur: {$leagueRound}

            - Takım ID: {$teamId}
            - Takım Adı: {$teamName}
            - Takım Logosu: {$teamLogo}
            - Son Form Durumu: '{$form}'

            **Fikstür Sonuçları:**
            - Oynanan Maçlar: İç Saha: {$fixturesPlayedHome}, Deplasman: {$fixturesPlayedAway}, Toplam: {$fixturesPlayedTotal}
            - Galibiyetler: İç Saha: {$fixturesWinsHome}, Deplasman: {$fixturesWinsAway}, Toplam: {$fixturesWinsTotal}
            - Beraberlikler: İç Saha: {$fixturesDrawsHome}, Deplasman: {$fixturesDrawsAway}, Toplam: {$fixturesDrawsTotal}
            - Mağlubiyetler: İç Saha: {$fixturesLosesHome}, Deplasman: {$fixturesLosesAway}, Toplam: {$fixturesLosesTotal}

            **Gol İstatistikleri:**
            - Atılan Goller: İç Saha: {$goalsForHome}, Deplasman: {$goalsForAway}, Toplam: {$goalsForTotal}
            - Yenen Goller: İç Saha: {$goalsAgainstHome}, Deplasman: {$goalsAgainstAway}, Toplam: {$goalsAgainstTotal}

            - Gol Ortalamaları (Maç Başı):
              - Atılan Goller: İç Saha: {$goalsForAvgHome}, Deplasman: {$goalsForAvgAway}, Toplam: {$goalsForAvgTotal}
              - Yenen Goller: İç Saha: {$goalsAgainstAvgHome}, Deplasman: {$goalsAgainstAvgAway}, Toplam: {$goalsAgainstAvgTotal}

            **Gol Zaman Dağılımları (Atılan Goller):**
            ".printGoalMinutes($goalsForMinutes)."

            **Gol Zaman Dağılımları (Yenilen Goller):**
            ".printGoalMinutes($goalsAgainstMinutes)."

            **Under/Over İstatistikleri (Atılan Goller):**
            ".printUnderOver($goalsForUnderOver)."

            **Under/Over İstatistikleri (Yenilen Goller):**
            ".printUnderOver($goalsAgainstUnderOver)."

            **En Büyük Seriler ve Maçlar:**
            - En Uzun Galibiyet Serisi: {$streakWins}
            - En Uzun Beraberlik Serisi: {$streakDraws}
            - En Uzun Mağlubiyet Serisi: {$streakLoses}

            - En Farklı Galibiyetler: İç Saha: {$biggestWinHome}, Deplasman: {$biggestWinAway}
            - En Farklı Mağlubiyetler: İç Saha: {$biggestLoseHome}, Deplasman: {$biggestLoseAway}

            - En Fazla Gol Atılan Maç: İç Saha: {$biggestGoalsForHome}, Deplasman: {$biggestGoalsForAway}
            - En Fazla Gol Yenen Maç: İç Saha: {$biggestGoalsAgainstHome}, Deplasman: {$biggestGoalsAgainstAway}

            **Defansif Başarı ve Hücum Sorunları:**
            - Clean Sheet (Gol Yemeden Bitirilen Maçlar): İç Saha: {$cleanSheetHome}, Deplasman: {$cleanSheetAway}, Toplam: {$cleanSheetTotal}
            - Gol Atılamayan Maçlar: İç Saha: {$failedToScoreHome}, Deplasman: {$failedToScoreAway}, Toplam: {$failedToScoreTotal}

            **Penaltı İstatistikleri:**
            - Toplam Penaltı: {$penaltiesTotal}
            - Atılan Penaltı: {$penaltiesScored} (%{$penaltiesScoredPerc})
            - Kaçırılan Penaltı: {$penaltiesMissed} (%{$penaltiesMissedPerc})

            **Diziliş Tercihleri:**
            ".printLineups($lineups)."

            **Kart İstatistikleri (Sarı ve Kırmızı):**
            - Sarı Kart Dağılımı:
            ".printCards($yellowCardsData)."

            - Kırmızı Kart Dağılımı:
            ".printCards($redCardsData)."
            ";

            // Home takım istatistikleri
            $statsHomeResponse = $clients->get("{$this->apiUrl}v3/teams/statistics?league={$currentLeagueId}&season={$sezon}&team={$homeTeamId}");
            $statisticsDataHome = json_decode($statsHomeResponse->getBody(), true);
            $homePerformance = $statisticsDataHome['response'] ?? [];
            sleep(2);

            // Home takımı verileri
            $leagueName   = $homePerformance['league']['name'] ?? 'Lig Bilinmiyor';
            $leagueCountry= $homePerformance['league']['country'] ?? 'Ülke Bilinmiyor';
            $leagueLogo   = $homePerformance['league']['logo'] ?? '';
            $leagueFlag   = $homePerformance['league']['flag'] ?? '';
            $leagueSeason = $homePerformance['league']['season'] ?? 'Sezon Bilinmiyor';
            $leagueRound  = $homePerformance['league']['round'] ?? 'Tur Bilinmiyor';

            $teamId       = $homePerformance['team']['id'] ?? '';
            $teamName     = $homePerformance['team']['name'] ?? 'Takım Adı Bulunamadı';
            $teamLogo     = $homePerformance['team']['logo'] ?? '';
            $form         = $homePerformance['form'] ?? 'Bilgi Yok';

            $fixturesPlayedHome  = $homePerformance['fixtures']['played']['home'] ?? 0;
            $fixturesPlayedAway  = $homePerformance['fixtures']['played']['away'] ?? 0;
            $fixturesPlayedTotal = $homePerformance['fixtures']['played']['total'] ?? 0;

            $fixturesWinsHome    = $homePerformance['fixtures']['wins']['home'] ?? 0;
            $fixturesWinsAway    = $homePerformance['fixtures']['wins']['away'] ?? 0;
            $fixturesWinsTotal   = $homePerformance['fixtures']['wins']['total'] ?? 0;

            $fixturesDrawsHome   = $homePerformance['fixtures']['draws']['home'] ?? 0;
            $fixturesDrawsAway   = $homePerformance['fixtures']['draws']['away'] ?? 0;
            $fixturesDrawsTotal  = $homePerformance['fixtures']['draws']['total'] ?? 0;

            $fixturesLosesHome   = $homePerformance['fixtures']['loses']['home'] ?? 0;
            $fixturesLosesAway   = $homePerformance['fixtures']['loses']['away'] ?? 0;
            $fixturesLosesTotal  = $homePerformance['fixtures']['loses']['total'] ?? 0;

            $goalsForHome         = $homePerformance['goals']['for']['total']['home'] ?? 0;
            $goalsForAway         = $homePerformance['goals']['for']['total']['away'] ?? 0;
            $goalsForTotal        = $homePerformance['goals']['for']['total']['total'] ?? 0;

            $goalsAgainstHome     = $homePerformance['goals']['against']['total']['home'] ?? 0;
            $goalsAgainstAway     = $homePerformance['goals']['against']['total']['away'] ?? 0;
            $goalsAgainstTotal    = $homePerformance['goals']['against']['total']['total'] ?? 0;

            $goalsForAvgHome      = $homePerformance['goals']['for']['average']['home'] ?? '0';
            $goalsForAvgAway      = $homePerformance['goals']['for']['average']['away'] ?? '0';
            $goalsForAvgTotal     = $homePerformance['goals']['for']['average']['total'] ?? '0';

            $goalsAgainstAvgHome  = $homePerformance['goals']['against']['average']['home'] ?? '0';
            $goalsAgainstAvgAway  = $homePerformance['goals']['against']['average']['away'] ?? '0';
            $goalsAgainstAvgTotal = $homePerformance['goals']['against']['average']['total'] ?? '0';

            $goalsForMinutes      = $homePerformance['goals']['for']['minute'] ?? [];
            $goalsAgainstMinutes  = $homePerformance['goals']['against']['minute'] ?? [];

            $goalsForUnderOver    = $homePerformance['goals']['for']['under_over'] ?? [];
            $goalsAgainstUnderOver = $homePerformance['goals']['against']['under_over'] ?? [];

            $streakWins   = $homePerformance['biggest']['streak']['wins'] ?? 0;
            $streakDraws  = $homePerformance['biggest']['streak']['draws'] ?? 0;
            $streakLoses  = $homePerformance['biggest']['streak']['loses'] ?? 0;

            $biggestWinHome  = $homePerformance['biggest']['wins']['home'] ?? 'Yok';
            $biggestWinAway  = $homePerformance['biggest']['wins']['away'] ?? 'Yok';
            $biggestLoseHome = $homePerformance['biggest']['loses']['home'] ?? 'Yok';
            $biggestLoseAway = $homePerformance['biggest']['loses']['away'] ?? 'Yok';

            $biggestGoalsForHome      = $homePerformance['biggest']['goals']['for']['home'] ?? 0;
            $biggestGoalsForAway      = $homePerformance['biggest']['goals']['for']['away'] ?? 0;
            $biggestGoalsAgainstHome  = $homePerformance['biggest']['goals']['against']['home'] ?? 0;
            $biggestGoalsAgainstAway  = $homePerformance['biggest']['goals']['against']['away'] ?? 0;

            $cleanSheetHome  = $homePerformance['clean_sheet']['home'] ?? 0;
            $cleanSheetAway  = $homePerformance['clean_sheet']['away'] ?? 0;
            $cleanSheetTotal = $homePerformance['clean_sheet']['total'] ?? 0;

            $failedToScoreHome    = $homePerformance['failed_to_score']['home'] ?? 0;
            $failedToScoreAway    = $homePerformance['failed_to_score']['away'] ?? 0;
            $failedToScoreTotal   = $homePerformance['failed_to_score']['total'] ?? 0;

            $penaltiesTotal       = $homePerformance['penalty']['total'] ?? 0;
            $penaltiesScored      = $homePerformance['penalty']['scored']['total'] ?? 0;
            $penaltiesScoredPerc  = $homePerformance['penalty']['scored']['percentage'] ?? '0%';
            $penaltiesMissed      = $homePerformance['penalty']['missed']['total'] ?? 0;
            $penaltiesMissedPerc  = $homePerformance['penalty']['missed']['percentage'] ?? '0%';

            $lineups = $homePerformance['lineups'] ?? [];

            $yellowCardsData = $homePerformance['cards']['yellow'] ?? [];
            $redCardsData    = $homePerformance['cards']['red'] ?? [];

            $hometext = "
            {$leagueSeason} sezonunda {$leagueName} ({$leagueCountry}) liginde mücadele eden {$teamName}, genel performansını incelediğimizde şu sonuçlar göze çarpıyor:

            **Lig ve Takım Bilgileri:**
            - Lig: {$leagueName} ({$leagueCountry})
            - Lig Logosu: {$leagueLogo}
            - Lig Ülke Bayrağı: {$leagueFlag}
            - Sezon: {$leagueSeason}
            - Tur: {$leagueRound}

            - Takım ID: {$teamId}
            - Takım Adı: {$teamName}
            - Takım Logosu: {$teamLogo}
            - Son Form Durumu: '{$form}'

            **Fikstür Sonuçları:**
            - Oynanan Maçlar: İç Saha: {$fixturesPlayedHome}, Deplasman: {$fixturesPlayedAway}, Toplam: {$fixturesPlayedTotal}
            - Galibiyetler: İç Saha: {$fixturesWinsHome}, Deplasman: {$fixturesWinsAway}, Toplam: {$fixturesWinsTotal}
            - Beraberlikler: İç Saha: {$fixturesDrawsHome}, Deplasman: {$fixturesDrawsAway}, Toplam: {$fixturesDrawsTotal}
            - Mağlubiyetler: İç Saha: {$fixturesLosesHome}, Deplasman: {$fixturesLosesAway}, Toplam: {$fixturesLosesTotal}

            **Gol İstatistikleri:**
            - Atılan Goller: İç Saha: {$goalsForHome}, Deplasman: {$goalsForAway}, Toplam: {$goalsForTotal}
            - Yenen Goller: İç Saha: {$goalsAgainstHome}, Deplasman: {$goalsAgainstAway}, Toplam: {$goalsAgainstTotal}

            - Gol Ortalamaları (Maç Başı):
              - Atılan Goller: İç Saha: {$goalsForAvgHome}, Deplasman: {$goalsForAvgAway}, Toplam: {$goalsForAvgTotal}
              - Yenen Goller: İç Saha: {$goalsAgainstAvgHome}, Deplasman: {$goalsAgainstAvgAway}, Toplam: {$goalsAgainstAvgTotal}

            **Gol Zaman Dağılımları (Atılan Goller):**
            ".printGoalMinutes($goalsForMinutes)."

            **Gol Zaman Dağılımları (Yenilen Goller):**
            ".printGoalMinutes($goalsAgainstMinutes)."

            **Under/Over İstatistikleri (Atılan Goller):**
            ".printUnderOver($goalsForUnderOver)."

            **Under/Over İstatistikleri (Yenilen Goller):**
            ".printUnderOver($goalsAgainstUnderOver)."

            **En Büyük Seriler ve Maçlar:**
            - En Uzun Galibiyet Serisi: {$streakWins}
            - En Uzun Beraberlik Serisi: {$streakDraws}
            - En Uzun Mağlubiyet Serisi: {$streakLoses}

            - En Farklı Galibiyetler: İç Saha: {$biggestWinHome}, Deplasman: {$biggestWinAway}
            - En Farklı Mağlubiyetler: İç Saha: {$biggestLoseHome}, Deplasman: {$biggestLoseAway}

            - En Fazla Gol Atılan Maç: İç Saha: {$biggestGoalsForHome}, Deplasman: {$biggestGoalsForAway}
            - En Fazla Gol Yenen Maç: İç Saha: {$biggestGoalsAgainstHome}, Deplasman: {$biggestGoalsAgainstAway}

            **Defansif Başarı ve Hücum Sorunları:**
            - Clean Sheet (Gol Yemeden Bitirilen Maçlar): İç Saha: {$cleanSheetHome}, Deplasman: {$cleanSheetAway}, Toplam: {$cleanSheetTotal}
            - Gol Atılamayan Maçlar: İç Saha: {$failedToScoreHome}, Deplasman: {$failedToScoreAway}, Toplam: {$failedToScoreTotal}

            **Penaltı İstatistikleri:**
            - Toplam Penaltı: {$penaltiesTotal}
            - Atılan Penaltı: {$penaltiesScored} (%{$penaltiesScoredPerc})
            - Kaçırılan Penaltı: {$penaltiesMissed} (%{$penaltiesMissedPerc})

            **Diziliş Tercihleri:**
            ".printLineups($lineups)."

            **Kart İstatistikleri (Sarı ve Kırmızı):**
            - Sarı Kart Dağılımı:
            ".printCards($yellowCardsData)."

            - Kırmızı Kart Dağılımı:
            ".printCards($redCardsData)."
            ";

            $tahmin = Tahminler::where('mac_id', $match_id)->first();

            if (!$tahmin) {
                $response =  Http::timeout(60)->withHeaders([
                    "Content-Type" => "application/json",
                    "Authorization" => "Bearer " . "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"
                ])->post('https://api.openai.com/v1/chat/completions', [
                    "model" => "gpt-4o",
                    "messages" => [
                        [
                            "role" => "user",
                            "content" => "
                                Sadece sana verdiğim verilere göre 10 adet iddaa tahmini yap
                                $text
                                $hometext
                            "
                        ]
                    ],
                    "temperature" => 0,
                    "max_tokens" => 2048
                ])->body();

                $response = json_decode($response, true);

                Tahminler::create([
                    'tarih' => $date,
                    'mac_id' => $match_id,
                    'tahmin' => $response['choices'][0]['message']['content']
                ]);
            }
        }
    }
}
