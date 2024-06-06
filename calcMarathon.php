<?php

use Locadora\Poo\Domain\Model\Genre;
use Locadora\Poo\Domain\Model\Movie;
use Locadora\Poo\Domain\Model\Serie;
use Locadora\Poo\Domain\Calc\SprintCalc;

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

/** Descrevendo Filme */
echo PHP_EOL . "Nome: {$filme->name}" . PHP_EOL;
echo "Ano de Lançamento: {$filme->release}" . PHP_EOL;
echo "Genêro: {$filme->getGenre()}" . PHP_EOL;
echo "Recomendação: {$filme->average()}/10" . PHP_EOL;
echo "Duração: {$filme->timeMin} Minutos" . PHP_EOL;

$serie = new Serie(
    null,
    'Breaking Bad',
    2008,
    Genre::Drama,
    5,
    13,
    47
);

$serie->rate(10);
$serie->rate(9.6);
$serie->rate(8.6);
$serie->rate(9.8);

/** Descrevendo Serie */
echo PHP_EOL . "Nome: {$serie->name}" . PHP_EOL;
echo "Ano de Lançamento: {$serie->release}" . PHP_EOL;
echo "Genêro: {$serie->getGenre()}" . PHP_EOL;
echo "Recomendação: {$serie->average()}/10" . PHP_EOL;
echo "Temporadas: {$serie->seasons}" . PHP_EOL;
echo "Episódeos (p/ Temporada): {$serie->episodesPerSeason}" . PHP_EOL;
echo "Média de Duração: {$serie->episodeDuration} Minutos" . PHP_EOL;

$calc = new SprintCalc();
$calc->add($filme);
$calc->add($serie);
$duration = $calc->durantion();

echo PHP_EOL . "Duração da Maratona: {$duration} Minutos" . PHP_EOL;
