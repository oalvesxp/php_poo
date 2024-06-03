<?php

use Locadora\Poo\Domain\Model\Movie;
require_once 'vendor/autoload.php';

$filme = new Movie(
    null,
    'Top Gun: Maverick',
    2022,
    'Ação',
    8
);

var_dump($filme);
