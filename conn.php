<?php

$server = "localhost:3307";
$username = "root";
$password="";
$database="covidstudentmanagementsystem";

$conn=mysqli_connect($server, $username, $password, $database);

if(!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>