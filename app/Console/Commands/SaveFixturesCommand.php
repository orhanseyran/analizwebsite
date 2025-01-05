<?php

namespace App\Console\Commands;

use App\Models\Fixture;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use GuzzleHttp\Client;

class SaveFixturesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:mac-save-fixtures-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch and save fixtures from the API to the database';

    protected $apiKey = '8f6f85e3fdmshf983d3d33f25e49p101c0djsna47b438d86fa';
    protected $host = 'api-football-v1.p.rapidapi.com';
    protected $apiUrl = 'https://api-football-v1.p.rapidapi.com/';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = new Client();


        $leagues = [
            39,40,140,141,78,79,135,137,61,62,203,381,88,89,94,95,179,180,144,222,253,
            71,72,59,60,244,245,2,3,848,1,5,4,9,98,99,108,109,29,30,194,195
        ];




        try {
                $allData = collect();
                foreach ($leagues as $leagueId) {
                    $response = $client->get("{$this->apiUrl}v3/fixtures", [
                        'headers' => [
                            'X-RapidAPI-Key' => $this->apiKey,
                            'X-RapidAPI-Host' => $this->host,
                        ],
                        'query' => [
                            'league' => $leagueId,
                            'season' => 2024,

                        ],
                    ]);

                    $decodedData = json_decode($response->getBody(), true);
                    if (isset($decodedData['response'])) {
                        $allData = $allData->merge($decodedData['response']);
                    }
                }



            if ($allData->isEmpty()) {
                $this->info('No fixtures found for the given dates.');
                return 0;
            }

            $this->saveFixturesToDatabase($allData);

            $this->info('Fixtures successfully saved to the database.');
            return 0;
        } catch (\Exception $e) {
            $this->error('Error fetching data from the API: ' . $e->getMessage());
            return 1;
        }
    }

    private function saveFixturesToDatabase($allData)
    {
        foreach ($allData as $apiData) {
            try {
                // Tarih formatını dönüştür
                $apiData['fixture']['date'] = (new \DateTime($apiData['fixture']['date']))->format('Y-m-d H:i:s');

                // Eksik olan alanlar için kontrol yap ve varsayılan değerler ata
                $venue = $apiData['fixture']['venue'] ?? ['id' => null, 'name' => 'Unknown Venue', 'city' => 'Unknown City'];
                $status = $apiData['fixture']['status'] ?? ['long' => 'Unknown', 'short' => 'UNK', 'elapsed' => null, 'extra' => null];
                $league = $apiData['league'] ?? ['id' => null, 'name' => 'Unknown League', 'country' => 'Unknown Country', 'logo' => '', 'flag' => '', 'season' => 0, 'round' => 'Unknown Round'];
                $homeTeam = $apiData['teams']['home'] ?? ['id' => null, 'name' => 'Unknown Home Team', 'logo' => '', 'winner' => null];
                $awayTeam = $apiData['teams']['away'] ?? ['id' => null, 'name' => 'Unknown Away Team', 'logo' => '', 'winner' => null];

                // Veriyi kaydet
                if (!DB::table('fixtures')->where('fixture_id', $apiData['fixture']['id'])->exists()) {
                    DB::table('fixtures')->insert([
                        'fixture_id' => $apiData['fixture']['id'],
                        'referee' => $apiData['fixture']['referee'] ?? 'Unknown Referee',
                        'timezone' => $apiData['fixture']['timezone'] ?? 'UTC',
                        'date' => $apiData['fixture']['date'],
                        'timestamp' => $apiData['fixture']['timestamp'] ?? 0,
                        'period_first' => $apiData['fixture']['periods']['first'] ?? null,
                        'period_second' => $apiData['fixture']['periods']['second'] ?? null,
                        'venue_id' => $venue['id'] ?? null,
                        'venue_name' => $venue['name'] ?? 'Unknown Venue',
                        'venue_city' => $venue['city'] ?? 'Unknown City',
                        'status_long' => $status['long'] ?? 'Unknown',
                        'status_short' => $status['short'] ?? 'UNK',
                        'status_elapsed' => $status['elapsed'] ?? null,
                        'status_extra' => $status['extra'] ?? null,
                        'league_id' => $league['id'] ?? null,
                        'league_name' => $league['name'] ?? 'Unknown League',
                        'league_country' => $league['country'] ?? 'Unknown Country',
                        'league_logo' => $league['logo'] ?? '',
                        'league_flag' => $league['flag'] ?? '',
                        'league_season' => $league['season'] ?? 0,
                        'league_round' => $league['round'] ?? 'Unknown Round',
                        'home_team_id' => $homeTeam['id'] ?? null,
                        'home_team_name' => $homeTeam['name'] ?? 'Unknown Home Team',
                        'home_team_logo' => $homeTeam['logo'] ?? '',
                        'home_team_winner' => $homeTeam['winner'] ?? null,
                        'away_team_id' => $awayTeam['id'] ?? null,
                        'away_team_name' => $awayTeam['name'] ?? 'Unknown Away Team',
                        'away_team_logo' => $awayTeam['logo'] ?? '',
                        'away_team_winner' => $awayTeam['winner'] ?? null,
                        'goals_home' => $apiData['goals']['home'] ?? null,
                        'goals_away' => $apiData['goals']['away'] ?? null,
                        'score_halftime_home' => $apiData['score']['halftime']['home'] ?? null,
                        'score_halftime_away' => $apiData['score']['halftime']['away'] ?? null,
                        'score_fulltime_home' => $apiData['score']['fulltime']['home'] ?? null,
                        'score_fulltime_away' => $apiData['score']['fulltime']['away'] ?? null,
                        'score_extratime_home' => $apiData['score']['extratime']['home'] ?? null,
                        'score_extratime_away' => $apiData['score']['extratime']['away'] ?? null,
                        'score_penalty_home' => $apiData['score']['penalty']['home'] ?? null,
                        'score_penalty_away' => $apiData['score']['penalty']['away'] ?? null,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            } catch (\Exception $e) {
                $this->error("Error saving fixture ID {$apiData['fixture']['id']}: " . $e->getMessage());
            }
        }
    }

}
