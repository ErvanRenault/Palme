<?php

namespace Palme\AnnaleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PalmeController extends Controller
{
    public function indexAction()
    {
        return $this->render('PalmeAnnaleBundle::acceuil.html.twig');
    }
}
