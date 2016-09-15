<?php

namespace Tests;

use App\Task;
use App\TaskList;
use PHPUnit\Framework\TestCase;

class TaskTest extends Testcase
{

    /** @test **/
    public function isATodo()
    {
        $task = new Task('Tasktest');
        $this->assertInstanceOf('App\Todo', $task);
    }

    /** @test **/
    public function createTask()
    {
        $task=new Task("My first single task");
        $this->assertInstanceOf('App\Todo', $task);
        $this->assertEquals('My first single task', $task->getName());
    }

    /** @test **/
    public function setDueDate()
    {
        $dueDate = new \DateTime();
        $dueDate->setDate('2016', '09', '15');
        $dueDate->setTime('19', '00');

        $task = new Task('Testtask');
        $task->setDue($dueDate);

        $this->assertEquals('2016-09-15 19:00', $task->getDue());
    }
}
