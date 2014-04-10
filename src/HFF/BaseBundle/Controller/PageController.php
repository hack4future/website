<?php

namespace HFF\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('HFFBaseBundle:Page:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('HFFBaseBundle:Page:about.html.twig');
    }

    public function contactAction()
    {
        return $this->render('HFFBaseBundle:Page:contact.html.twig');
    }
    public function register_projectAction()
    {
        return $this->render('HFFBaseBundle:Page:register_project.html.twig');
    }
}
