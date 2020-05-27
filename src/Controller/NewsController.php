<?php

namespace App\Controller;

use App\Entity\News;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/news")
 */
class NewsController extends AbstractController
{
    /**
     * @Route("/", name="news")
     */
    public function index()
    {
        $news_list = $this->getDoctrine()->getRepository(News::class)->findAll();
        return $this->render('news/index.html.twig', [
            'news_list' => $news_list,
        ]);
    }

    /**
     * @Route("/{id}", name="show_news")
     * @param Request $request
     * @param News $news
     * @return Response
     */
    public function show_news(Request $request, News $news)
    {
        return $this->render('news/show.html.twig', [
            'news' => $news,
        ]);
    }
}
