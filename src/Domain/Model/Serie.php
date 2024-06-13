<?php

namespace Locadora\Poo\Domain\Model;

use Override;

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

    /** Calcula a duração da Série */
    #[Override]
    public function timeDuration(): int
    {
        return $this->seasons * $this->episodesPerSeason * $this->episodeDuration;
    }
}
