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
    $query = "CREATE TABLE IF NOT EXISTS cart
                            (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                            object VARCHAR(128),
                            quant INT NOT NULL,
                            userid INT);";
    
    mysqli_query($mysqli,$query);
    
    if (!(mysqli_query($mysqli,$query))) {
        die("Error creating the table cart".$mysqli->connect_errno);
    }
    

    //creating the table with all the items need to register them
    $query = "CREATE TABLE IF NOT EXISTS 
                    items(  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                            type VARCHAR(128) NOT NULL,
                            name VARCHAR(128) NOT NULL,
                            description VARCHAR(128),
                            image VARCHAR(128) NOT NULL,
                            price INT NOT NULL,
                            stock INT NOT NULL);";
    
    mysqli_query($mysqli,$query);
    
    if (!(mysqli_query($mysqli,$query))) {
        die("Error creating the table items".$mysqli->connect_errno);
    }


    //creating the table that register the differents users
    $query = "CREATE TABLE IF NOT EXISTS 
                    users(  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                            name VARCHAR(128) NOT NULL,
                            password_hash INT NOT NULL,
                            date DATETIME DEFAULT CURRENT_TIMESTAMP);";
    
    mysqli_query($mysqli,$query);
    
    if (!(mysqli_query($mysqli,$query))) {
        die("Error creating the table user".$mysqli->connect_errno);
    }

    //register all the message that are send via the contact us page
    $query = "CREATE TABLE IF NOT EXISTS 
                    message(id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
                            birthDate VARCHAR(128),
                            firstName VARCHAR(128) NOT NULL,
                            surName VARCHAR(128) NOT NULL,
                            mail VARCHAR(128) NOT NULL,
                            gender VARCHAR(128),
                            jobs VARCHAR(128),
                            subject VARCHAR(128) NOT NULL,
                            content TEXT NOT NULL,
                            dateSend DATETIME DEFAULT CURRENT_TIMESTAMP);";
    
    mysqli_query($mysqli,$query);

    if (!(mysqli_query($mysqli,$query))) {
        die("Error creating the table message".$mysqli->connect_errno);
    }


    $query =    //inserting firstly the armors then the swords, thirdly the spears and finishing by the shields
                "INSERT INTO items
                VALUES (1,'armor','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5');
                INSERT INTO items
                VALUES (2,'armor','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5');
                INSERT INTO items
                VALUES (3,'armor','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5');
                INSERT INTO items
                VALUES (4,'armor','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5');

                INSERT INTO items
                VALUES (5,'sword','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5');
                INSERT INTO items
                VALUES (6,'sword','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5');
                INSERT INTO items
                VALUES (7,'sword','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5');
                INSERT INTO items
                VALUES (8,'sword','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5');

                INSERT INTO items
                VALUES (9,'spear','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5');
                INSERT INTO items
                VALUES (10,'spear','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5');
                INSERT INTO items
                VALUES (11,'spear','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5');
                INSERT INTO items
                VALUES (12,'spear','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5');
                                
                INSERT INTO items
                VALUES (13,'shield','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5');
                INSERT INTO items
                VALUES (14,'shield','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5');
                INSERT INTO items 
                VALUES (15,'shield','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5');
                INSERT INTO items
                VALUES (16,'shield','Armure en fer brossé', ' ', '/component/img/armure/armure.jpg', '200', '5');";
    
    
    if (!(mysqli_query($mysqli,$query))) {
        die("Error adding the items to the table".$mysqli->connect_errno);
    }

}


return ($mysqli);
