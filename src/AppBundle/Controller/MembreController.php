<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
/**
 * @Route("/membre")
 */
class MembreController extends Controller
{
    /**
     * @Route("/add")
     */
    public function addmembreAction()
    {
        return $this->render('AppBundle:Membre:addmembre.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/edit/{id}")
     */
    public function editmembreAction($id)
    {
        return $this->render('AppBundle:Membre:editmembre.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/show/{id}")
     */
    public function showmembreAction($id)
    {
        return $this->render('AppBundle:Membre:showmembre.html.twig', array(
            // ...
        ));
    }

}
