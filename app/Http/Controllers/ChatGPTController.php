<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ChatGPTController extends Controller
{
    /**
     * Kullanıcıdan gelen prompt ile ChatGPT'yi tetikleyen method
     */
    public function askChatGPT(Request $request)
    {
        // API anahtarını .env dosyasından alıyoruz
        $apiKey = env('OPENAI_API_KEY');
        $prompt = $request->input('prompt');  // Kullanıcıdan gelen prompt

        if (!$prompt) {
            return back()->withErrors(['prompt' => 'Lütfen bir soru giriniz.']);
        }

        // Guzzle ile OpenAI API'ye istek gönderiyoruz
        $client = new Client();
        $response = $client->post('https://api.openai.com/v1/chat/completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . $apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => 'gpt-3.5-turbo',  // Güncel model
                'messages' => [
                    ['role' => 'system', 'content' => 'You are a helpful assistant.'],
                    ['role' => 'user', 'content' => $prompt]
                ],
                'max_tokens' => 150,  // Maksimum cevap uzunluğu
            ],
        ]);

        // API cevabını işleyip Blade template'ine gönderiyoruz
        $data = json_decode($response->getBody(), true);
        $chatGPTResponse = $data['choices'][0]['message']['content'];

        // Kullanıcıya cevabı gösteriyoruz
        return view('chatgpt.result', ['response' => $chatGPTResponse]);
    }


    /**
     * Prompt girişi yapılacak formun gösterimi
     */
    public function showForm()
    {
        return view('chatgpt.form');
    }
}
