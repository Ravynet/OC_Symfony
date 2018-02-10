<?php

namespace OC\AntispamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCAntispamBundle:Default:index.html.twig');
    }
}
