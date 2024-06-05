<?php

namespace Locadora\Poo\Domain\Model;

Class Movie 
{
     /** Avaliações */
    private array $rates;

    /** Construtor da classe filme */
    public function __construct(
        public readonly ?int $id,
        public readonly string $name,
        public readonly ?int $release,
        public readonly Genre $genre,
        public readonly ?int $timeMin
        )
    {
        $this->rates = [];
    }

    /** Getters */
    public function getGenre(): string
    {
        return $this->genre->value;
    }

    /** Recebe avaliações do Filme */
    public function rate(float $grade): void
    {
        $this->rates[] = $grade;
    }

    /** Calcula as avaliações do Filme */
    public function average(): float
    {
        $sumRates = array_sum($this->rates);
        $countRates = count($this->rates);

        return $sumRates / $countRates;
    }
}
