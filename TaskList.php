<?php

class TaskList implements Todo
{

  private $todoList = [];

  public function __construct(array $tasks)
  {
      $this->todoList = $tasks;
  }

  public function add(Todo $task)
  {
    $this->todoList[] = $task;
  }

  public function remove(Todo $task)
  {
    if($index = array_search($task, $this->todoList, true))
    {
      unset($this->todoList[$index]);
    }
  }

  public function isFinished()
  {
    foreach ($this->todoList as $todo) {
      if(!$todo->isFinished) return false;
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
