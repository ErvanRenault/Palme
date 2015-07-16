<?php

namespace Palme\AnnaleBundle\Controller;

use Palme\AnnaleBundle\Entity\Enseignant;
use Palme\AnnaleBundle\Form\EnseignantType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PalmeController extends Controller
{
    public function indexAction()
    {
        return $this->render('PalmeAnnaleBundle::acceuil.html.twig');
    }


    public function ajoutAction(Request $request)
    {

        $enseignant = new Enseignant();
        $form = $this->get('form.factory')->create(new EnseignantType(), $enseignant);


        if($form->handleRequest($request)->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($enseignant);
            $em->flush();

            return $this->redirect($this->generateUrl('palme_annale_homepage'));
        }

        return $this->render('PalmeAnnaleBundle::enseignant.html.twig', array('form' => $form->createView()));
    }


}
