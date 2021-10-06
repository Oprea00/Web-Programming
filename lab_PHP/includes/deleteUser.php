<?php

	include ('../connection.php');

	$connection = OpenConnection();
	if (!$connection)
	{
		die('Could not connect: ' . mysqli_error($connection));
	}

	$id = mysqli_real_escape_string($connection,$_POST['id']);
	$id = (int)$id;
	echo $id;

	$sql = "DELETE FROM user WHERE id =?;";

	$statement = mysqli_stmt_init($connection);

	if (!mysqli_stmt_prepare($statement,$sql))
	{
		echo "Error: " .$sql ." " .mysqli_error($connection);
	}
	else 
	{
		echo "The user was deleted";
		mysqli_stmt_bind_param($statement,"i",$id);
		mysqli_stmt_execute($statement);	
	}

	CloseConnection($connection);

?>