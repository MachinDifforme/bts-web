<?php

namespace App\Story;

use App\Factory\OrdinateurFactory;
use Zenstruck\Foundry\Story;

final class DefaultOrdinateurStory extends Story
{
    public function build(): void
    {
        OrdinateurFactory::createMany(100);
    }
}