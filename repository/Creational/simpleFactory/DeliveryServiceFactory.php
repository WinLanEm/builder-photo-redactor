<?php

namespace simpleFactory;

require_once 'YandexService.php';
require_once 'CdekService.php';
require_once 'AvitoService.php';
require_once 'MailOfRussiaService.php';
require_once 'DeliveryServiceFactoryInterface.php';

class DeliveryServiceFactory implements DeliveryServiceFactoryInterface
{
    public static function getDeliveryService(string $service, array $params): DeliveryInterface
    {
        switch ($service) {
            case 'avito':
            {
                $currentService = new AvitoService();
                $currentService->setParams($params);
                $currentService->setServiceName('Avito');
                break;
            }
            case 'cdek':
            {
                $currentService = new CdekService();
                $currentService->setParams($params);
                $currentService->setServiceName('Cdek');
                break;
            }
            case 'yandex':
            {
                $currentService = new YandexService();
                $currentService->setParams($params);
                $currentService->setServiceName('Yandex');
                break;
            }
            case 'mail':
            {
                $currentService = new MailOfRussiaService();
                $currentService->setParams($params);
                $currentService->setServiceName('Mail');
                break;
            }
            default:
            {
                throw new \Exception('undefined delivery service ' . $service);
            }
        }
        return $currentService;
    }
}