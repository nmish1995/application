<?php

class Counter
{
    function __construct($controller, $action, $ip)
    {

    }


    function saveVisit()
    {
        $query=mysql_query("SELECT * FROM `counter` WHERE `ip` == 0 AND `controller` == 0 AND `action` == 0 AND `count` == 0");
        $num=mysql_num_rows($query);
        echo "TEST123";
    }
}