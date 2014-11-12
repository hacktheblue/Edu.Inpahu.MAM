<?php

namespace Mam\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MamMainBundle:Default:index.html.twig', array('name' => $name));
    }
}
