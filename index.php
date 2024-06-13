<?php

use Locadora\Poo\Domain\Calc\RateNumToStars;
use Locadora\Poo\Domain\Exception\InvalidRateException;
use Locadora\Poo\Domain\Model\{
    Episode, Genre, Serie
};

require_once 'vendor/autoload.php';

$serie = new Serie(null, 'X-Man 97', 2024, Genre::Animation, 1 , 8, 35);
$episodio = new Episode($serie, 'O começo', 1);

try {

    $episodio->rate(10);
    $episodio->rate(-1);

    $conversor = new RateNumToStars();
    echo "Avaliação: " . $conversor->convert($episodio) . " Estrelas";

} catch(InvalidRateException $e) {
    echo "Ocorreu um problema: " . $e->getMessage();
}
