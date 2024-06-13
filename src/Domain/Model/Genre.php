<?php

namespace Locadora\Poo\Domain\Model;

enum Genre: string 
{
    case Action = 'Ação';
    case Comedy = 'Comédia';
    case Horror = 'Terror';
    case SuperHero = 'Super-Herói';
    case Drama = 'Drama';
    case Animation = 'Animation';
} 
