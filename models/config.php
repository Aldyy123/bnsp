<?php

$host = "localhost";
$user = "root";
$password = "";
$dbName = "wisata";

$database = mysqli_connect($host,$user,$password,$dbName);

if(mysqli_connect_errno()){
    echo "Error connecting to";
    die();
}
