<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/offre")
 */
class OffreController extends Controller
{
    /**
     * @Route("/add")
     */
    public function addoffreAction()
    {
        return $this->render('AppBundle:Offre:addoffre.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/list")
     */
    public function listoffreAction()
    {
        return $this->render('AppBundle:Offre:listoffre.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/edit/{id}")
     */
    public function editoffreAction($id)
    {
        return $this->render('AppBundle:Offre:editoffre.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/show/{id}")
     */
    public function showoffreAction($id)
    {
        return $this->render('AppBundle:Offre:showoffre.html.twig', array(
            // ...
        ));
    }

}
