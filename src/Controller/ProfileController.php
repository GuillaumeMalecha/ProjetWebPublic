<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
        /**
         * @Route("/profile")
         */
        public function profile()
        {
        return $this->render('profile/profile.html.twig');
        }
}