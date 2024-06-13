<?php

namespace Locadora\Poo\Domain\Model;

abstract class Tittle 
{
    /** Avaliações */
    private array $rates;

    /** Construtor da classe Título */
    public function __construct(
        public readonly ?int $id,
        public readonly string $name,
        public readonly ?int $release,
        public readonly Genre $genre,
    ) {
        $this->rates = [];
    }

    /** Getters */
    public function getGenre(): string
    {
        return $this->genre->value;
    }

    /** Recebe avaliações do Título */
    public function rate(float $grade): void
    {
        $this->rates[] = $grade;
    }

    /** Calcula as avaliações do Título */
    public function average(): float
    {
        $sum = array_sum($this->rates);
        $count = count($this->rates);

        return $sum / $count;
    }

    /** Retorna a duração do Título */
    abstract public function timeDuration(): int;
}
