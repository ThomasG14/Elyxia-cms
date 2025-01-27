<?php

namespace App\Controller;

use App\Service\AppSettingService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    public function __construct(
        private AppSettingService $appSettingService
    ){}

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $settings = $this->appSettingService->getAppSettings();
        return $this->render($settings['themePath'] . 'home/index.html.twig', [
            'pageName' => 'home',
            'settings' => $settings,
        ]);

    }
}
