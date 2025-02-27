<?php



interface SalaryStrategyInterface
{
    public function calc($user):float;

    public function getName():string;
    public function setWorkDays($period):void;
    public function getWorkDays():int;
}