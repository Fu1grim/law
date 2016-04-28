<?php
// src/AppBundle/Fixtures/ORM/LoadWorkData.php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Work;

class LoadWorkData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $work = (new Work())
            ->setSpecialization($this->getReference("specialization"))
            ->setService($this->getReference("service"))
            ->setCode("123")
            ->setTitle("Test Case")
            ->setImageName("")
            ->setDescription("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique deserunt consectetur optio nisi mollitia autem delectus minima est aperiam perspiciatis, enim molestiae odit dolor a, saepe incidunt repellat animi. Cupiditate.")
            ->setPointText("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint consequuntur minus explicabo saepe ullam assumenda qui accusamus atque totam, sequi quidem dolores, rerum pariatur, quam maxime maiores tempora iusto. Quaerat.")
            ->setResolveText("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere animi maxime doloribus praesentium earum repudiandae, corporis numquam atque minus, deserunt voluptas officiis architecto molestiae neque ea dolorum quibusdam voluptatem velit!")
            ->setResultText("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta rem, atque libero facere impedit id iure. Maiores, iusto accusamus rem! Dicta, repellat possimus quisquam, aspernatur natus nam doloremque voluptates consectetur.")
            ->setCreated(new \DateTime("now"))
            ->setUpdated(new \DateTime("now"))
        ;

        $work1 = (new Work())
            ->setSpecialization($this->getReference("specialization1"))
            ->setService($this->getReference("service"))
            ->setCode("123")
            ->setTitle("Test Case 1")
            ->setImageName("")
            ->setDescription("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique deserunt consectetur optio nisi mollitia autem delectus minima est aperiam perspiciatis, enim molestiae odit dolor a, saepe incidunt repellat animi. Cupiditate.")
            ->setPointText("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint consequuntur minus explicabo saepe ullam assumenda qui accusamus atque totam, sequi quidem dolores, rerum pariatur, quam maxime maiores tempora iusto. Quaerat.")
            ->setResolveText("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere animi maxime doloribus praesentium earum repudiandae, corporis numquam atque minus, deserunt voluptas officiis architecto molestiae neque ea dolorum quibusdam voluptatem velit!")
            ->setResultText("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta rem, atque libero facere impedit id iure. Maiores, iusto accusamus rem! Dicta, repellat possimus quisquam, aspernatur natus nam doloremque voluptates consectetur.")
            ->setCreated(new \DateTime("now"))
            ->setUpdated(new \DateTime("now"))
        ;

        $work2 = (new Work())
            ->setSpecialization($this->getReference("specialization2"))
            ->setService($this->getReference("service"))
            ->setCode("123")
            ->setTitle("Test Case 2")
            ->setImageName("")
            ->setDescription("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique deserunt consectetur optio nisi mollitia autem delectus minima est aperiam perspiciatis, enim molestiae odit dolor a, saepe incidunt repellat animi. Cupiditate.")
            ->setPointText("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint consequuntur minus explicabo saepe ullam assumenda qui accusamus atque totam, sequi quidem dolores, rerum pariatur, quam maxime maiores tempora iusto. Quaerat.")
            ->setResolveText("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere animi maxime doloribus praesentium earum repudiandae, corporis numquam atque minus, deserunt voluptas officiis architecto molestiae neque ea dolorum quibusdam voluptatem velit!")
            ->setResultText("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta rem, atque libero facere impedit id iure. Maiores, iusto accusamus rem! Dicta, repellat possimus quisquam, aspernatur natus nam doloremque voluptates consectetur.")
            ->setCreated(new \DateTime("now"))
            ->setUpdated(new \DateTime("now"))
        ;

        $work3 = (new Work())
            ->setSpecialization($this->getReference("specialization"))
            ->setService($this->getReference("service"))
            ->setCode("123")
            ->setTitle("Test Case 3")
            ->setImageName("")
            ->setDescription("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique deserunt consectetur optio nisi mollitia autem delectus minima est aperiam perspiciatis, enim molestiae odit dolor a, saepe incidunt repellat animi. Cupiditate.")
            ->setPointText("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint consequuntur minus explicabo saepe ullam assumenda qui accusamus atque totam, sequi quidem dolores, rerum pariatur, quam maxime maiores tempora iusto. Quaerat.")
            ->setResolveText("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere animi maxime doloribus praesentium earum repudiandae, corporis numquam atque minus, deserunt voluptas officiis architecto molestiae neque ea dolorum quibusdam voluptatem velit!")
            ->setResultText("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta rem, atque libero facere impedit id iure. Maiores, iusto accusamus rem! Dicta, repellat possimus quisquam, aspernatur natus nam doloremque voluptates consectetur.")
            ->setCreated(new \DateTime("now"))
            ->setUpdated(new \DateTime("now"))
        ;

        $work4 = (new Work())
            ->setSpecialization($this->getReference("specialization1"))
            ->setService($this->getReference("service"))
            ->setCode("123")
            ->setTitle("Test Case 4")
            ->setImageName("")
            ->setDescription("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique deserunt consectetur optio nisi mollitia autem delectus minima est aperiam perspiciatis, enim molestiae odit dolor a, saepe incidunt repellat animi. Cupiditate.")
            ->setPointText("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint consequuntur minus explicabo saepe ullam assumenda qui accusamus atque totam, sequi quidem dolores, rerum pariatur, quam maxime maiores tempora iusto. Quaerat.")
            ->setResolveText("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere animi maxime doloribus praesentium earum repudiandae, corporis numquam atque minus, deserunt voluptas officiis architecto molestiae neque ea dolorum quibusdam voluptatem velit!")
            ->setResultText("Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta rem, atque libero facere impedit id iure. Maiores, iusto accusamus rem! Dicta, repellat possimus quisquam, aspernatur natus nam doloremque voluptates consectetur.")
            ->setCreated(new \DateTime("now"))
            ->setUpdated(new \DateTime("now"))
        ;

        $manager->persist($work);
        $manager->persist($work1);
        $manager->persist($work2);
        $manager->persist($work3);
        $manager->persist($work4);

        $manager->flush();
    }
    public function getOrder(){
        return 2;
    }
}

?>
