<?php

namespace Patryk\BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PatrykBookBundle\Entity\Reflection;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('PatrykBookBundle:Reflection');
        $reflections = $repository->findAll();
        return $this->render('PatrykBookBundle:Default:index.html.twig', array('reflections' => $reflections));

    }

    public function bookAction($chapter, $chapter_content = null)
    {
        if ($chapter) {
          $chapter_content = file_get_contents('chapters/'.$chapter.'.html');
        }

        return $this->render('PatrykBookBundle:Default:book.html.twig', array('chapter' => $chapter, 'chapter_content' => $chapter_content));
    }

    public function aboutmeAction()
    {
        return $this->render('PatrykBookBundle:Default:aboutme.html.twig');

    }
}
