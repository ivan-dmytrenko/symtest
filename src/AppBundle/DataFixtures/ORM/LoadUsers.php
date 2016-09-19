<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 26.08.16
 * Time: 16:22
 */

namespace AppBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUsers implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user1= new User();
        $user1->setName('John');
        $user1->setBio('He is a cool guy');
        $user1->setEmail('john@test.com');
        $manager->persist($user1);

        $user2 = new User();
        $user2->setName('John');
        $user2->setBio('He is a cool guy');
        $user2->setEmail('john@test.com');
        $manager->persist($user2);
    }
}