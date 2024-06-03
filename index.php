<?php

use Locadora\Poo\Domain\Model\Movie;
require_once 'vendor/autoload.php';

$filme = new Movie(
    null,
    'Top Gun - Maverick',
    2022,
    'Ação'
);

$filme->rate(10);
$filme->rate(8.6);
$filme->rate(3.4);
$filme->rate(9.2);
$filme->rate(6.5);

echo "Nome: {$filme->getName()}" . PHP_EOL;
echo "Ano de Lançamento: {$filme->getRelease()}" . PHP_EOL;
echo "Genêro: {$filme->getGenre()}" . PHP_EOL;
echo "Recomendação: {$filme->average()}/10" . PHP_EOL;
