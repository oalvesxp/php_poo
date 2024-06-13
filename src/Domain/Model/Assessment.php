<?php

namespace Locadora\Poo\Domain\Model;

interface Assessment
{
    public function rate(float $grade): void;
    public function average(): float;
}