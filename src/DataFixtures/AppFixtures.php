<?php

namespace App\DataFixtures;


use App\Entity\Setting;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{

    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        //Load user fixture for development test
//        $this->userFixtures($manager);

        //Load setting fixture for development test
        $this->appSettingsFixtures($manager);


        //Flush data
        $manager->flush();
    }

    private function userFixtures(ObjectManager $manager): void
    {
        $userAdmin = (new User())
            ->setMail('admin@test.com')
            ->setFirstName('Super')
            ->setLastName('Admin')
            ->setRole(['ROLE_ADMIN']);
        $userAdmin->setPassword($this->hasher->hashPassword($userAdmin, 'admin'));
    }

    private function permissionsFixtures(ObjectManager $manager): void
    {

    }

    private function appSettingsFixtures(ObjectManager $manager): void
    {
        $name = (new Setting())
            ->setName('name')
            ->setValue('Elyxia');
        $manager->persist($name);

        $description = (new Setting())
            ->setName('description')
            ->setValue('Elyxia, a symfony cms by "Tom with <3');
        $manager->persist($description);

        $copyRight = (new Setting())
            ->setName('copyright')
            ->setValue('Elyxia-CMS');
        $manager->persist($copyRight);

        $url = (new Setting())
            ->setName('url')
            ->setValue('http://http://127.0.0.1:8000/');
        $manager->persist($url);

        $local = (new Setting())
            ->setName('local')
            ->setValue('fr');
        $manager->persist($local);

        $timezone = (new Setting())
            ->setName('timezone')
            ->setValue('UTC');
        $manager->persist($timezone);

        $theme = (new Setting())
            ->setName('theme')
            ->setValue('default');
        $manager->persist($theme);

        $enableMaintenance = (new Setting())
            ->setName('maintenance.enable')
            ->setValue('false');
        $manager->persist($enableMaintenance);

        $messageMaintenance = (new Setting())
            ->setName('maintenance.message')
            ->setValue('Web site maintenance');
        $manager->persist($messageMaintenance);

        $icon = (new Setting())
            ->setName('icon')
            ->setValue('defaultIcon.png');
        $manager->persist($icon);

        $logo = (new Setting())
            ->setName('logo')
            ->setValue('defaultLogo.png');
        $manager->persist($logo);

        $keyWords = (new Setting())
            ->setName('keywords')
            ->setValue('Elyxia CMS Symfony php tailwind modular');
        $manager->persist($keyWords);

    }
}
