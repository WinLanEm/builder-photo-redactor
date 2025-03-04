<?php

namespace abstractFactory;

use abstractFactory\factories\DarkFactory;
use abstractFactory\factories\LightFactory;
use abstractFactory\factories\VisuallyImpairedFactory;
use abstractFactory\interfaces\ModeFactoryInterface;

require_once __DIR__ . '/interfaces/ModeFactoryInterface.php';
require_once __DIR__ . '/factories/DarkFactory.php';
require_once __DIR__ . '/factories/LightFactory.php';
require_once __DIR__ . '/factories/VisuallyImpairedFactory.php';

class ModeFactory
{
    /**
     * @throws Exception
     */
    public function getFactory($type): ModeFactoryInterface
    {
        switch ($type) {
            case "dark":
            {
                $factory = new DarkFactory();
                break;
            }
            case "light":
            {
                $factory = new LightFactory();
                break;
            }
            case "visually-impaired":
            {
                $factory = new VisuallyImpairedFactory();
                break;
            }
            default:
            {
                throw new Exception("Неизвестный тип фабрики $type");
            }
        }
        return $factory;
    }
}