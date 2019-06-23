<?php

require "conn.php";

$mysql_qry = "CREATE TABLE `testy`.`firsttable` ( `id` INT NOT NULL AUTO_INCREMENT , `firstname` VARCHAR(10) NOT NULL , `lastname` VARCHAR(10) NOT NULL , `email` VARCHAR(20) NOT NULL , `number` INT(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM";

if($conn->query($mysql_qry)===TRUE)
{
echo "table created";
}

else
{
echo "not created";
}

$conn->close();



?>