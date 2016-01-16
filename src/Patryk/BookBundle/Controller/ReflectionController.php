<?php

namespace Patryk\BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReflectionController extends Controller
{
    public function indexAction()
    {
        return $this->render('PatrykBookBundle:Reflection:index.html.twig', array(
            // ...
        ));
    }

    public function newAction()
    {
        return $this->render('PatrykBookBundle:Reflection:new.html.twig', array(
            // ...
        ));
    }

    public function createAction()
    {
        return $this->render('PatrykBookBundle:Reflection:create.html.twig', array(
            // ...
        ));
    }

}
