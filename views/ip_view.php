<?php
include "start.php";
$ip=$_SERVER['REMOTE_ADDR'];
$insert="INSERT INTO `ip` (`ip_mysql`) VALUES ({$ip})";
$query = "SELECT `ip_mysql` FROM `ip`";
$result = mysqli_query($query);
var_dump($result);
/*$count=count();*/
var_dump($count);
echo "<div class='alert alert-warning' role='alert'><span class='glyphicon glyphicon-console' aria-hidden='true'></span>Ваш IP-адрес -- ".$ip."</div><br>";
echo "<div class='alert alert-warning' role='alert'><span class='glyphicon glyphicon-console' aria-hidden='true'></span>Всего посещений -- ".$count."</div>";