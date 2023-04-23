<?php

//still trying to make this one work 
// /!\ UNDER CONSTRUCTION /!\

$host ="localhost";
$dbname = "workshop";
$username = "root";
$password = "";

$mysqli = new mysqli($host,$username,$password,$dbname);

if($mysqli->connect_errno){
    die("Connection error : ". $mysqli->connect_errno );
}

$query = "CREATE TABLE IF NOT EXISTS 
                cart(   id INTEGER NOT NULL PRIMARY AUTO_INCREMENT,
                        object VARCHAR(128),
                        quant INT)";

mysqli_query($mysqli,$query);


$query = "CREATE TABLE IF NOT EXISTS 
                user(   id INTEGER NOT NULL PRIMARY AUTO_INCREMENT,
                        name VARCHAR(128),
                        password_hash INT,
                        date TIMESTAMP CURRENT_TIME)";

mysqli_query($mysqli,$query);


return ($mysqli);
