<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnotherResponseController extends AbstractController
{
    #[Route('/another-response', name: 'another-response')]
    public function anotherResponse(): Response
    {
        return new Response("another-response");
    }
}