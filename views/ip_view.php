<?php
include "start.php";
$ip=$_SERVER['REMOTE_ADDR'];
$insert="INSERT INTO `ip`(`ip_mysql`) VALUES ({$ip})";
$count=count("SELECT `ip_mysql` FROM `ip` WHERE `id`!='0'");
var_dump($insert);
echo "<div class='alert alert-warning' role='alert'><span class='glyphicon glyphicon-console' aria-hidden='true'></span>Ваш IP-адрес -- ".$ip."</div><br>";
echo "<div class='alert alert-warning' role='alert'><span class='glyphicon glyphicon-console' aria-hidden='true'></span>Всего посещений -- ".$count."</div>";