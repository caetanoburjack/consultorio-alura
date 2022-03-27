<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class OlaMundoController
{
    public function olaMundoAction()
    {
        /**
         * @Route("/ola");
         */
        echo 'Olá mundo!';
        exit;
    }
}