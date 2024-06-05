<?php

namespace Locadora\Poo\Domain\Model;

Class Movie extends Tittle
{
    /** Construtor da classe Filme */
    public function __construct(
        ?int $id,
        string $name,
        ?int $release,
        Genre $genre,
        public readonly ?int $timeMin,
    ) {
        parent::__construct(
            $id,
            $name,
            $release,
            $genre
        );
    }
}
