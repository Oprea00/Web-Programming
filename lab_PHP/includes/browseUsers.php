<?php

	include ('../connection.php');


	$connection = OpenConnection();
	if (!$connection)
	{
		die('Could not connect: ' . mysqli_error($connection));
	}

	$role = mysqli_real_escape_string($connection,$_GET['role']);
	$sql = "SELECT * FROM user WHERE role =?;";
	$statement = mysqli_stmt_init($connection);

	if(!mysqli_stmt_prepare($statement,$sql))
	{
		echo "Sql statement failed" . $sql . " " . mysqli_error($connection);
	}
	else 
	{
		mysqli_stmt_bind_param($statement,"s",$role);
		mysqli_stmt_execute($statement);
		$users = mysqli_stmt_get_result($statement);
	}

	if(mysqli_num_rows($users)>0)
	{
		echo "<table>
				<tr>
				<th>id</th>
				<th>Name</th>
				<th>Username</th>
				<th>Password</th>
				<th>Age</th>
				<th>Role</th>
				<th>Profile</th>
				<th>Email</th>
				<th>Webpage</th>
				</tr>";
		while($row = mysqli_fetch_assoc($users))
		{
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Username']."</td>";
			echo "<td>".$row['Password']."</td>";
			echo "<td>".$row['Age']."</td>";
			echo "<td>".$row['Role']."</td>";
			echo "<td>".$row['Profile']."</td>";
			echo "<td>".$row['Email']."</td>";
			echo "<td>".$row['Webpage']."</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	else 
	{
		echo "Nothing found";
	}

	CloseConnection($connection);
?>