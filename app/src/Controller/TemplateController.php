<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TemplateController extends AbstractController
{
    #[Route('/template', name: 'template')]
    public function anotherResponse(): Response
    {
        return $this->render("my_template.html.twig", [ "hello" => "world"]);
    }
}