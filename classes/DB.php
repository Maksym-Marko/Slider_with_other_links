<?php

$connection = mysql_connect("localhost", "BD", "US-n");
$db = mysql_select_db("BD");

mysql_query(" SET NAMES 'utf-8' ");

if (!$connection || !$db)
{
	exit(mysql_error());
}


?>