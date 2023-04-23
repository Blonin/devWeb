
<?php
    //start the session
    include_once("../php/session.php");
    if (isset($_SESSION["user_id"])) {

        $mysqli = require __DIR__."/database.php";

        $query = "SELECT * FROM user WHERE id ={$_SESSION['user_id']}";
        
        $result = mysqli_query($mysqli,$query);

        $user = mysqli_fetch_assoc($result);
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="gustave">
    <meta name>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css"/>
    <title>Blonin'workshop</title>
</head>
<body>

    <?php
    include("php/nav.php")
    ?>
    
    <div class="container">
        <div class="vitrine">
            <div class="screen">
                <div class="screen-image armure"></div>
                <div class="overlay"></div>
                <div class="store"></div>
                <a href="pages/armor.php"></a>
            </div>
            <div class="screen">
                <div class="screen-image bouclier"></div>
                <div class="overlay"></div>
                <div class="store"></div>
                <a href="pages/shield.php"></a>
            </div>
            <div class="screen">
                <div class="screen-image spear"></div>
                <div class="overlay"></div>
                <div class="store"></div>
                <a href="pages/spear.php"></a>
            </div>
            <div class="screen">
                <div class="screen-image sword"></div>
                <div class="overlay"></div>
                <div class="store"></div>
                <a href="pages/sword.php"></a>
            </div>
        </div>
        
    </div>  

    <footer>
        <a href="/contact.php">Contactez nous</a>
    </footer>
        <?php if (isset($user)):?>
            
            <script>
            
                alert("Welcome <?= htmlspecialchars ($user['name'])  ?>");
            </script>
        <?php endif; ?>
    <script src="component/js/tp.js"></script>
</body>
</html>