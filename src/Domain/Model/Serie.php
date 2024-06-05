<?php

namespace Locadora\Poo\Domain\Model;

class Serie extends Tittle
{
    /** Construtor da classe Série */
    public function __construct(
        ?int $id,
        string $name,
        ?int $release,
        Genre $genre,
        public readonly ?int $seasons,
        public readonly ?int $episodesPerSeason,
        public readonly ?int $episodeDuration,
    ) {
        parent::__construct(
            $id,
            $name,
            $release,
            $genre
        );
    }
}
