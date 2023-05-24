
<?php
$is_invalid = false;
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $mysqli = require __DIR__."/database.php";
        $query = sprintf("SELECT * FROM users WHERE name ='%s'",
                            $mysqli->real_escape_string($_POST["name"]));
        
        $result = mysqli_query($mysqli,$query);

        $user = mysqli_fetch_assoc($result);

        if ($user) {
            
            if(password_verify($_POST["password"],$user["password_hash"])){
                
                session_start();
                
                session_regenerate_id();

                $_SESSION["user_id"] = $user["id"];

                header("Location: index.php");
                exit;
            }
        }
        //if we reach here the form got invalid either the password or the name wasn't good
        $is_invalid=true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <title>Login</title>
</head>
<body>
    
    <?php
    include("php/nav.php")
    ?>

    <div class="container">

        <form action="" method="post" >
            <div>Login</div>
            <?php if($is_invalid):?>
                <em>Invalid login</em>
            <?php endif;?>
            <div class="contact-form style-input">
                <input type="text" name="name"  required>
                <label for="name">User name</label>
            </div>
            <div class="contact-form style-input">
                <input type="password" name="password" required>
                <label for="password">Password</label>
            </div>
            <div class="contact-form" style="justify-content: center;">
                <button type="submit" onclick="checkValues()" style="min-width: 20%;" class="btn effect01" ><span>Send</span></button>
            </div>
            <a href="signup.php">click to Sign up</a>
        </form>

    </div>
    <footer>
        <a href="contact.php">Contactez nous</a>
    </footer>

</body>
</html>