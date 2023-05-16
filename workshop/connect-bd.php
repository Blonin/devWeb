<?php

//should try to make the different db connected 
//still trying to make this one work 
// /!\ UNDER CONSTRUCTION /!\
// https://www.youtube.com/watch?v=eAK8uYtNTy4&t=24s
// https://youtu.be/ptuXG7Zix74?t=356
// sql attack https://youtu.be/Y9yE98etanU?t=1232

$host ="localhost";
$dbname = "workshop";
$username = "root";
$password = "";

//making a connection 
$mysqli1 = new mysqli($jost,$username,$password);

//checking connection
if($mysqli1->connect_errno){
    die("Connection error : ". $mysqli->connect_errno );
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

//checking if the connection happend nicely
if (!(mysqli_query($mysqli1,$sql))) {
    die("Error creating the database workshop".$mysqli->connect_errno);
}

if (mysqli_query($mysqli1,$sql)) {
    //connecting to the db
    $mysqli = new mysqli($host,$username,$password,$dbname);
    
    if($mysqli->connect_errno){
        die("Connection error : ". $mysqli->connect_errno );
    }
    
    //creating the table for the cart
    $query = "CREATE TABLE IF NOT EXISTS 
                    cart(   id INTEGER NOT NULL PRIMARY AUTO_INCREMENT,
                            object VARCHAR(128),
                            quant INT)";
    
    mysqli_query($mysqli,$query);
    
    if (!(mysqli_query($mysqli,$query))) {
        die("Error creating the table cart".$mysqli->connect_errno);
    }
    

    //creating the table with all the items need to register them
    $query = "CREATE TABLE IF NOT EXISTS 
                    items(  id INTEGER NOT NULL PRIMARY AUTO_INCREMENT,
                            type VARCHAR(128) NOT NULL,
                            name VARCHAR(128) NOT NULL,
                            description VARCHAR(128),
                            image VARCHAR(128) NOT NULL,
                            price INT NOT NULL,
                            stock INT NOT NULL)";
    
    mysqli_query($mysqli,$query);
    
    if (!(mysqli_query($mysqli,$query))) {
        die("Error creating the table items".$mysqli->connect_errno);
    }

    $query =    //inserting firstly the armors then the swords, thirdly the spears and finishing by the shields
                "INSERT INTO items
                VALUES (null,'armor','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5')
                INSERT INTO items
                VALUES (null,'armor','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5')
                INSERT INTO items
                VALUES (null,'armor','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5')
                INSERT INTO items
                VALUES (null,'armor','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5')

                INSERT INTO items
                VALUES (null,'sword','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5')
                INSERT INTO items
                VALUES (null,'sword','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5')
                INSERT INTO items
                VALUES (null,'sword','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5')
                INSERT INTO items
                VALUES (null,'sword','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5')

                INSERT INTO items
                VALUES ('spear','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5')
                INSERT INTO items
                VALUES ('spear','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5')
                INSERT INTO items
                VALUES ('spear','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5')
                INSERT INTO items
                VALUES ('spear','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5')
                                
                INSERT INTO items
                VALUES ('shield','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5')
                INSERT INTO items
                VALUES ('shield','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5')
                INSERT INTO items 
                VALUES ('shield','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5')
                INSERT INTO items
                VALUES ('shield','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5')";

    //creating the table that register the differents users
    $query = "CREATE TABLE IF NOT EXISTS 
                    user(   id INTEGER NOT NULL PRIMARY AUTO_INCREMENT,
                            name VARCHAR(128),
                            password_hash INT,
                            date TIMESTAMP CURRENT_TIME)";
    
    mysqli_query($mysqli,$query);
    
    if (!(mysqli_query($mysqli,$query))) {
        die("Error creating the table user".$mysqli->connect_errno);
    }

    //register all the message that are send via the contact us page
    $query = "CREATE TABLE IF NOT EXISTS 
                    message(id INTEGER NOT NULL PRIMARY AUTO_INCREMENT,
                            birthDate VARCHAR(128),
                            firstName VARCHAR(128),
                            surName VARCHAR(128),
                            mail VARCHAR(128),
                            gender VARCHAR(128),
                            jobs VARCHAR(128),
                            subject VARCHAR(128),
                            content TEXT,
                            dateSend TIMESTAMP CURRENT_TIME)";
    
    mysqli_query($mysqli,$query);

    if (!(mysqli_query($mysqli,$query))) {
        die("Error creating the table message".$mysqli->connect_errno);
    }
}


return ($mysqli);
