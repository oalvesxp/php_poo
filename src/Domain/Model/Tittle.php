<?php

namespace Locadora\Poo\Domain\Model;

use Locadora\Poo\Domain\Model\Assessment;

abstract class Tittle implements Assessment
{
    use withRating;
    
    /** Construtor da classe Título */
    public function __construct(
        public readonly ?int $id,
        public readonly string $name,
        public readonly ?int $release,
        public readonly Genre $genre,
    ) { 
    }

    /** Getters */
    public function getGenre(): string
    {
        return $this->genre->value;
    }

    /** Retorna a duração do Título */
    abstract public function timeDuration(): int;
}
