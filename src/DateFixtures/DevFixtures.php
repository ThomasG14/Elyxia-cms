<?php

namespace App\DateFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class DevFixtures extends Fixture
{

    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        //Load user fixture for development test
        $this->UserFixtures($manager);
    }

    private function UserFixtures(ObjectManager $manager): void {
        $userAdmin = (new User())
            ->setMail('admin@test.com')
            ->setFirstName('Super')
            ->setLastName('Admin')
            ->setRole(['ROLE_ADMIN']);
        ;
        $userAdmin->setPassword($this->hasher->hashPassword($userAdmin, 'admin'));
    }

    private function PermissionsFixtures(ObjectManager $manager): void {

    }
}