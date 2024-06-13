<?php

namespace Locadora\Poo\Domain\Model;

use Locadora\Poo\Domain\Model\Serie;
use Locadora\Poo\Domain\Model\Assessment;

class Episode implements Assessment
{
    private array $rates;

    public function __construct(
        public readonly Serie $serie,
        public readonly string $name,
        public readonly int $number
    )
    {
        $this->rates = [];
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
}