<?php

namespace Locadora\Poo\Domain\Calc;

use DivisionByZeroError;
use Locadora\Poo\Domain\Model\Assessment;

class RateNumToStars
{
    public function convert(Assessment $rating): float
    {
        try{
            $rate = $rating->average();

            /** convert */
            return round($rate) / 2;
        } catch (DivisionByZeroError) {
            return 0;
        }
    }
}
