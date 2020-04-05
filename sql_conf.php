<?php
header('Content-Type: text/html; charset=UTF-8');

$sql_host = "127.0.0.1";
$sql_username = "fayrobot";
$sql_password = "IDEAJELSZÓÓÓD";
$sql_db = "fayrobot";

$mysqli = new mysqli($sql_host, $sql_username, $sql_password, $sql_db);

if($mysqli->connect_error)
{
	die("Nem sikerült a szerverhez kapcsolódni!/Adatbázist kiválasztani!");
}

?>