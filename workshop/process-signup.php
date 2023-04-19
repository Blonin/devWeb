<?php

if (empty($_POST["user_name"])) {
    # code...
    die("Name required");
}

if (strlen($_POST["password"]) < 5) {
    # code...
    die("Password must containts at least 5 character");
}

if (!preg_match("/[a-z]/i",$_POST["password"])) {
    # code...
    die("Must contain a letter");
}

if (!preg_match("/[0-9]/",$_POST["password"])) {
    # code...
    die("Must contain a number");
}


$password_hash = password_hash($_POST["password"],PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$query = "INSERT INTO user (name,password_hash) VALUES (?,?)";

$stmt = $mysqli->stmt_init();

if (! $stmt->prepare($query)){
    die("SQL error = ". $mysqli->error);
}

$stmt->bind_param("ss",$_POST["user_name"], $password_hash);

if($stmt->execute()){
    header("Location: /signupsuccessful.php");
}else{
    if($mysqli->errno === 1062){
        die("name already used");
    }else{
        die($mysqli->error. " " . $mysqli->errno);
    }
}


