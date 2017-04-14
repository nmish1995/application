<?php
include "start.php";
$ip=$_SERVER['REMOTE_ADDR'];
$insert="INSERT INTO ip (`ip_mysql`) VALUES ({$ip})";
$query = mysql_query($insert,$db);
$result = mysql_query("SELECT `ip_mysql` FROM `ip`",$db);
$data = mysql_fetch_array($result);
echo count($data);
var_dump($data);
/*$count=count();*/
echo "<div class='alert alert-warning' role='alert'><span class='glyphicon glyphicon-console' aria-hidden='true'></span>Ваш IP-адрес -- ".$ip."</div><br>";
echo "<div class='alert alert-warning' role='alert'><span class='glyphicon glyphicon-console' aria-hidden='true'></span>Всего посещений -- ".$count."</div>";