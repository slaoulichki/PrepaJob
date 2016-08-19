<?php

namespace AppBundle\Controller;

use AppBundle\Form\OffreType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/offre")
 */
class OffreController extends Controller
{
    /**
     * @Route("/add")
     */
    public function addoffreAction(Request $request)
    {
        $addform = $this->createForm(OffreType::class);

        $addform->handleRequest($request);

        if ($addform->isValid()){
            $offre = $addform->getData();

            $em = $this->get('doctrine.orm.entity_manager');
            $em->persist($offre);
            $em->flush();

//            $this->redirectToRoute('app_contact_show', ['id' => $contact->getId()]);

            $this->addFlash('success', 'L\'offre a bien été inséré');

            return $this->redirectToRoute('app_offre_listoffre');


        }

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
