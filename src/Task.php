<?php

namespace App;

class Task implements Todo
{
    private $name;

    private $due;

    private $isFinish = false;


    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function isFinished()
    {
        return $this->isFinish;
    }

    public function markFinished()
    {
        $this->isFinish = true;
    }

    public function setDue(\DateTime $due)
    {
        $this->due = $due;
    }

    public function getDue()
    {
        return $this->due->format('Y-m-d H:i');
    }

    public function __toString()
    {
        return $this->name;
    }
}
