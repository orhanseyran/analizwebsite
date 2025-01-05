<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiSportsController extends Controller
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
    public function getSports(){
        $client = new Client();
        $date = date('2024-12-13'); // Bugünün tarihini alır, örnek: 2024-12-13
        $response = $client->request('GET', "{$this->apiUrl}v3/fixtures?date={$date}", [
            'headers' => [
                'X-RapidAPI-Key' => $this->apiKey,
                'X-RapidAPI-Host' => $this->Host
            ]
        ]);

        $data = json_decode($response->getBody(), true);
        dd($data); // Gelen veriyi döker
    }
    public function getSportsDetail($id)
    {
        $client = new Client();
        $response = $client->request('GET', "{$this->apiUrl}v3/fixtures?id={$id}", [
            'headers' => [
                'X-RapidAPI-Key' => $this->apiKey,
                'X-RapidAPI-Host' => $this->Host
            ]
        ]);
        $client = new Client();
        $statistics= $client->request('GET', "{$this->apiUrl}v3/fixtures/statistics?fixture={$id}", [
            'headers' => [
                'X-RapidAPI-Key' => '8f6f85e3fdmshf983d3d33f25e49p101c0djsna47b438d86fa',
                'X-RapidAPI-Host' => 'api-football-v1.p.rapidapi.com'
            ]
        ]);
        $statisticsData = json_decode($statistics->getBody(), true);
        dd($statisticsData);
        $data = json_decode($response->getBody(), true);
        dd($data); // Gelen veriyi döker

    }
    public function getSportsTahmin()
    {

        $client = new Client();
        $response = $client->request('GET', "{$this->apiUrl}v3/fixtures/statistics?fixture=215662", [
            'headers' => [
                'X-RapidAPI-Key' => '8f6f85e3fdmshf983d3d33f25e49p101c0djsna47b438d86fa',
                'X-RapidAPI-Host' => 'api-football-v1.p.rapidapi.com'
            ]
        ]);




        $data = json_decode($response->getBody(), true);
        dd($data); // Gelen veriyi döker

    // Hata durumunda bir mesaj döndür
    return ['error' => 'API çağrısı başarısız oldu'];
    }

}
