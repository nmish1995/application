<?php

include "start.php";
$ip=$_SERVER['REMOTE_ADDR'];
$insert="INSERT INTO `ip`(`ip_mysql`) VALUES ([$ip])";
$count=count("SELECT * FROM `ip`");
echo "<div class='alert alert-warning' role='alert'><span class='glyphicon glyphicon-console' aria-hidden='true'></span>Ваш IP-адрес -- ".$ip."</div><br><br>";
echo "<div class='alert alert-warning' role='alert'><span class='glyphicon glyphicon-console' aria-hidden='true'></span>Всего посещений -- ".$count."</div>";