<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/test")
     */
    public function test()
    {
        return $this->render('test.html.twig');
    }

    /**
     * @Route("/contact")
     */
    public function contact()
    {
        return $this->render('contact.html.twig');
    }

    /**
     * @Route("/login")
     */
    public function login()
    {
        return $this->render('login.html.twig');
    }

    /**
     * @Route("/register")
     */
    public function register()
    {
        return $this->render('register.html.twig');
    }
}