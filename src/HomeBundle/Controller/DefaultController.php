<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HomeBundle:Default:index.html.twig');
    }

    public function aboutAction(){
        return $this->render('HomeBundle:Default:about.html.twig');
    }

    public function serviceAction() {
        return $this->render('HomeBundle:Default:service.html.twig');
    }
}
