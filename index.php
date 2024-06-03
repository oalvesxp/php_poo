<?php

use Locadora\Poo\Domain\Model\Movie;
require_once 'vendor/autoload.php';

$filme = new Movie(
    null,
    'Top Gun - Maverick',
    2022,
    'Ação'
);

$filme2 = new Movie(
    null,
    'Spider-man 2',
    2004,
    'Super-herói'
);

$filme->rate(10);
$filme->rate(8.6);
$filme->rate(3.4);
$filme->rate(9.2);

$filme2->rate(10);
$filme2->rate(9.6);
$filme2->rate(7.4);
$filme2->rate(9.2);

echo "Nome: {$filme->getName()}" . PHP_EOL;
echo "Ano de Lançamento: {$filme->getRelease()}" . PHP_EOL;
echo "Genêro: {$filme->getGenre()}" . PHP_EOL;
echo "Recomendação: {$filme->average()}/10" . PHP_EOL;

echo PHP_EOL;

echo "Nome: {$filme2->getName()}" . PHP_EOL;
echo "Ano de Lançamento: {$filme2->getRelease()}" . PHP_EOL;
echo "Genêro: {$filme2->getGenre()}" . PHP_EOL;
echo "Recomendação: {$filme2->average()}/10" . PHP_EOL;