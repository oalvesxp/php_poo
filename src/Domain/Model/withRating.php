<?php

namespace Locadora\Poo\Domain\Model;

trait withRating
{
    private array $rates = [];

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