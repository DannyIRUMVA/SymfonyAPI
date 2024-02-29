<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;

class ReverseController extends AbstractController
{
    #[Route('/reverse', name: 'reverse_me')]
    public function reverse(Request $request): Response
    {
        $response = new Response();

        if ($request->request->get("reverse_this") && is_string($request->request->get("reverse_this"))) {

            $response->setContent(strrev($request->request->get("reverse_this")));

            $response->setStatusCode(Response::HTTP_OK);
        } else {

            $response->setContent("The /reverse endpoint requires a POST parameter 'reverse_this' with a string value.");

            $response->setStatusCode(Response::HTTP_BAD_REQUEST);
        }

        $response->headers->set('Content-Type', 'text/plain');

        return $response;
     }
}
