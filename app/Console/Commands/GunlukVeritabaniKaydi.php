<?php

namespace App\Console\Commands;

use App\Models\Fixture;
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



        $get3days = Fixture::whereBetween('date', [now(), now()->addDays(3)])
        ->orderBy('date', 'asc') // Tarihe göre sıralama
        ->get();        // Liglere göre maçları çek


        foreach ($get3days as $fixture) {


            $home =$fixture->home_team_name;
            $away = $fixture->away_team_name;
            $date = $fixture->date;
            // Maç ID
            $match_id = $fixture->fixture_id;
            $tahmin = Tahminler::where('mac_id', $match_id)->first();

            if (!$tahmin) {
                $response =  Http::timeout(60)->withHeaders([
                    "Content-Type" => "application/json",
                    "Authorization" => "Bearer " . "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"
                ])->post('https://api.openai.com/v1/chat/completions', [
                    "model" => "gpt-4o-mini",
                    "messages" => [
                        [
                            "role" => "user",
                            "content" => "
                              $home takımı ile $away takımının maçına detaylı analiz yapıp
                                Tahmin Kategorileri
                                2.5 üst
                                2.5 alt
                                3.5 üst
                                İY 1.5 üst
                                İY 0.5 alt
                                Karşılıklı gol var
                                Karşılıklı gol yok
                                Ev 1.5 üst
                                Ev 1.5 alt
                                Dep 1.5 üst
                                Dep 1.5 alt
                                En çok gol ilk yarı
                                Her iki yarıda da eşit gol olur
                                En çok gol 2. yarı
                                0-1 gol aralığı
                                2-3 gol aralığı
                                4-5 gol aralığı
                                +6 gol aralığı
                                bu tahminlerden seçerek yaz

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
                    'ev' => $home,
                    'deplasman' => $away,
                    'tahmin' => $response['choices'][0]['message']['content']
                ]);
            }
        }
    }
}
