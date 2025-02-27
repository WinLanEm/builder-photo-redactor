<?php



class AbstractStrategy implements SalaryStrategyInterface
{
    private $workDays;
    public function calc($user):float
    {
        return $this->workDays * 10;
    }
    public function getName():string
    {
        return (static::class);
    }
    public function setWorkDays($period):void
    {
        $dateStart = DateTime::createFromFormat('d.m.Y',$period[0]);
        $dateEnd = DateTime::createFromFormat('d.m.Y',$period[1]);
        $interval = $dateStart->diff($dateEnd);
        $this->workDays = $interval->days;
    }
    public function getWorkDays():int
    {
        return $this->workDays;
    }
}