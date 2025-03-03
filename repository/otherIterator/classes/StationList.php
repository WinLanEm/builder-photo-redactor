<?php

class StationList implements \Iterator
{
    protected $stations = [];
    protected $counter = 0;

    public function addStation(RadioStation $station):void
    {
        $this->stations[] = $station;
    }
    public function removeStation(RadioStation $station)
    {
        $toRemoveFrequency = $station->getFrequency();
        $this->stations = array_filter($this->stations,function(RadioStation $station) use ($toRemoveFrequency){
            return $station->getFrequency() !== $toRemoveFrequency;
        });
    }
    public function count():int
    {
        return count($this->stations);
    }
    public function current():RadioStation
    {
        return $this->stations[$this->counter];
    }
    public function key():int
    {
        return $this->counter;
    }
    public function next():void
    {
        $this->counter++;
    }

    public function rewind():void
    {
        $this->counter = 0;
    }

    public function valid():bool
    {
        return $this->current() !== null;
    }
}