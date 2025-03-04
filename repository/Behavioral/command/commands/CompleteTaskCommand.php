<?php

namespace command\commands;

use command\classes\Task;
use command\interfaces\CommandInterface;

require_once __DIR__ . '/../interfaces/CommandInterface.php';

class CompleteTaskCommand implements CommandInterface
{
    private $task;

    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    public function execute(): void
    {
        $this->task->complete();
    }

    public function undo(): void
    {
        $this->task->unComplete();
    }

}