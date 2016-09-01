<?php

require 'vendor/autoload.php';


use App\TaskList;
use App\Task;

$sublist =   new TaskList([
      new Task('Todo 2a'),
      new Task('Todo 2b')
    ]);


$todos = new TaskList(
  [
    new Task('Todo 1'),
    new Task('Todo 2'),
    $sublist
  ]
);

$todos->markFinished();
$todos->remove($sublist);
$todos->add(new Task('neuer Todo'));

var_dump($todos);
