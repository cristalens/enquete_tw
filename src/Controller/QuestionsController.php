<?php

namespace App\Controller;

use App\Repository\BlocRepository;
use App\Repository\QuestionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionsController extends AbstractController
{
    /**
     * @Route("/questions", name="questions")
     * @return Response
     */

    public function index(BlocRepository $blocRepository, QuestionsRepository $questionsRepository): Response
    {
        $bloc = $blocRepository->findAll();
        // $question = $questionsRepository->findAll();
        // $question = $questionsRepository->findBy(['id_bloc' => 1]);
        // $question = $questionsRepository->find(1);
        $question = $questionsRepository->findQuestionByBloc();
        // dump($question);
        return $this->render('questions/index.html.twig', [
            'controller_name' => 'Questions',
            'current_menu' => 'questions',
            'blocs' => $bloc,
            'questions' => $question,
        ]);
    }
}
