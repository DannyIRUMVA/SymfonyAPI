<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HelloWorldController extends AbstractController
{
    #[Route('/hello/world', name: 'app_hello_world')]
    public function index():Response
    {
    $data = [
        'name' => 'John Doe',
        'message' => 'Hello from Symfony!',
    ];

    return $this->render('homePage.html.twig', $data);
    }
}
