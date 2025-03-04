<?php

namespace simpleFactory;

require_once 'DeliveryInterface.php';

class MailOfRussiaService implements DeliveryInterface
{
    private $params;

    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * @param mixed $params
     */
    public function setParams($params): void
    {
        $this->params = $params;
    }

    private $serviceName;

    /**
     * @return mixed
     */
    public function getServiceName(): string
    {
        return $this->serviceName;
    }

    /**
     * @param mixed $serviceName
     */
    public function setServiceName(string $serviceName): void
    {
        $this->serviceName = $serviceName;
    }

    public function calculateCost(array $params): float
    {
        $bigVolumeRatio = 0.2;
        $weightPrice = $params['weight'] * 0.3;
        $volume = $params['height'] * $params['width'] * $params['length'];
        $totalSizePrice = $volume > 12000 ? $weightPrice * $bigVolumeRatio : $weightPrice;
        $totalPrice = $totalSizePrice * ($params['distance'] * 0.3);
        return $totalPrice;
    }
}