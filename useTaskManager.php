<?php

use command\classes\Task;
use command\commands\CompleteTaskCommand;
use command\commands\DeleteTaskCommand;
use command\TaskManager;

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET");

require_once __DIR__ . '/repository/Behavioral/command/TaskManager.php';
require_once __DIR__ . '/repository/Behavioral/command/classes/Task.php';
require_once __DIR__ . '/repository/Behavioral/command/commands/CompleteTaskCommand.php';
require_once __DIR__ . '/repository/Behavioral/command/commands/DeleteTaskCommand.php';
$tasks = [
    new Task(1, "Написать код"),
    new Task(2, "Протестировать код"),
    new Task(3, "Отправить код на ревью"),
];

$manager = new TaskManager();
$manager->setCompleteTask(new CompleteTaskCommand($tasks[0]));
$manager->setDeleteTask(new DeleteTaskCommand($tasks[1],$tasks));
$manager->setUndoCommand(new CompleteTaskCommand($tasks[0]));
$manager->run();
print_r($tasks);

