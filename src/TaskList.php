<?php

namespace App;

class TaskList implements Todo
{

    private $todoList = [];

    public function __construct(array $tasks=null)
    {
        $this->todoList = $tasks;
    }

    public function add(Todo $task)
    {
        $this->todoList[] = $task;
    }

    public function remove(Todo $task)
    {
        $index = array_search($task, $this->todoList, true);

        if ($index !== false) {
            unset($this->todoList[$index]);
        }
    }

    public function isFinished()
    {
        foreach ($this->todoList as $todo) {
            if (!$todo->isFinished()) {
                return false;
            }
        }
        return true;
    }

    public function markFinished()
    {
        foreach ($this->todoList as $todo) {
            $todo->markFinished();
        }
    }
}
