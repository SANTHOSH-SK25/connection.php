<?php

$localhost = "localhost";
$dbusername = "root";
$dbpastword = "";
$dbname = "santhosh";


$conn=mysqli_connect($localhost,$dbusername,"",$dbname);

if (mysqli_connect_error())

	{
		echo "connection error";
	}
else
	{
	 	echo "connected";
	}

?>