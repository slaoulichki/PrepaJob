<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
/**
 * @Route("/candidature")
 */
class CandidatureController extends Controller
{
    /**
     * @Route("/add")
     */
    public function addcandidatureAction()
    {
        return $this->render('AppBundle:Candidature:addcandidature.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/show/{id}")
     */
    public function showcandidatureAction($id)
    {
        return $this->render('AppBundle:Candidature:showcandidature.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/list/{id}")
     */
    public function listcandidatureAction($id)
    {
        return $this->render('AppBundle:Candidature:listcandidature.html.twig', array(
            // ...
        ));
    }

}
