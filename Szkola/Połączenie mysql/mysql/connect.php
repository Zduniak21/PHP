<?php

$serwer = "localhost";
$user = "root";
$pass = "";
$db = "database.sql";

$mysql = mysql_connect($serwer, $user, $pass);
$db_selected = mysql_select_db($db);