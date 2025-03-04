<?php

namespace bridge;

use bridge\objects\Category;
use bridge\objects\Client;
use bridge\realization\CategoryWidgetRealization;
use bridge\realization\ClientWidgetRealization;
use bridge\realization\ProductWidgetRealization;
use bridge\widgets\WidgetBigAbstraction;
use bridge\widgets\WidgetLongAbstract;
use bridge\widgets\WidgetMiddleAbstraction;
use bridge\widgets\WidgetSmallAbstraction;
use composite\models\Product;

require_once __DIR__ . '/realization/ProductWidgetRealization.php';
require_once __DIR__ . '/realization/CategoryWidgetRealization.php';
require_once __DIR__ . '/realization/ClientWidgetRealization.php';
require_once __DIR__ . '/objects/Product.php';
require_once __DIR__ . '/objects/Category.php';
require_once __DIR__ . '/objects/Client.php';
require_once __DIR__ . '/widgets/WidgetBigAbstraction.php';
require_once __DIR__ . '/widgets/WidgetSmallAbstraction.php';
require_once __DIR__ . '/widgets/WidgetMiddleAbstraction.php';
require_once __DIR__ . '/widgets/WidgetLongAbstract.php';


class WidgetBridge
{
    public function run()
    {
        $productRealization = new ProductWidgetRealization(new Product());
        $categoryRealization = new CategoryWidgetRealization(new Category());
        $clientRealization = new ClientWidgetRealization(new Client());

        $views = [
            new WidgetBigAbstraction(),
            new WidgetMiddleAbstraction(),
            new WidgetSmallAbstraction(),
            new WidgetLongAbstract(),
        ];
        foreach ($views as $view) {
            $view->run($clientRealization);
            $view->run($productRealization);
            $view->run($categoryRealization);
        }
    }
}