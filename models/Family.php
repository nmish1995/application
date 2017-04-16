<?php

class Family
{
    private $members;

    function __construct()
    {
        include "/home/admin/web/thecovergame.com/public_html/application/models/Human.php";

        $this->members = array(
            new Human('Ira', 'girl', 35, 'parrot'),
            new Human('Dima', 'boy', 35, 'parrot'),
            new Human('Mike', 'boy', 11, 'puppy'),
            new Human('Paul', 'boy', 6, 'puppy'),
            new Human('Alex', 'boy', 1, 'puppy'),
            new Human('Andrew', 'boy', 1, 'puppy'));
    }

    function getTotalAge()
    {
        $totalAge = 0;

        foreach ($this->members as $member)
            $totalAge += $member->getAge();

        return $totalAge;
    }

    function getBoysCount()
    {
        $boysCount = 0;

        foreach ($this->members as $member)
            if ($member->isBoy() == true)
                ++$boysCount;

        return $boysCount;
    }

    function getParrotsCount()
    {
        $parrotsCount = 0;

        foreach ($this->members as $member)
            if ($member->isParrot() == true)
                ++$parrotsCount;

        return $parrotsCount;
    }

    function getPuppiesCount()
    {
        $puppiesCount = 0;

        foreach ($this->members as $member)
            if ($member->isPuppy() == true)
                ++$puppiesCount;

        return $puppiesCount;
    }


    function getGirlsCount()
    {
        $girlsCount = 0;

        foreach ($this->members as $member)
            if ($member->isGirl() == true)
                ++$girlsCount;

        return $girlsCount;
    }
}