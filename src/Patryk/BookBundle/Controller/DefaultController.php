<?php

namespace Patryk\BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PatrykBookBundle:Default:index.html.twig');
    }
}
