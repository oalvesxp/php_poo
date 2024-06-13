<?php

use Locadora\Poo\Domain\Calc\RateNumToStars;
use Locadora\Poo\Domain\Model\{
    Genre, Movie
};

require_once 'vendor/autoload.php';

$filme = new Movie(
    null,
    'Spider-man 2',
    2004,
    Genre::SuperHero,
    127
);

$filme->rate(10);
$filme->rate(9.6);
$filme->rate(7.4);
$filme->rate(9.2);

var_dump($filme);

echo PHP_EOL . "Nome: {$filme->name}" . PHP_EOL;
echo "Ano de Lançamento: {$filme->release}" . PHP_EOL;
echo "Genêro: {$filme->getGenre()}" . PHP_EOL;
echo "Recomendação: {$filme->average()}/10" . PHP_EOL;
echo "Duração: {$filme->timeMin} Minutos" . PHP_EOL;

$convert = new RateNumToStars();
echo $convert->convert($filme) . " Estrelas";
