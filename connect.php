<?php
$servername="localhost";
$username="root";
$password="Shadowthenumber-07";
$dbname="SYSMON";

$mysqli = mysqli_connect($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
	die("Connection Failed: " . $mysqli->connect_error);
}
?>
