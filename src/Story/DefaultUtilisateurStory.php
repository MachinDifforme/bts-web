<?php

namespace App\Story;

use App\Factory\UtilisateurFactory;
use Zenstruck\Foundry\Story;

final class DefaultUtilisateurStory extends Story
{
    public function build(): void
    {
        UtilisateurFactory::createMany(100);
    }
}