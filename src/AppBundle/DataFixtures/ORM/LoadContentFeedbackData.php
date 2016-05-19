<?php
// src/AppBundle/Fixtures/ORM/LoadContentFeedbackData.php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\ContentFeedback;

class LoadContentFeedbackData extends AbstractFixture
{

    public function load(ObjectManager $manager)
    {
        $contentFeedback = (new ContentFeedback())
            ->setMainTitle("ДАВАЙТЕ СПІВПРАЦЮВАТИ")
            ->setSubTitleFeedback("МОЯ КОНТАКТНА ІНФОРМАЦІЯ")
            //->setTextFeedback("Lorem ipsum dolor sit amet, consectetur adipisicing elit.")
        ;

        $manager->persist($contentFeedback);

        $manager->flush();
    }
}
