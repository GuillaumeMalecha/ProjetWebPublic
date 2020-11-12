<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
        /**
         * @Route("/admin")
         */
    public function admin()
    {
        return $this->render('admin/admin.html.twig');
    }

    /**
         * @Route("/admin")
         */
    public function prestataires()
    {
        return $this->render('admin/prestataires.html.twig');
    }
}