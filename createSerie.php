<?php

use Locadora\Poo\Domain\Model\{
    Episode, Genre, Serie
};
use Locadora\Poo\Domain\Calc\RateNumToStars;

require_once 'vendor/autoload.php';

$serie = new Serie(
    null,
    'Breaking Bad',
    2008,
    Genre::Drama,
    5,
    13,
    47
);

$episode = new Episode(
    $serie,
    'Pilot',
    1
);

$serie->rate(10);
$serie->rate(9.6);
$serie->rate(8.6);
$serie->rate(9.8);

var_dump($serie);

echo PHP_EOL . "Nome: {$serie->name}" . PHP_EOL;
echo "Ano de Lançamento: {$serie->release}" . PHP_EOL;
echo "Genêro: {$serie->getGenre()}" . PHP_EOL;
echo "Recomendação: {$serie->average()}/10" . PHP_EOL;
echo "Temporadas: {$serie->seasons}" . PHP_EOL;
echo "Episódeos (p/ Temporada): {$serie->episodesPerSeason}" . PHP_EOL;
echo "Média de Duração: {$serie->episodeDuration} Minutos" . PHP_EOL;

$convert = new RateNumToStars();
echo $convert->convert($serie) . " Estrelas";
