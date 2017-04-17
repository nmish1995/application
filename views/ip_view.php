<?php
include "start.php";
$ip = $_SERVER['REMOTE_ADDR'];
$mysql_ip=mysql_query("SELECT `ip` FROM `counter` WHERE `ip` == '{$ip}'");
$result=mysql_query("SELECT `count` FROM `counter`");
$row=mysql_fetch_row($result);
echo $row[1];
echo $row[2];
if($mysql_ip != null){
    $result++;
    $query=mysql_query("UPDATE `counter` SET `count`='{$count}' WHERE `ip` == '{$ip}'");
}else{
    $first_count=1;
    $query=mysql_query("INSERT INTO counter (`ip`,`count`) VALUES ('{$ip}','{$first_count}')");
}

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