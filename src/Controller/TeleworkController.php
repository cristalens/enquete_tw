<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class TeleworkController extends AbstractController
{
    /**
     * @var Environment
     */

    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function index(): Response
    {
        return new Response($this->twig->render(
            'telework/index.html.twig',
            [
                'controller_name' => 'Sondage télétravail',
            ],
        ));
    }

    /**
     * @Route("/telework", name="questions")
     */

    //     return $this->render('telework/index.html.twig', [
    //         'controller_name' => 'TeleworkController',
    //         'mon_nom' => 'Yvan',
    //     ]);
}
