<?php
// src/AppBundle/Fixtures/ORM/LoadServiceData.php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Service;

class LoadServiceData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $service = (new Service())
            ->setTitle("Досудове та судове провадження")
            ->setIcon("icon-museum")
            ->setImage("court.jpg")
        ;

        $service1 = (new Service())
            ->setTitle("Бізнес-планування")
            ->setIcon("icon-libra")
            ->setImage("building.jpg")
        ;

        $service2 = (new Service())
            ->setTitle("Реєстрація прав та обтяжень")
            ->setIcon("icon-pen")
            ->setImage("book.jpg")
        ;

        $manager->persist($service);
        $manager->persist($service1);
        $manager->persist($service2);

        $manager->flush();

        $this->addReference('service', $service);
        $this->addReference('service1', $service1);
        $this->addReference('service2', $service2);

    }
    public function getOrder(){
        return 1;
    }
}

?>
