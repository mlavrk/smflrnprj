<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user', name: 'user_')]
class UserController extends AbstractController
{
    #[Route('/', name: 'list')]
    public function list(): JsonResponse{
        return new JsonResponse([
            'Sam', 'Mike', 'John'
        ]);
    }

    #[Route('/{userName}', name: 'data', requirements: ['userName' => '[0-9a-zA-Z]+'])]
    public function data(string $userName): JsonResponse{
        return new JsonResponse([
            'id'   => mt_rand(1000, 10000),
            'name' => ucfirst($userName)
        ]);
    }
}