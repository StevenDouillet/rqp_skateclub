<?php

namespace App\DataFixtures;

use App\Entity\News;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Exception;

class AppFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     * @throws Exception
     */
    public function load(ObjectManager $manager)
    {
        $news = new News();
        $news->setTitle("Réouverture des sessions à Vaulx");
        $news->setDescription("Les sessions à vaulx en velin (skatepark carré de soie) réouvrent les mecredis et jeudi entre 18h et 22h");
        $news->setCreatedDate(new DateTime());
        $manager->persist($news);

        $news2 = new News();
        $news2->setTitle("Chiva skate contest");
        $news2->setDescription("description contest girl");
        $news2->setCreatedDate(new DateTime());
        $manager->persist($news2);

        $news3 = new News();
        $news3->setTitle("Skate the turntables");
        $news3->setDescription("description skate the turntables");
        $news3->setCreatedDate(new DateTime());
        $manager->persist($news3);

        $news4 = new News();
        $news4->setTitle("Inscription king of lyon 2020");
        $news4->setDescription("description king of lyon");
        $news4->setCreatedDate(new DateTime());
        $manager->persist($news4);

        $news5 = new News();
        $news5->setTitle("Cours de skates");
        $news5->setDescription("description cours de skates");
        $news5->setCreatedDate(new DateTime());
        $manager->persist($news5);
        $manager->flush();
    }
}
