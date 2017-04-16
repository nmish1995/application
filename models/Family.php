<?php

class Family
{
    private $members;

    function __construct()
    {
        include "/home/admin/web/thecovergame.com/public_html/application/models/Human.php";

        $this->members = array(
            new Human('Ira', 'girl', 35),
            new Human('Dima', 'boy', 35),
            new Human('Mike', 'boy', 11),
            new Human('Paul', 'boy', 6),
            new Human('Alex', 'boy', 1),
            new Human('Andrew', 'boy', 1));
    }

    function getTotalAge()
    {
        $totalAge = 0;

        foreach ($this->members as $member)
            $totalAge += $member->getAge();

        return $totalAge;
    }
}