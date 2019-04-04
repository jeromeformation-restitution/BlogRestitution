<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function home():Response
    {
        return $this->render('home.html.twig');
    }

    /**
     * @Route("/article/{slug}")
     * @return Response
     */
    public function article():Response
    {
        return $this->render('article.html.twig');
    }
    /**
     * @Route("/back-office/articles")
     * @return Response
     */
    public function articles():Response
    {
        return $this->render('/back-office/articles.html.twig');
    }
    /**
     * @Route("/back-office/articles/creation")
     * @return Response
     */
    public function create():Response
    {
        $this->addFlash('success', 'bravo votre message a bien été crée');
        return $this->render('/back-office/creation.html.twig');
    }
    /**
     * @Route("/back-office/articles/{slug}/modification")
     * @return Response
     */
    public function modif():Response
    {
        $this->addFlash('success', 'bravo votre message a bien été modifi');
        return $this->render('/back-office/modif.html.twig');
    }
    /**
     * @Route("/back-office/articles/{slug}/suppression")
     * @return Response
     */
    public function sup():Response
    {
        $this->addFlash('danger', 'votre message a bien été supprimé');
        return $this->render('/back-office/sup.html.twig');
    }
}
