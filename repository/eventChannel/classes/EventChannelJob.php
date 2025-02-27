<?php

require_once 'Publisher.php';
require_once 'EventChannel.php';
require_once 'Subscriber.php';

class EventChannelJob
{
    public function run()
    {
        $channel = new EventChannel();

        //тут мы создаем трех поставщиков условный постов 3 контент мейкера
        $clothesGroup = new Publisher('clothes-news',$channel);
        $bookGroup = new Publisher('book-news',$channel);
        $juiceGroup = new Publisher('juice-news',$channel);
        //тут создаем их подписчиков
        $john = new Subscriber('John');
        $bob = new Subscriber('Bob');
        $liza = new Subscriber('Liza');
        //тут мы их подписываем на контент мейкеров
        $channel->subscribe('clothes-news',$john);
        $channel->subscribe('book-news',$bob);
        $channel->subscribe('juice-news',$liza);
        //а здесь контент мейкеры выкладывают новые посты
        $clothesGroup->publish('New clothes post');
        $bookGroup->publish('New book post');
        $juiceGroup->publish('New juice post');
    }
}