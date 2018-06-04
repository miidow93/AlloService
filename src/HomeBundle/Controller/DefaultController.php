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

    public function blogAction() {
        return $this->render('HomeBundle:Default:blog.html.twig');
    }

    public function serviceAction() {
        return $this->render('HomeBundle:Default:service.html.twig');
    }

    public function  singleserviceAction() {
        return $this->render('HomeBundle:Default:single_service.html.twig');
    }

    public function  contactAction() {
        return $this->render('HomeBundle:Default:contact.html.twig');
    }

    public function faqAction() {
        return $this->render('HomeBundle:Default:faq.html.twig');
    }
}
