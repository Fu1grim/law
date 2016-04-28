<?php
// src/AppBundle/Fixtures/ORM/LoadContentServiceData.php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\ContentService;

class LoadContentServiceData extends AbstractFixture
{

    public function load(ObjectManager $manager)
    {
        $contentService = (new ContentService())
            ->setMainTitle("СПЕЦІАЛІЗАЦІЇ ТА ПОСЛУГИ")
            ->setSubTitleSpecializations("СПЕЦІАЛІЗАЦІЇ")
            ->setSubTitleService("ПОСЛУГИ")
            ->setTextService("Lorem ipsum dolor sit amet, consectetur adipisicing elit.")
        ;

        $manager->persist($contentService);

        $manager->flush();
    }
}
