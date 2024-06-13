<?php

namespace Locadora\Poo\Domain\Exception;

use InvalidArgumentException;

class InvalidRateException extends InvalidArgumentException
{
    public function __construct()
    {
        parent::__construct('A nota precisa ser entre 0 e 10');
    }
}
