<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModClubUserController extends AbstractController
{
    #[Route('/mod/club/user', name: 'app_mod_club_user')]
    public function index(): Response
    {
        $doctrine = $this->getDoctrine()->getManager();
        $users = $doctrine
            ->getRepository("App\Entity\ModClubUser")
            ->findAll();
        
        return $this->render('mod_club_user/index.html.twig', [
            'controller_name' => 'ModClubUserController',
            'data' => $users,
        ]);
    }
}
