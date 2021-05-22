<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index(): Response
    {
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }

    /**
     * @Route("/user/list", name="user_list")
     */
    public function user_list(): Response
    {
        return $this->render('dashboard/user-list.html.twig');
    }

    /**
     * @Route("/pubs/list", name="pubs_list")
     */
    public function pubs_list(): Response
    {
        return new Response('liste des publications');
    }
}
