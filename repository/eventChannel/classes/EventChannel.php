<?php

class EventChannel implements EventChannelInterface
{
    private $topics = [];
    public function publish($topic, $data)
    {
        if(empty($this->topics[$topic])){
            return;
        }
        foreach ($this->topics[$topic] as $subscriber){
            $subscriber->notify($data);
        }
    }

    public function subscribe($topic, SubscriberInterface $subscriber)
    {
        $this->topics[$topic][] = $subscriber;
        $msg = "{$subscriber->getName()} подписан на $topic\n";
        echo $msg;
        //Очевидно тут другая логика, но для теста без бд можно и так
    }

}