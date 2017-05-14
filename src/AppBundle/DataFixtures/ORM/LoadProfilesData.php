<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Profile;

class LoadProfilesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
		$faker = \Faker\Factory::create('fr_FR');
		
		for ($i=0; $i < 10; $i++) {
			$profile = new Profile();			
			
			$profile->setUser($this->getReference('user'.$i));
			$profile->setDescription($faker->realText(300, 2));
			$searching = $faker->randomElement([Profile::SEARCHING_MEN, Profile::SEARCHING_WOMEN, Profile::SEARCHING_BOTH]);
			$profile->setSearching($searching);
			$profile->setCriteria('searching', $searching);

			$manager->persist($profile);
		}
		
        $manager->flush();
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 2;
    }
}