
<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <title>Sign up</title>
</head>
<body>
    

    <?php
    include("php/nav.php")
    ?>

    <div class="container">

        <form method="post" action="process-signup.php" >
            <div>Sign up</div>
            <div class="contact-form style-input">
                <input type="text" name="user_name" id="user_name" required>
                <label for="user_name">User name</label>
            </div>
            <div class="contact-form style-input">
                <input type="password" name="password" id="password" required>
                <label for="password">Password</label>
            </div>
            <div class="contact-form" style="justify-content: center;">
                <button type="submit" onclick="checkValues()" style="min-width: 20%;" class="btn effect01" value="Signup" ><span>Send</span></button>
            </div>
            <a href="login.php">click to Login</a>
        </form>

    </div>
    <footer>
        <a href="contact.php">Contactez nous</a>
    </footer>

</body>
</html>