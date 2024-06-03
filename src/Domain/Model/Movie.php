<?php

namespace Locadora\Poo\Domain\Model;

Class Movie {

    private ?int $id;
    private string $name;
    private ?int $release;
    private string $genre;
    private float $rate;

    /** Construtor da classe filme */
    public function __construct(?int $id, string $name, ?int $release, string $genre, float $rate)
    {
        $this->id = $id;
        $this->name = $name;
        $this->release = $release;
        $this->genre = $genre;
        $this->rate = $rate;
    }
}