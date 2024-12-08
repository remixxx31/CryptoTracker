<?php

namespace App\DataProvider;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProviderInterface;
use App\Entity\Cryptocurrency;
use App\Services\CryptoApiService;



class CryptocurrencyDataProvider implements ProviderInterface
{
    private $cryptoApiService;

    public function __construct(CryptoApiService $cryptoApiService)
    {
        $this->cryptoApiService = $cryptoApiService;
    }

    public function provide(Operation $operation, array $uriVariables = [], array $context = []): iterable
    {
        $cryptocurrencies = $this->cryptoApiService->fetchCryptocurrencies();

        foreach ($cryptocurrencies as $cryptoData) {
            $cryptocurrency = (new Cryptocurrency())
                ->setName($cryptoData['name'])
                ->setSymbol($cryptoData['symbol'])
                ->setPrice($cryptoData['current_price'])
                ->setMarketCap($cryptoData['market_cap'])
                ->setVolume24h($cryptoData['total_volume'])
                ->setChange24h($cryptoData['price_change_percentage_24h']);

            yield $cryptocurrency;
        }
    }
}
