<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends BaseController
{

    #[Route('/forms', name: 'forms', defaults: ['name' => null], methods: ['GET', 'HEAD'])]
    public function index($name): Response
    {
        return $this->json([
            'message' => $name,
            'path' => 'src/Controller/FormController.php',
        ]);
    }

}