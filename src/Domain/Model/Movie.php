<?php

namespace Locadora\Poo\Domain\Model;

Class Movie 
{
     /** Avaliações */
    private array $rates;

    /** Construtor da classe filme */
    public function __construct(
        private ?int $id,
        private string $name,
        private ?int $release,
        private Genre $genre
        )
    {
        $this->id = $id;
        $this->name = $name;
        $this->release = $release;
        $this->genre = $genre;
        $this->rates = [];
    }

    /** Getters */
    public function getName(): string
    {
        return $this->name;
    }

    public function getRelease(): ?int
    {
        return $this->release;
    }

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
