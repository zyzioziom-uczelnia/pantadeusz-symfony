<?php

namespace Patryk\BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Patryk\BookBundle\Entity\Reflection;
use Symfony\Component\HttpFoundation\Request;

class ReflectionController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('PatrykBookBundle:Reflection');
        $reflections = array_reverse($repository->findAll());

        return $this->render('PatrykBookBundle:Reflection:index.html.twig', array('reflections' => $reflections
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

        $request = Request::createFromGlobals();

        $reflection = new Reflection();
        $reflection -> setTitle($request->request->get('title', 'test-title'));
        $reflection -> setBody($request->request->get('body', 'test-body'));

        $em = $this->getDoctrine()->getManager();

        $em->persist($reflection);
        $em->flush();

        return $this->redirectToRoute('reflection');
    }

}
