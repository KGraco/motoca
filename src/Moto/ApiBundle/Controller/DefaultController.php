<?php

namespace Moto\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MotoApiBundle:Default:index.html.twig', array('name' => $name));
    }
}
