<?php

	include ('../connection.php');

	$connection = OpenConnection();
	if (!$connection)
	{
		die('Could not connect: ' . mysqli_error($connection));
	}

	$id = mysqli_real_escape_string($connection,$_POST['id']);
	$id = (int)$id;
	$name = mysqli_real_escape_string($connection,$_POST['name']);
	$username = mysqli_real_escape_string($connection,$_POST['username']);
	$password = mysqli_real_escape_string($connection,$_POST['password']);
	$age = mysqli_real_escape_string($connection,$_POST['age']);
	$age = (int)$age;
	$role = mysqli_real_escape_string($connection,$_POST['role']);
	$profile = mysqli_real_escape_string($connection,$_POST['profile']);
	$email = mysqli_real_escape_string($connection,$_POST['email']);
	$webpage = mysqli_real_escape_string($connection,$_POST['webpage']);

	$sql = "UPDATE user SET name=?,username=?,password=?,age=?,role=?,profile=?,email=?,webpage=?  WHERE id=?;";

	$statement = mysqli_stmt_init($connection);

	if (!mysqli_stmt_prepare($statement,$sql))
	{
		echo "Error: " .$sql ." " .mysqli_error($connection);
	}
	else 
	{
		echo "The user was updated";
		mysqli_stmt_bind_param($statement,"sssissssi",$name,$username,$password,$age,$role,$profile,$email,$webpage,$id);
		mysqli_stmt_execute($statement);	
	}

	CloseConnection($connection);

?>