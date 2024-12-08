<?php

namespace App\Services;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CryptoApiService 
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function fetchCryptocurrencies(): array
    {
        $response = $this->client->request('GET', 'https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false');

        if ($response->getStatusCode() !== 200) {
            throw new \Exception('Erreur lors de l’appel API.');
        }

        return $response->toArray();
    }
}