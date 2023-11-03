<?php

$hostname = "localhost";
$uname = "root";
$upass = "";
$dbname = "StudentDB";

$conn = mysqli_connect($hostname,$uname,$upass,$dbname);

if($conn)
{
    //echo "Database connteted";
}
else 
{
    die("Connection failed: " . mysqli_connect_error());
}

