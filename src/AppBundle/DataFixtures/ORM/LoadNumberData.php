<?php
// src/AppBundle/Fixtures/ORM/LoadNumberData.php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Number;

class LoadNumberData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $number = (new Number())
            ->setNumber("14")
            ->setTitle("років практики")
        ;

        $number1 = (new Number())
            ->setNumber("100")
            ->setTitle("виграних справ")
        ;

        $number2 = (new Number())
            ->setNumber("200")
            ->setTitle("мирних врегулюваннь конфліктів")
        ;

        $number3 = (new Number())
            ->setNumber("5")
            ->setTitle("допомога бізнесу та компаніям")
        ;

        $manager->persist($number);
        $manager->persist($number1);
        $manager->persist($number2);
        $manager->persist($number3);

        $manager->flush();
    }
}
