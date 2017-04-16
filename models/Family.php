<?php

class Family
{
    private $totalAge;

    function __construct()
    {
        $this->totalAge = 35;
    }

    function getTotalAge()
    {
        return $this->totalAge;
    }
}