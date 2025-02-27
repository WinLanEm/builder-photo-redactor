<?php

require_once 'interfaces/SalaryStrategyInterface.php';
require_once __DIR__ . '/stratagies/DesignerStrategy.php';
require_once __DIR__ . '/stratagies/DeveloperStrategy.php';
require_once __DIR__ . '/stratagies/TesterStrategy.php';


class SalaryManager
{
    private $salaryStrategy;
    private array $users;
    private array $period;

    public function __construct(array $period,array $users)
    {
        $this->users = $users;
        $this->period = $period;
    }

    public function handle()
    {
        $usersSalary = $this->calculateSalary();

        $this->saveSalary($usersSalary);

        return $usersSalary;
    }

    private function calculateSalary():array
    {
        $usersSalary = [];
        foreach ($this->users as $user){
            $strategy = $this->getStrategyByUser($user);
            $salary = $this->setCalculateStrategy($strategy)->calculateUserSalary($this->period,$user);
            $strategyName = $strategy->getName();
            $usersSalary[] = [
                'name' => $user['name'],
                'salary' => $salary,
                'strategyName' => $strategyName
            ];
        }
        return $usersSalary;
    }
    private function saveSalary($usersSalary)
    {
        return true;
        //Логика логов или записи в бд
    }
    private function getStrategyByUser($user):SalaryStrategyInterface
    {
        $strategyClass = $user['position'] . 'Strategy';
        if(!class_exists($strategyClass)){
            throw new \Exception('Должности не существует');
        }
        return new $strategyClass;
    }
    private function calculateUserSalary($period,$user)
    {
        $this->salaryStrategy->setWorkDays($period);
        return $this->salaryStrategy->calc($user);
    }
    private function setCalculateStrategy(SalaryStrategyInterface $strategy)
    {
        $this->salaryStrategy = $strategy;
        return $this;
    }

}