<?php

namespace angularjsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('angularjsBundle:Default:index.html.twig', array('name' => $name));
    }
}
