<?php

namespace App\Service;

use App\Repository\SettingRepository;

class AppSettingService
{
    public function __construct(
        private readonly SettingRepository $settingRepository,)
    {}

    public function getAppSettings(): array{
        $settingsEntity =  $this->settingRepository->findAll();
        $settings = [];
        foreach ($settingsEntity as $setting){
            $settings[$setting->getName()] = $setting->getValue();
        }
        return $settings;
    }
}