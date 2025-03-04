<?php

namespace decorator;

use decorator\classes\OrderUpdate;
use decorator\decorators\OrderUpdateDecoratorLogger;
use decorator\decorators\OrderUpdateDecoratorNotifierManagers;
use decorator\decorators\OrderUpdateDecoratorNotifierUsers;
use decorator\interfaces\OrderUpdateInterface;
use decorator\models\Order;

require_once __DIR__ . '/interfaces/OrderUpdateInterface.php';
require_once __DIR__ . '/decorators/OrderUpdateDecoratorLogger.php';
require_once __DIR__ . '/decorators/OrderUpdateDecoratorNotifierManagers.php';
require_once __DIR__ . '/decorators/OrderUpdateDecoratorNotifierUsers.php';
require_once __DIR__ . '/classes/OrderUpdate.php';
require_once __DIR__ . '/models/Order.php';

class DecoratorAppSettings
{
    public function run()
    {
        $settings = $this->getEnabledSettings('fromWeb');
        $updateOrderObj = $this->createUpdater($settings);
        $order = new Order();
        $orderData = [];

        $updateOrderObj->run($order, $orderData);
    }

    private function getEnabledSettings(string $group): array
    {
        $settings = [
            'fromWeb' => [
                [
                    'name' => 'log',
                    'enabled' => 1,
                    'decorator_class' => OrderUpdateDecoratorLogger::class
                ],
                [
                    'name' => 'notifyUsers',
                    'enabled' => 1,
                    'decorator_class' => OrderUpdateDecoratorNotifierUsers::class
                ],
                [
                    'name' => 'notifyManagers',
                    'enabled' => 0,
                    'decorator_class' => OrderUpdateDecoratorNotifierManagers::class
                ]
            ],
            'fromAdmin' => [
                [
                    'name' => 'log',
                    'enabled' => 1,
                    'decorator_class' => OrderUpdateDecoratorLogger::class
                ],
                [
                    'name' => 'notifyManagers',
                    'enabled' => 1,
                    'decorator_class' => OrderUpdateDecoratorNotifierManagers::class
                ]
            ]
        ];
        $filteredSettings = array_map(function ($group) {
            return array_filter($group, function ($setting) {
                return $setting['enabled'] == 1;
            });
        }, $settings);
        return $filteredSettings[$group];
    }

    private function createUpdater(array $settings): OrderUpdateInterface
    {
        $updateOrderObj = new OrderUpdate();

        foreach ($settings as $setting) {
            $className = $setting['decorator_class'];
            $updateOrderObj = new $className($updateOrderObj);
        }
        return $updateOrderObj;
    }
}