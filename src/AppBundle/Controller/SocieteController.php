<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/societe")
 */
class SocieteController extends Controller
{
    /**
     * @Route("/add")
     */
    public function addsocieteAction()
    {
        return $this->render('AppBundle:Societe:addsociete.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/edit/{id}")
     */
    public function editsocieteAction()
    {
        return $this->render('AppBundle:Societe:editsociete.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/show/{id}")
     */
    public function showsocieteAction($id)
    {
        return $this->render('AppBundle:Societe:showsociete.html.twig', array(
            // ...
        ));
    }

}
