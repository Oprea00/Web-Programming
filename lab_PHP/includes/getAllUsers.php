<?php

	include ('../connection.php');

?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php

	$connection = OpenConnection();
	if (!$connection)
	{
		die('Could not connect: ' . mysqli_error($connection));
	}

	$sql = "SELECT * FROM user;";
	$users = mysqli_query($connection,$sql);

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

	CloseConnection($connection);

?>
</body>
</html>