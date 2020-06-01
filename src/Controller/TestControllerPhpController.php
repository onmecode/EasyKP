<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestControllerPhpController extends AbstractController
{
    /**
     * @Route("api/lol", name="test_controller_php")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/TestControllerPhpController.php',
        ]);
    }
}
