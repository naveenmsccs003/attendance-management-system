<?php

$sname= "localhost";
$unmae= "root";
$password = "msccs585";

$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}