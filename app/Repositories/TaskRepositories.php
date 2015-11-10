<?php
namespace App;


use User;
use Task;
use TaskCategory;
use TaskLog;
use TaskStep;

class TaskRepositories {


    /**
     * TaskRepositories constructor.
     */
    public function __construct(Task $task)
    {
        $this->task=$task;
    }
}