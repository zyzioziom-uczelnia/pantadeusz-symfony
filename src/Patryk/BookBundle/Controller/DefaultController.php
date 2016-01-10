<?php

namespace Patryk\BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($chapter)
    {
        return $this->render('PatrykBookBundle:Default:index.html.twig', array('chapter' => $chapter));
    }
}
