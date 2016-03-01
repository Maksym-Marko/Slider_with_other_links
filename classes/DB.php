<?php

$connection = mysql_connect("localhost", "DB", "Us-n");
$db = mysql_select_db("DB"); 

mysql_query(" SET NAMES 'utf-8' ");

if (!$connection || !$db)
{
	exit(mysql_error());
}


?>