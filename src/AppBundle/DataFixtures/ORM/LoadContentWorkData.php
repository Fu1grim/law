<?php
// src/AppBundle/Fixtures/ORM/LoadContentWorkData.php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\ContentWork;

class LoadContentWorkData extends AbstractFixture
{

    public function load(ObjectManager $manager)
    {
        $contentWork = (new ContentWork())
            ->setMainTitle("КЕЙСИ")
            ->setSubTitleWork("ЦІКАВІ СПРАВИ З МОЄЇ ПРАКТИКИ")
        ;

        $manager->persist($contentWork);

        $manager->flush();
    }
}
