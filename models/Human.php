<?php

class Human
{
    private $state; // boy || girl

    private $age;

    private $name;

    function __construct($name, $state, $age)
    {
        $this->name = $name;
        $this->state = $state;
        $this->age = $age;
    }

    function getAge()
    {
        return $this->age;
    }
}