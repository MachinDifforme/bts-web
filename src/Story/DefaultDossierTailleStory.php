<?php

namespace App\Story;

use App\Factory\DossierTailleFactory;
use Zenstruck\Foundry\Story;

final class DefaultDossierTailleStory extends Story
{
    public function build(): void
    {
        DossierTailleFactory::createMany(100);
    }
}