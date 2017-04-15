<?php
include "start.php";
$ip = $_SERVER['REMOTE_ADDR'];
$insert = "INSERT INTO ip (`ip_mysql`) VALUES ('{$ip}')";
$ip_query = mysql_query("SELECT `ip_mysql` FROM `ip`",$db);
$count = mysql_num_rows($ip_query);
echo "<div class='alert alert-warning' role='alert'>
<span class='glyphicon glyphicon-console' aria-hidden='true'>
</span>
Ваш IP-адрес -- ".$ip."
</div>
<br>
<div class='alert alert-warning' role='alert'>
<span class='glyphicon glyphicon-console' aria-hidden='true'>
</span>
Всего посещений -- ".$count."
</div>";