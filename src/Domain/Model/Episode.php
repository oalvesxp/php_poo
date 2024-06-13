<?php

namespace Locadora\Poo\Domain\Model;

use Locadora\Poo\Domain\Model\{
    Serie, Assessment
};

class Episode implements Assessment
{
    use withRating;

    public function __construct(
        public readonly Serie $serie,
        public readonly string $name,
        public readonly int $number
    )
    {
        $this->rates = [];
    }
}