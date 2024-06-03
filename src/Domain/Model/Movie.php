<?php

namespace Locadora\Poo\Domain\Model;

Class Movie {

    private ?int $id;
    private string $name;
    private ?int $release;
    private string $genre;
    
     /** Avaliações */
    private array $rates = [];

    /** Construtor da classe filme */
    public function __construct(?int $id, string $name, ?int $release, string $genre)
    {
        $this->id = $id;
        $this->name = $name;
        $this->release = $release;
        $this->genre = $genre;
    }

    /** Recebe avaliações do Filme */
    public function rate(float $value): void
    {
        $this->rates[] = $value;
    }

    /** Calcula as avaliações do Filme */
    public function average(): float
    {
        $sumRates = array_sum($this->rates);
        $countRates = count($this->rates);

        return $sumRates / $countRates;
    }
}
