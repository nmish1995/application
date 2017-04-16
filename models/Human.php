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

    function isBoy()
    {
        if ($this->state == 'boy')
            return true;
        else
            return false;
    }
}
function isGirl()
{
    if ($this->state == 'girl')
        return true;
    else
        return false;
}