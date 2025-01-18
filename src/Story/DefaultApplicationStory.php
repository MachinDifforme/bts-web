<?php

namespace App\Story;

use App\Factory\ApplicationFactory;
use Zenstruck\Foundry\Story;

final class DefaultApplicationStory extends Story
{
    public function build(): void
    {
        ApplicationFactory::createMany(100);
    }
}