<?php 

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "restaurant";

$connect = mysqli_connect($hostname, $username, $password, $dbname);

if(mysqli_connect_error()) {
    die("Connection failed");
}