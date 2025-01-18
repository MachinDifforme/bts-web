<?php

namespace App\DataFixtures;

use App\Story\DefaultAgenceStory;
use App\Story\DefaultApplicationStory;
use App\Story\DefaultDossierExecutableStory;
use App\Story\DefaultDossierTailleStory;
use App\Story\DefaultOrdinateurStory;
use App\Story\DefaultUtilisateurStory;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        DefaultAgenceStory::load();
        DefaultApplicationStory::load();
        DefaultDossierExecutableStory::load();
        DefaultDossierTailleStory::load();
        DefaultOrdinateurStory::load();
        DefaultUtilisateurStory::load();
        
    }
}
