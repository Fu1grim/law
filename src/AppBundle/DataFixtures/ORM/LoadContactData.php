<?php
// src/AppBundle/Fixtures/ORM/LoadContactData.php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Contact;

class LoadContactData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $contact = (new Contact())
            ->setEmail("office@hnatenko.com")
            ->setPhone("+380 (50) 469-75-75")
            ->setLink("http://erau.unba.org.ua/erau/profile/144864")
        ;

        $manager->persist($contact);

        $manager->flush();
    }
}
