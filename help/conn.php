<?php

$db_name = "testy";
$mysqli_username = "root";
$mysqli_password = "root";
$server_name = "localhost";

$conn = mysqli_connect($server_name, $mysqli_username, $mysqli_password, $db_name);

if($conn)
{
echo "connection success";

}

else
{
echo "connection failed";
}

?>