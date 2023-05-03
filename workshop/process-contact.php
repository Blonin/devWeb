<?php


//just regestering all the data send in the form in differents var
$date =$_POST["date"];
$firstname =$_POST["firstname"];
$surname =$_POST["surname"];
$mail =$_POST["mail"];
$gender =$_POST["gender"];
$jobs =$_POST["jobs"];
$subject =$_POST["subject"];
$content =$_POST["content"];

//user info
$host ="localhost";
$dbname = "message_db";
$user = "root";
$password = "";

//connecting to the database mysql and registering the connection to the connect var
$connect = mysqli_connect($host,$user,$password,$dbname);

//if not possible to connect to mysql an error will be printed out
if (mysqli_connect_error()){
    die("Connection error: " . mysqli_connect_error());
}

//sending the data to mysql
$sql = "INSERT INTO message(date,firstname,surname,mail,gender,jobs,subject,content)
        VALUES(?,?,?,?,?,?,?,?)";

//creating an object to send all the data, this will help us not get some sql injection
$stmt = mysqli_stmt_init($connect);

//
mysqli_stmt_prepare($stmt,$sql);
//should send true if no sql inection

//so we verify it
if ( !mysqli_stmt_prepare($stmt,$sql)) {
    die(mysqli_error($connect));
}

//binding the type of the parameter that we are sending, all of them are string so 8 "s"
mysqli_stmt_bind_param( $stmt,"ssssssss",
                        $date,
                        $firstname,
                        $surname,
                        $mail,
                        $gender,
                        $jobs,
                        $subject,
                        $content);

mysqli_stmt_execute($stmt);

echo "message send";




?>
