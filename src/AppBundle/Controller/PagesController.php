<?php
// src/AppBundle/Controller/PagesController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request,
    Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route,
    Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use AppBundle\Model\Feedback,
    AppBundle\Form\Type\FeedbackType;

class PagesController extends Controller
{
    /**
     * @Method({"GET"})
     * @Route("/", name = "home")
     */
    public function homeAction()
    {
        $_manager  = $this->getDoctrine()->getManager();
        $_metadata = $this->get('app.metadata');

        $content = [
            'main'    => $_manager->getRepository('AppBundle:ContentMain')->findOneBy([], [], 1),
            'service' => $_manager->getRepository('AppBundle:ContentService')->findOneBy([], [], 1),
            'work'    => $_manager->getRepository('AppBundle:ContentWork')->findOneBy([], [], 1)
        ];

        if( !$content['main'] || !$content['service'] || !$content['work'] )
            throw $this->createNotFoundException('No content!');

        $numbers = $_manager->getRepository('AppBundle:Number')->findBy([], ['id' => 'ASC'], 4);

        if( !$numbers )
            throw $this->createNotFoundException('No numbers!');

        $specializations = $_manager->getRepository('AppBundle:Specialization')->findBy(['isMajor' => TRUE], [], 5);

        if( !$specializations )
            throw $this->createNotFoundException('No specializations!');

        $works = $_manager->getRepository('AppBundle:Work')->findBy([], ['created' => 'DESC'], 2);

        return $this->render('AppBundle:Pages:index.html.twig', [
            'metadata'        => $_metadata->provideMetadata(),
            'content'         => $content,
            'specializations' => $specializations,
            'works'           => $works,
            'numbers'         => $numbers
        ]);
    }

    /**
     * @Method({"GET"})
     * @Route("/services", name = "services")
     */
    public function servicesAction()
    {
        $_manager  = $this->getDoctrine()->getManager();
        $_metadata = $this->get('app.metadata');

        $contentService = $_manager->getRepository('AppBundle:ContentService')->findOneBy([], [], 1);

        if( !$contentService )
            throw $this->createNotFoundException('No content!');

        $specializations = $_manager->getRepository('AppBundle:Specialization')->findAll();

        if( !$specializations )
            throw $this->createNotFoundException('No specializations!');

        $services = $_manager->getRepository('AppBundle:Service')->findAll();

        if( !$services )
            throw $this->createNotFoundException('No services!');

        return $this->render('AppBundle:Pages:services.html.twig', [
            'metadata'        => $_metadata->provideMetadata(),
            'contentService'  => $contentService,
            'specializations' => $specializations,
            'services'        => $services
        ]);
    }

    /**
     * @Method({"GET"})
     * @Route("/cases", name = "cases")
     */
    public function casesAction()
    {
        $_manager  = $this->getDoctrine()->getManager();
        $_metadata = $this->get('app.metadata');

        $contentWork = $_manager->getRepository('AppBundle:ContentWork')->findOneBy([], [], 1);

        if( !$contentWork )
            throw $this->createNotFoundException();

        $works = $_manager->getRepository('AppBundle:Work')->findBy([], ['created' => 'DESC']);

        return $this->render('AppBundle:Pages:cases.html.twig', [
            'metadata'    => $_metadata->provideMetadata(),
            'contentWork' => $contentWork,
            'works'       => $works
        ]);
    }

    /**
     * @Method({"GET"})
     * @Route(
     *      "/cases/{id}",
     *      name = "cases_item",
     *      requirements = {"id": "\d+"}
     * )
     */
    public function casesItemAction($id)
    {
        $_manager  = $this->getDoctrine()->getManager();
        $_metadata = $this->get('app.metadata');

        $work = $_manager->getRepository('AppBundle:Work')->findOneById($id);

        if( !$work )
            throw $this->createNotFoundException();

        $closestWorks = $_manager->getRepository('AppBundle:Work')
            ->getClosestWorks($work->getId());

        return $this->render('AppBundle:Pages:case-item.html.twig', [
            'metadata'     => $_metadata->provideMetadata(),
            'work'         => $work,
            'closestWorks' => $closestWorks
        ]);
    }

    /**
     * @Method({"GET"})
     * @Route("/about", name = "about")
     */
    public function aboutAction()
    {
        $_manager = $this->getDoctrine()->getManager();
        $_metadata = $this->get('app.metadata');

        $content = [
            'about' => $_manager->getRepository('AppBundle:ContentAbout')->findOneBy([], [], 1),
            'service' => $_manager->getRepository('AppBundle:ContentService')->findOneBy([], [], 1),
            'feedback' => $_manager->getRepository('AppBundle:ContentFeedback')->findOneBy([], [], 1)
        ];

        if( !$content['about'] || !$content['service'] || !$content['feedback'] )
            throw $this->createNotFoundException();

        return $this->render('AppBundle:Pages:about.html.twig', [
            'metadata' => $_metadata->provideMetadata(),
            'content'  => $content
        ]);
    }

    /**
     * @Method({"GET", "POST"})
     * @Route("/feedback", name = "feedback")
     */
    public function feedbackAction(Request $request)
    {
        $_manager  = $this->getDoctrine()->getManager();
        $_metadata = $this->get('app.metadata');

        $contentFeedback = $_manager->getRepository('AppBundle:ContentFeedback')->findOneBy([], [], 1);

        if( !$contentFeedback )
            throw $this->createNotFoundException();

        $contact = $_manager->getRepository('AppBundle:Contact')->findOneBy([], [], 1);

        if( !$contact )
            throw $this->createNotFoundException();

        $feedbackForm = $this->createForm(FeedbackType::class, ($feedback = new Feedback()));

        if( $request->isMethod('POST') )
        {
            $_translator = $this->get('translator');

            $feedbackForm->handleRequest($request);

            $successFlash = ['success' => $_translator->trans('emails.feedback.response.success')];
            $errorFlash   = ['error' => $_translator->trans('emails.feedback.response.fail')];

            if( !$feedbackForm->isValid() ) {
                $feedbackMessage = $errorFlash;
            } else {
                $_mailer = $this->get('app.mailer');

                $feedbackView = $this->renderView('AppBundle:Emails:feedback.html.twig', [
                    'feedback' => $feedback
                ]);

                $feedbackMessage = ( $_mailer->sendFeedback($feedback, $feedbackView) )
                    ? $successFlash
                    : $errorFlash
                ;

                $this->addFlash('feedback-message', $feedbackMessage);

                return $this->redirectToRoute('feedback');
            }

            $this->addFlash('feedback-message', $feedbackMessage);
        }

        return $this->render('AppBundle:Pages:feedback.html.twig', [
            'metadata'        => $_metadata->provideMetadata(),
            'contentFeedback' => $contentFeedback,
            'contact'         => $contact,
            'feedbackView'    => $feedbackForm->createView()
        ]);
    }
}
