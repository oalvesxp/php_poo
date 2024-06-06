<?php

namespace Locadora\Poo\Domain\Calc;
use Locadora\Poo\Domain\Model\Tittle;

class SprintCalc{

    private ?int $duration = 0;

    public function add(Tittle $tittle): void
    {
        $this->duration += $tittle->timeDuration();
    }

    public function durantion(): int
    {
        return $this->duration;
    }
}
