<?php

namespace App\Model;

class User
{

    private $id;

    private $name;

    public function __construct(array $user)
    {
        list($id, $name) = $user;

        $this->id=$id;
        $this->name=$name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
