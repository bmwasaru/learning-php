<?php

$server_name = 'localhost';
$user_name = 'root';
$password = 'root';
$db_name = 'volunteers';

// create a connection
$conn = new mysqli($server_name, $user_name, $password, $db_name);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connection successful <br>";

$sql = "select name from names";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
		echo "name : "  .  $row["name"] . "<br>";
    } 
}
else {
	echo "0 results";
}

// close connection
mysqli_close($conn);
