<?php

use Locadora\Poo\Domain\Model\Movie;
require_once 'vendor/autoload.php';

$filme = new Movie(
    null,
    'Top Gun: Maverick',
    2022,
    'Ação'
);

$filme->rate(10);
$filme->rate(8.6);
$filme->rate(7.4);
$filme->rate(9.2);
$filme->rate(6.5);

var_dump($filme);
echo $filme->average();
