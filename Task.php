<?php

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

  public function __toString()
  {
    return $this->name;
  }
}
