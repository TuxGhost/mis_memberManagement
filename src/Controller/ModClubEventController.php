<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModClubEventController extends AbstractController
{
    #[Route('/mod/club/event', name: 'app_mod_club_event')]
    public function index(): Response
    {
        $doctrine = $this->getDoctrine()->getManager();
        $users = $doctrine
            ->getRepository("App\Entity\ModClubEvent")
            ->findAll();
        
        return $this->render('mod_club_event/index.html.twig', [
            'controller_name' => 'ModClubUserController',
            'data' => $users,
        ]);
    }
}
