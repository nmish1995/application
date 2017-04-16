<?php

class Counter
{
    function __construct($controller, $action, $ip)
    {

    }


    function saveVisit()
    {
        $query=mysql_query(
            "SELECT * 
            FROM `counter` 
            WHERE `ip` == '' 
              AND `controller` == '' 
              AND `action` == '' 
              AND `count` == ''");
        $num=mysql_num_rows($query);
    }
}