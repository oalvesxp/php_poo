<?php

use Locadora\Poo\Domain\Model\Genre;
use Locadora\Poo\Domain\Model\Movie;
require_once 'vendor/autoload.php';

$filme = new Movie(
    null,
    'Spider-man 2',
    2004,
    Genre::SuperHero
);

$filme->rate(10);
$filme->rate(9.6);
$filme->rate(7.4);
$filme->rate(9.2);

var_dump($filme);

echo PHP_EOL . "Nome: {$filme->getName()}" . PHP_EOL;
echo "Ano de Lançamento: {$filme->getRelease()}" . PHP_EOL;
echo "Genêro: {$filme->getGenre()}" . PHP_EOL;
echo "Recomendação: {$filme->average()}/10" . PHP_EOL;