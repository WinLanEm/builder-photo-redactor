<?php

class Task
{
    private string $title;
    private int $id;
    private bool $isComplete;

    public function __construct(int $id,string $title)
    {
        $this->title = $title;
        $this->id = $id;
        $this->isComplete = false;
    }
    public function complete():void
    {
        $this->isComplete = true;
        echo "Задача $this->title выполнена\n";
    }
    public function unComplete():void
    {
        $this->isComplete = false;
        echo "Задача $this->title возвращена в невыполненное состояние\n";
    }
    public function delete():void
    {
        echo "Задача $this->title удалена\n";
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getId(): int
    {
        return $this->id;
    }
}