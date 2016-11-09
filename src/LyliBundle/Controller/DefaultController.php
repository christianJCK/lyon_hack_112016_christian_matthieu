<?php

namespace LyliBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LyliBundle:Default:index.html.twig');
    }
}
