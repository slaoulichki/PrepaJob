<?php

namespace AppBundle\Controller;

use AppBundle\Form\OffreType;
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
        $addform = $this->createForm(OffreType::class);
        return $this->render('AppBundle:Offre:addoffre.html.twig', array(
            'aadoffreForm'=> $addform->createView()
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
        $form = $this->createForm(OffreType::class);

        return $this->render('AppBundle:Offre:editoffre.html.twig', array(
            'offreForm'=> $form->createView()
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
