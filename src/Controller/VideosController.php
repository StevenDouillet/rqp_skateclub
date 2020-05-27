<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/videos")
 */
class VideosController extends AbstractController
{
    /**
     * @Route("/", name="videos")
     */
    public function index()
    {
        return $this->render('videos/index.html.twig');
    }
}
