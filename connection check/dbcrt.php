<?php

$localhost = "localhost";
$dbusername = "root";
$dbpastword = "";



$conn=mysqli_connect($localhost,$dbusername,"");

if (mysqli_connect_error())

  {
    echo "connection error";
  }
else
  {
    echo "connected,";
  }

// Create database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);


?>
