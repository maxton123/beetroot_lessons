<?php

class User
{
    protected $name;
    protected $age;


    public function setAge($age): void
    {
        $this->age = $age;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }


    public function getName()
    {
        return $this->name;
    }


    public function getAge()
    {
        return $this->age;
    }

}

