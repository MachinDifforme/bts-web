<?php

namespace App\Story;

use App\Factory\AgenceFactory;
use Zenstruck\Foundry\Story;

final class DefaultAgenceStory extends Story
{
    public function build(): void
    {
        AgenceFactory::createMany(100);
    }
}