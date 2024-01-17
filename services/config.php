<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name  = 'rumah'; # define exist db name

# connect to db
$con = mysqli_connect($hostname, $username, $password, $db_name);

if($con->connect_error) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

?>