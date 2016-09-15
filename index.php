<?php
use App\Task;

$taskListFactory = require 'bootstrap.php';

$todoList->markFinished();
$todoList->remove($sublist);
$todoList->add(new Task('neuer Todo'));

var_dump($todoList);
