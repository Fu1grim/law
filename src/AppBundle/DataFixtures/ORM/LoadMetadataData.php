<?php
// src/AppBundle/Fixtures/ORM/LoadMetadataData.php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Metadata;

class LoadMetadataData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $metadata = (new Metadata())
            ->setRoute("home")
            ->setTitle("Головна")
            ->setDescription("Lorem")
            ->setRobots("index,follow,archive")
        ;

        $metadata1 = (new Metadata())
            ->setRoute("about")
            ->setTitle("Про мене")
            ->setDescription("Lorem")
            ->setRobots("index,follow,archive")
        ;

        $metadata2 = (new Metadata())
            ->setRoute("cases_item")
            ->setTitle("Кейс")
            ->setDescription("Lorem")
            ->setRobots("index,follow,archive")
        ;

        $metadata3 = (new Metadata())
            ->setRoute("cases")
            ->setTitle("Кейси")
            ->setDescription("Lorem")
            ->setRobots("index,follow,archive")
        ;

        $metadata4 = (new Metadata())
            ->setRoute("feedback")
            ->setTitle("Відгук")
            ->setDescription("Lorem")
            ->setRobots("noindex,follow,noarchive")
        ;

        $metadata5 = (new Metadata())
            ->setRoute("services")
            ->setTitle("Послуги")
            ->setDescription("Lorem")
            ->setRobots("index,follow,archive")
        ;

        $manager->persist($metadata);
        $manager->persist($metadata1);
        $manager->persist($metadata2);
        $manager->persist($metadata3);
        $manager->persist($metadata4);
        $manager->persist($metadata5);

        $manager->flush();
    }
}
