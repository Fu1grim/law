<?php
// src/AppBundle/Fixtures/ORM/LoadSpecializationData.php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Specialization;

class LoadSpecializationData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $specialization = (new Specialization())
            ->setTitle("Кримінальний процес")
            ->setIcon("icon-police")
            ->setIsMajor(TRUE)
        ;

        $specialization1 = (new Specialization())
            ->setTitle("Сфера господарських відносин")
            ->setIcon("icon-businessmen")
            ->setIsMajor(TRUE)
        ;

        $specialization2 = (new Specialization())
            ->setTitle("Податкове планування та оптимізація")
            ->setIcon("icon-payment")
            ->setIsMajor(TRUE)
        ;

        $specialization3 = (new Specialization())
            ->setTitle("Справи адміністративної юрисдикції")
            ->setIcon("icon-goverment")
            ->setIsMajor(TRUE)
        ;

        $specialization31 = (new Specialization())
            ->setTitle("Трудові відносини")
            ->setIcon("icon-money")
        ;

        $specialization4 = (new Specialization())
            ->setTitle("Сфера земельних відносин")
            ->setIcon("icon-map")
        ;

        $specialization5 = (new Specialization())
            ->setTitle("Цивільне судочинство")
            ->setIcon("icon-hammer")
        ;

        $specialization6 = (new Specialization())
            ->setTitle("Сімейні спори")
            ->setIcon("icon-familiar")
        ;

        $specialization7 = (new Specialization())
            ->setTitle("Спадкові справи")
            ->setIcon("icon-diamond")
        ;

        $specialization8 = (new Specialization())
            ->setTitle("Захист прав інтелектуальної власності")
            ->setIcon("icon-computer")
            ->setIsMajor(TRUE)
        ;

        $manager->persist($specialization);
        $manager->persist($specialization1);
        $manager->persist($specialization2);
        $manager->persist($specialization3);
        $manager->persist($specialization31);
        $manager->persist($specialization4);
        $manager->persist($specialization5);
        $manager->persist($specialization6);
        $manager->persist($specialization7);
        $manager->persist($specialization8);

        $manager->flush();

        $this->addReference('specialization', $specialization);
        $this->addReference('specialization1', $specialization1);
        $this->addReference('specialization2', $specialization2);
        $this->addReference('specialization3', $specialization3);
        $this->addReference('specialization4', $specialization4);
        $this->addReference('specialization5', $specialization5);
        $this->addReference('specialization6', $specialization6);
        $this->addReference('specialization7', $specialization7);
        $this->addReference('specialization8', $specialization8);

    }

    public function getOrder(){
        return 1;
    }
}

?>
