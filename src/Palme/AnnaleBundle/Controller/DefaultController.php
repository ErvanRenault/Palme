<?php

namespace Palme\AnnaleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PalmeAnnaleBundle:Default:index.html.twig', array('name' => $name));
    }
}
