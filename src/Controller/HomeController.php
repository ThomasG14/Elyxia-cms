<?php

namespace App\Controller;

use App\Repository\SettingRepository;
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

        return $this->render('@theme/exemple/templates/home/index.html.twig', [
            'controller_name' => 'HomeController',
            'appName' => 'Helyxia',
            'pageName' => 'Home',
            'favicon' => 'favicon.svg',
            'lang' => 'fr',
            'settings' => $settings,
        ]);

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'appName' => 'Helyxia',
            'pageName' => 'Home',
            'favicon' => 'favicon.svg',
            'lang' => 'fr',
            'settings' => $settings,
        ]);
    }
}
