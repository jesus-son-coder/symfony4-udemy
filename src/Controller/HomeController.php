<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    /**
     * @Route("/hello/{prenom}/age/{age}", name="hello")
     * @Route("hello", name="hello_base")
     * @Route("/hello/{prenom}", name="hello_prenom")
     * Montre la page qui dit bonjour
     *
     */
    public function hello($prenom = null, $age = 0) {
        return new Response("Bonjour..." . $prenom . ", vous avez " . $age . " ans");
    }


    /**
     * @Route("/home", name="homepage")
     */
    public function home() {
        $prenonms = ['Lior' => 31, "Joseph" => 12, "Anne" => 55];

        return $this->render(
            'home.html.twig',
            [ 
                'title' => "Bonjour Baby!",
                'age' => 12,
                'tableau' => $prenonms 
            ]
        );
    }

}


