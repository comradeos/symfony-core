<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController extends AbstractController
{
    #[Route('/hello-world', name: 'hello-world')]
    public function helloWorld(): JsonResponse
    {
        return $this->json([
            'message' => 'Hello!'
        ]);
    }
}