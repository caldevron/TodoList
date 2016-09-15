<?php

require 'vendor/autoload.php';

use App\Task;
use App\TaskList;

$sublist = new TaskList([
      new Task('Todo 2a'),
      new Task('Todo 2b'),
  ]);

return new TaskList(
  [
    new Task('Todo 1'),
    new Task('Todo 2'),
    $sublist,
  ]
);
