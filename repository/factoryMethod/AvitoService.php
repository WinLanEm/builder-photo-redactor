<?php


require_once 'DeliveryInterface.php';
class AvitoService implements DeliveryInterface
{
    private $params;
    private $serviceName;

    /**
     * @return mixed
     */
    public function getServiceName():string
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
    public function getParams():array
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
    public function calculateCost(array $params): float
    {

        $bigVolumeRatio = 0.8;
        $weightPrice = $params['weight'] * 0.1;
        $volume = $params['height'] * $params['width'] * $params['length'];
        $totalSizePrice = $volume>20000?$weightPrice * $bigVolumeRatio:$weightPrice;
        $totalPrice = $totalSizePrice * ($params['distance'] * 0.4);
        return $totalPrice;
    }

    /**
     * @return mixed
     */

}