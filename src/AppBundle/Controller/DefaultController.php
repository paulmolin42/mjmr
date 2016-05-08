<?php

namespace AppBundle\Controller;

use AppBundle\Entity\CarpoolingTopic;
use AppBundle\Form\CarpoolingTopicType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="default_index")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/nos-fiancailles", name="default_engagement")
     */
    public function engagementAction()
    {
        return $this->render('default/engagement.html.twig');
    }

    /**
     * @Route("/mariage-civil", name="default_civil_marriage")
     */
    public function civilMarriageAction()
    {
        return $this->render('default/civilMarriage.html.twig');
    }

    /**
     * @Route("/messe-de-mariage", name="default_nuptial_mass")
     */
    public function nuptialMassAction()
    {
        return $this->render('default/nuptialMass.html.twig');
    }

    /**
     * @Route("/reception", name="default_reception")
     */
    public function receptionAction()
    {
        return $this->render('default/reception.html.twig');
    }

    /**
     * @Route("/liste-de-mariage", name="default_wedding_list")
     */
    public function weddingListAction()
    {
        return $this->render('default/weddingList.html.twig');
    }

    /**
     * @Route("/covoiturage", name="default_carpooling")
     */
    public function carpoolingAction(Request $request)
    {
        $topic = new CarpoolingTopic();
        $topicForm = $this->createForm(CarpoolingTopicType::class, $topic);

        $topicForm->handleRequest($request);

        if ($topicForm->isValid()) {
            $flashMessage = CarpoolingTopic::CARPOOLING_REQUEST === $topic->getOfferOrRequest() ?
                'Votre demande de covoiturage a bien été enregistrée !' :
                'Votre proposition de covoiturage a bien été enregistrée !';

            $this->addFlash('success', $flashMessage);
        }

        return $this->render('default/carpooling.html.twig', [
            'form' => $topicForm->createView()
        ]);
    }
}
