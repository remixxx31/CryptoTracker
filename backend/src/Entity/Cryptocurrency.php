<?php

namespace App\Entity;

use App\Repository\CryptocurrencyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CryptocurrencyRepository::class)]
class Cryptocurrency
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $symbol = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\Column]
    private ?float $marketCap = null;

    #[ORM\Column(nullable: true)]
    private ?float $volume24h = null;

    #[ORM\Column(nullable: true)]
    private ?float $circulatingSupply = null;

    #[ORM\Column(nullable: true)]
    private ?float $change24h = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    public function setSymbol(string $symbol): static
    {
        $this->symbol = $symbol;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getMarketCap(): ?float
    {
        return $this->marketCap;
    }

    public function setMarketCap(float $marketCap): static
    {
        $this->marketCap = $marketCap;

        return $this;
    }

    public function getVolume24h(): ?float
    {
        return $this->volume24h;
    }

    public function setVolume24h(?float $volume24h): static
    {
        $this->volume24h = $volume24h;

        return $this;
    }

    public function getCirculatingSupply(): ?float
    {
        return $this->circulatingSupply;
    }

    public function setCirculatingSupply(?float $circulatingSupply): static
    {
        $this->circulatingSupply = $circulatingSupply;

        return $this;
    }

    public function getChange24h(): ?float
    {
        return $this->change24h;
    }

    public function setChange24h(?float $change24h): static
    {
        $this->change24h = $change24h;

        return $this;
    }
}
