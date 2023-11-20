<?php

namespace App\DataFixtures;

use App\Factory\EntiteFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
;

class EntiteFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $tab = json_decode(file_get_contents(__DIR__.'/data/Entite.json'), true);
        $entites = $tab['entites'];
        foreach ($entites as $entite) {
            EntiteFactory::createOne(
                ['name' => $entite['name'],
                    'tips' => $entite['tips'],
                    'clues' => $entite['clues'],
                    'sanities' => $entite['sanities']]);
        }
    }
}
