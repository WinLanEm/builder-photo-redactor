<?php

require_once __DIR__ . '/interfaces/CommandInterface.php';

class TaskManager
{
    private $completeTask;
    private $deleteTask;
    private $undoCommand;

    /**
     * @param mixed $completeTaskCommand
     */
    public function setCompleteTask(CommandInterface $completeTask): void
    {
        $this->completeTask = $completeTask;
    }

    /**
     * @param mixed $undoCommand
     */
    public function setUndoCommand(CommandInterface $undoCommand): void
    {
        $this->undoCommand = $undoCommand;
    }

    /**
     * @param mixed $deleteTaskCommand
     */
    public function setDeleteTask(CommandInterface $deleteTask): void
    {
        $this->deleteTask = $deleteTask;
    }

    public function run()
    {
        if($this->completeTask instanceof CommandInterface){
            $this->completeTask->execute();
        }
        if($this->deleteTask instanceof CommandInterface){
            $this->deleteTask->execute();
        }
        if($this->undoCommand instanceof CommandInterface){
            $this->undoCommand->undo();
        }
    }
    //можно изменить run и сделать run для каждой команды, чтобы методы можно было вызывать в произвольном порядке.
    //Так же нет возможности откатить несколько последних команд, можно добавить $commandHistory, чтобы была
    //возможность откатывать команды по очереди с конца
    //Так же код не полностью соответсвует каноничному паттерну, но я считаю, что он больше подходит для реальных задач
}