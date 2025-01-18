<?php

namespace App\Story;

use App\Factory\DossierExecutableFactory;
use Zenstruck\Foundry\Story;

final class DefaultDossierExecutableStory extends Story
{
    public function build(): void
    {
        DossierExecutableFactory::createMany(100);
    }
}