<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BurgerFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $nomsBurgers = [
            'classique',
            'chily',
            'smash'
        ];
 
        foreach ($nomsBurgers as $key => $nomBurger) {
            $burger = new Burger();
            $burger->setName($nomBurger);
            $manager->persist($burger);
            $this->addReference(self::BURGER_REFERENCE . '_' . $key, $burger);
        }

        $manager->flush();
    }
}
