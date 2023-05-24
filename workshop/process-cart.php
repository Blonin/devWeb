<?php

include_once("../php/session.php");

$mysqli1 = require __DIR__ . "/database.php";

if($mysqli->connect_errno){
    die("Connection error : ". $mysqli->connect_errno );
}

$quant =$_POST["quant"];
$id = $_POST["id"];
$type = $_POST["type"];

$json_data =file_get_contents("component/json/products.json");
$products = json_decode($json_data,true);
$armor = $products['armor'];


foreach ($armor as $key ) {
    if ($key["id"]==$id) {
        $name=$key["name"];
        $price=$key["price"];
    }
}

$query = "INSERT INTO cart (object,quant) VALUES (?,?)";


//creating an object to send all the data, this will help us not get some sql injection
$stmt = mysqli_stmt_init($mysqli);

//so we verify it
if ( !mysqli_stmt_prepare($stmt,$query)) {
    die(mysqli_error($mysqli));
}

$stmt->bind_param("si",$name, $quant);

if(mysqli_stmt_execute($stmt)){
    echo "ajout fais";
}else{
    die($mysqli->error. " " . $mysqli->errno);
}
