<?php

namespace Locadora\Poo\Domain\Model;

use InvalidArgumentException;

trait withRating
{
    private array $rates = [];

    /** Recebe avaliações do Título */
    /**
     * @throws InvalidArgumentException Se a nota for negativa ou maior que 10
     */
    public function rate(float $grade): void
    {
        if ($grade < 0 || $grade > 10) {
            throw new InvalidArgumentException('A nota precisa ser entre 0 e 10');
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