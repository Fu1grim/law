<?php
// src/AppBundle/Fixtures/ORM/LoadContentAboutData.php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\ContentAbout;

class LoadContentAboutData extends AbstractFixture
{

    public function load(ObjectManager $manager)
    {
        $contentAbout = (new ContentAbout())
            ->setMainTitle("ПРО МЕНЕ")
            ->setSubTitleAbout("ГНАТЕНКO ОЛЕКСІЙ АНАТОЛІЙОВИЧ")
            ->setTextAbout("Lorem ipsum dolor sit amet, consectetur adipisicing elit.")
            ->setTextSubAbout("Lorem ipsum dolor sit amet, consectetur adipisicing elit.")
            ->setTextAboutFeedback("Lorem ipsum dolor sit amet, consectetur adipisicing elit.")
        ;

        $manager->persist($contentAbout);

        $manager->flush();
    }
}
