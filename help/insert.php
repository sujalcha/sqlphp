<?php

require "conn.php";

$firstname = mysqli_real_escape_string($conn, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_REQUEST['lastname']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$pnumber = mysqli_real_escape_string($conn, $_REQUEST['pnumber']);

 
$mysql_qry = "INSERT INTO firsttable(firstname, lastname, email, pnumber)

VALUES ('$firstname','$lastname','$email','$pnumber')";


if($conn->query($mysql_qry)===TRUE)
{
 header("location: list.php");
                exit();
}

else
{
echo "not inserted";
}

$conn->close();



?>