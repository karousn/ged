<?php

namespace Acme\GedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $name = 'toto';
        return $this->render('AcmeGedBundle:Default:index.html.twig', array('name' => $name));
    }
}
