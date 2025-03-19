<?php

//should be used we trying to connect to the database
//user info to connect to phpmyadmin
$host ="localhost";
$dbname = "workshop";
$username = "Gus";
$password = "Gus2gus!";

$mysqli = new mysqli($host,$username,$password,$dbname);

if($mysqli->connect_errno){
    die("Connection error : ". $mysqli->connect_errno );
}
return ($mysqli);
