<?php
	include ('../connection.php');

	$connection = OpenConnection();
	if (!$connection)
	{
		die('Could not connect: ' . mysqli_error($connection));
	}

	//take the variables from the post array
	$name = mysqli_real_escape_string($connection,$_POST['name']);
	$username = mysqli_real_escape_string($connection,$_POST['username']);
	$password = mysqli_real_escape_string($connection,$_POST['password']);
	$age = mysqli_real_escape_string($connection,$_POST['age']);
	$age = (int)$age;
	$role = mysqli_real_escape_string($connection,$_POST['role']);
	$profile = mysqli_real_escape_string($connection,$_POST['profile']);
	$email = mysqli_real_escape_string($connection,$_POST['email']);
	$webpage = mysqli_real_escape_string($connection,$_POST['webpage']);

	//sql insert statemennt
	$sql ="INSERT INTO user (name,username,password,age,role,profile,email,webpage) Values('$name','$username','$password','$age','$role','$profile','$email','$webpage')";

	if (mysqli_query($connection,$sql))
	{
		echo "New user has been added.";
	}
	else 
	{
		echo "Error: " .$sql ." " .mysqli_error($connection);
	}

	CloseConnection($connection);
?>