<?php

require_once 'YandexService.php';
require_once 'CdekService.php';
require_once 'AvitoService.php';
require_once 'MailOfRussiaService.php';

class DeliveryServiceHelper
{
    public static function getDeliveryService(string $service):DeliveryInterface
    {
        switch ($service){
            case 'avito':{
                return new AvitoService();
            }
            case 'cdek':{
                return new CdekService();
            }
            case 'yandex':{
                return new YandexService();
            }
            case 'mail':{
                return new MailOfRussiaService();
            }
            default:{
                throw new \Exception('undefined delivery service ' . $service);
            }
        }
    }
}