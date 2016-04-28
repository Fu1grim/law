<?php
// src/AppBundle/Fixtures/ORM/LoadContentMainData.php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\ContentMain;

class LoadContentMainData extends AbstractFixture
{

    public function load(ObjectManager $manager)
    {
        $contentMain = (new ContentMain())
            ->setMainTitle("ІНДИВІДУАЛЬНА АДВОКАТСЬКА ПРАКТИКА")
            ->setSubTitle("ГНАТЕНКА ОЛЕКСІЯ АНАТОЛІЙОВИЧА")
            ->setTextMain("Lorem ipsum dolor sit amet, consectetur adipisicing elit.")
        ;

        $manager->persist($contentMain);

        $manager->flush();
    }
}
