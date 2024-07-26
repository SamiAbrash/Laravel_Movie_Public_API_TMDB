<?php

namespace App\Services;

use GuzzleHttp\Client;

class TMDbService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.themoviedb.org/3/',
        ]);
    }

    public function fetchMovies($endpoint, $params = [])
    {
        $params['api_key'] = env('TMDB_API_KEY');
        $response = $this->client->request('GET', $endpoint, [
            'query' => $params
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
