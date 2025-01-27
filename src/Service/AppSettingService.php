<?php

namespace App\Service;

use App\Repository\SettingRepository;
use Psr\Log\LoggerInterface;

class AppSettingService
{
    public function __construct(
        private readonly SettingRepository $settingRepository,
    )
    {}

    public function getAppSettings(): array{
        $settingsEntity =  $this->settingRepository->findAll();
        $settings = [];
        foreach ($settingsEntity as $setting){
            if($setting->getName() === "theme"){
                if($setting->getValue() !== "app"){
                    $settings['themePath'] = "@themes/".$setting->getValue()."/templates/";
                }else {
                    $settings['themePath'] = "";
                }
            }
            $settings[$setting->getName()] = $setting->getValue();
        }
        return $settings;
    }
}