
<?php

include_once("../php/session.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <title>Document</title>
</head>
<body>
    

    <?php
    include("php/nav.php")
    ?>

    <div class="container">

        <form action="/process-contact.php" method="post" >
            <div class="contact-form style-input">
                <input type="date" name="date" id="date" >
                <label for="date" class="perm-up">Date de naissance</label>
            </div>
            <div class="contact-form style-input">
                <input type="text" name="firstname" id="firstname" >
                <label for="firstname">Nom</label>
            </div>
            <div class="contact-form style-input">
                <input type="text" name="surname" id="surname" >
                <label for="surname">Prénom</label>
            </div>
            <div class="contact-form style-input">
                <input type="mail" name="mail" id="mail" >
                <label for="mail">Email</label>
            </div>
            <div class="contact-form genre">
                <label for="gender">Genre : </label>
                <div class="radio">
                    <label for="male">Homme</label>
                    <input type="radio" name="gender" id="male" value="Male">
                </div>
                <div class="radio">
                    <label for="female">Femme</label>
                    <input type="radio" name="gender" id="female" value="Female">
                </div>
                <div class="radio">
                    <label for="other">Autre</label>
                    <input type="radio" name="gender" id="other" value="Other" checked>
                </div>
            </div>
            <div class="contact-form">
                <label for="job">Fonction : </label>
                <select id="jobs" name="jobs">
                    <option value="Developpeur">Développeur</option>
                    <option value="Etudiant" selected>Etudiant</option>
                    <option value="Professeur">Professeur</option>
                </select>
            </div>
            <div class="contact-form style-input">
                <label for="subject">Sujet</label>
                <input type="text" name="subject" id="subject" required>
            </div>
            <div class="contact-form" style="justify-content:normal;">
                <label for="content">Message</label>
                <textarea name="content" id="content" rows="1" cols="38" placeholder="Enter your message here" required style="margin-left:3em;"></textarea>
            </div>
            <div class="contact-form" style="justify-content: center;">
                <button type="submit" onclick="checkValues()" style="min-width: 20%;" class="btn effect01" ><span>Send</span></button>
            </div>
        </form>
    
    </div>
    <footer>
        <a href="/contact.php">Contactez nous</a>
    </footer>
    
</body>
</html>