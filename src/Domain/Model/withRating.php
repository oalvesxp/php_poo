<?php

namespace Locadora\Poo\Domain\Model;

use Locadora\Poo\Domain\Exception\InvalidRateException;

trait withRating
{
    private array $rates = [];

    /** Recebe avaliações do Título */
    /**
     * @throws InvalidRateException Se a nota for negativa ou maior que 10
     */
    public function rate(float $grade): void
    {
        if ($grade < 0 || $grade > 10) {
            throw new InvalidRateException();
        }

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