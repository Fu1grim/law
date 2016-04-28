<?php
// src/AppBundle/Fixtures/ORM/LoadServiceItemData.php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\ServiceItem;

class LoadServiceItemData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $serviceItem = (new ServiceItem())
            ->setService($this->getReference("service"))
            ->setTitle("медіація")
        ;

        $serviceItem1 = (new ServiceItem())
            ->setService($this->getReference("service"))
            ->setTitle("підготовка справ до судових проваджень")
        ;

        $serviceItem2 = (new ServiceItem())
            ->setService($this->getReference("service"))
            ->setTitle("представництво інтересів у судах")
        ;

        $serviceItem3 = (new ServiceItem())
            ->setService($this->getReference("service"))
            ->setTitle("оскарження рішень суду в усіх інстанціях")
        ;

        $serviceItem4 = (new ServiceItem())
            ->setService($this->getReference("service"))
            ->setTitle("супроводження на стадії виконання рішення суду")
        ;

        $serviceItem5 = (new ServiceItem())
            ->setService($this->getReference("service1"))
            ->setTitle("юридичний Due Diligence")
        ;

        $serviceItem6 = (new ServiceItem())
            ->setService($this->getReference("service1"))
            ->setTitle("податковий Due Diligence")
        ;

        $serviceItem7 = (new ServiceItem())
            ->setService($this->getReference("service1"))
            ->setTitle("питання корпоративного управління")
        ;

        $serviceItem8 = (new ServiceItem())
            ->setService($this->getReference("service1"))
            ->setTitle("обіг об’єктів права інтелектуальної власності")
        ;

        $serviceItem9 = (new ServiceItem())
            ->setService($this->getReference("service1"))
            ->setTitle("організація трудових відносин")
        ;

        $serviceItem10 = (new ServiceItem())
            ->setService($this->getReference("service1"))
            ->setTitle("впровадження режиму комерційної таємниці")
        ;

        $serviceItem11 = (new ServiceItem())
            ->setService($this->getReference("service1"))
            ->setTitle("забезпечення захисту персональних даних")
        ;

        $serviceItem12 = (new ServiceItem())
            ->setService($this->getReference("service2"))
            ->setTitle("державна реєстрація прав на нерухоме майно")
        ;

        $serviceItem13 = (new ServiceItem())
            ->setService($this->getReference("service2"))
            ->setTitle("внесення записів до Державного реєстру прав")
        ;

        $manager->persist($serviceItem);
        $manager->persist($serviceItem1);
        $manager->persist($serviceItem2);
        $manager->persist($serviceItem3);
        $manager->persist($serviceItem4);
        $manager->persist($serviceItem5);
        $manager->persist($serviceItem6);
        $manager->persist($serviceItem7);
        $manager->persist($serviceItem8);
        $manager->persist($serviceItem9);
        $manager->persist($serviceItem10);
        $manager->persist($serviceItem11);
        $manager->persist($serviceItem12);
        $manager->persist($serviceItem13);

        $manager->flush();

    }
    public function getOrder(){
        return 2;
    }
}

?>
