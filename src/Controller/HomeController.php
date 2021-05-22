<?php

namespace App\Controller;

use App\Entity\Emploi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig');
    }

     /**
     * @Route("/job-listing", name="job_listing")
     */
    public function emplois(): Response
    {
        return $this->render('home/job-listing.html.twig');
    }

      /**
     * @Route("/job-detaill", name="job_detail")
     */
    public function detail(/*Emploi $emploi*/): Response
    {
        return $this->render('home/job-detail.html.twig');
    }
}
