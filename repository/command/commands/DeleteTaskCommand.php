<?php

require_once __DIR__ . '/../interfaces/CommandInterface.php';

class DeleteTaskCommand implements CommandInterface
{
    private $task;
    private $taskList;
    public function __construct(Task $task, array &$taskList)
    {
        $this->task = $task;
        $this->taskList = &$taskList;
    }

    public function execute(): void
    {
        $this->task->delete();
        $this->removeFromTaskList($this->task->getId());

    }

    public function undo(): void
    {
        echo "Задача {$this->task->getTitle()} восстановлена\n";
        $this->taskList[] = $this->task;
    }
    private function removeFromTaskList(int $taskId):void
    {
        $this->taskList = array_filter($this->taskList,function ($task) use ($taskId){
            return $task->getId() !== $taskId;
        });
    }

}