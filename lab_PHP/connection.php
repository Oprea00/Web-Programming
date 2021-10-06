<?php

function OpenConnection():mysqli
{
	$dbServerName = "localhost";
	$dbUserName = "root";
	$dbPassword = "";
	$dbName = "lab_php";

	return mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
}

function CloseConnection(mysqli $con)
{
	$con->close();
}

?>