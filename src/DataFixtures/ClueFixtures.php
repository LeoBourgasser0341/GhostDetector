<?php

namespace App\DataFixtures;

use App\Entity\Clue;
use App\Factory\ClueFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
;

class ClueFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $tab = json_decode(file_get_contents(__DIR__ . '/data/Clue.json'), true);
        $clues = $tab['clues'];
        foreach ($clues as $clue) {
            ClueFactory::createOne(
                ['name' => $clue['name']]);
        }
    }
}
