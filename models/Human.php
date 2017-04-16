<?php

class Human
{
    private $state; // boy || girl

    private $age;

    private $name;

    private $function;

    function __construct($name, $state, $age, $function)
    {
        $this->name = $name;
        $this->state = $state;
        $this->age = $age;
        $this->function = $function;
    }

    function getAge()
    {
        return $this->age;
    }

    function isBoy()
    {
        if ($this->state == 'boy')
            return true;
        else
            return false;
    }

    function isParrot()
    {
        if ($this->function == 'parrot')
            return true;
        else
            return false;
    }

    function isPuppy()
    {
        if ($this->function == 'puppy')
            return true;
        else
            return false;
    }


    function isGirl()
    {
        if ($this->state == 'girl')
            return true;
        else
            return false;
    }
}