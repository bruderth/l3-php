<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $passwordhasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher){
        $this->passwordhasher = $passwordHasher;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();

        $user->setPassword($this->passswordhasher->hashPassword($user,'the_new_password'));

        $manager->persist($user);

        $manager->flush();
    }
}
