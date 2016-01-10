<?php

namespace Patryk\BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($chapter)
    {
        $chapter_content = file_get_contents('chapters/'.$chapter.'.html');
        return $this->render('PatrykBookBundle:Default:index.html.twig', array('chapter' => $chapter, 'chapter_content' => $chapter_content));
    }
}
