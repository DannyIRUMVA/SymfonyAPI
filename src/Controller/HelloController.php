<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController
{
    #[Route('/hello', name: 'hello_world')]
    public function hello(): Response
    {
        $response = new Response();

        $response->setContent('Hello World!');

        $response->setStatusCode(Response::HTTP_OK);

        $response->headers->set('Content-Type', 'text/plain');

        return $response;
    }
}
