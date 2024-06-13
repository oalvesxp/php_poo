<?php

namespace Locadora\Poo\Domain\Calc;

use Locadora\Poo\Domain\Model\Assessment;

class RateNumToStars
{
    public function convert(Assessment $rating): float
    {
        $rate = $rating->average();

        /** convert */
        return round($rate) / 2;
    }
}
