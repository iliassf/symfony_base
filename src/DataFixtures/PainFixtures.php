<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PainFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $nomsPains = [
            'brioché',
            'tradition',
            'complet'
        ];
 
        foreach ($nomsPains as $key => $nomPain) {
            $pain = new Pain();
            $pain->setName($nomPain);
            $manager->persist($pain);
            $this->addReference(self::PAIN_REFERENCE . '_' . $key, $pain);
        }

        $manager->flush();
    }
}
