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
    
    <nav>
        
        <ul>
            <li><a href="sword.php"> Sword </a> </li>
            <li><a href="spear.php"> Spear</a> </li>
            <li><a href="shield.php"> Shield</a> </li>
            <li><a href="armor.php"> Armor</a> </li>
        </ul>

        <div class="name">
            <a href="../index.php">
                <strong>Blonin's</strong>
                <span>Workshop</span>
            </a>
        </div>

        <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7 8V6a5 5 0 1 1 10 0v2h3a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h3zm0 2H5v10h14V10h-2v2h-2v-2H9v2H7v-2zm2-2h6V6a3 3 0 0 0-6 0v2z"/></svg>
    </nav>
    <div class="container">

        <form action="" method="" >
            <div class="contact-form style-input">
                <input type="date" name="date" id="date" required>
                <label for="date" class="perm-up">Date de naissance</label>
            </div>
            <div class="contact-form style-input">
                <input type="text" name="firstname" id="firstname" required>
                <label for="firstname">Nom</label>
            </div>
            <div class="contact-form style-input">
                <input type="text" name="name" id="surname" required>
                <label for="name">Prénom</label>
            </div>
            <div class="contact-form style-input">
                <input type="mail" name="mail" id="mail" required>
                <label for="mail">Email</label>
            </div>
            <div class="contact-form genre">
                <label for="gender">Genre : </label>
                <div class="radio">
                    <label for="male">Homme</label>
                    <input type="radio" name="gender" id="male" value="Male" checked>
                </div>
                <div class="radio">
                    <label for="female">Femme</label>
                    <input type="radio" name="gender" id="female" value="Female">
                </div>
                <div class="radio">
                    <label for="other">Autre</label>
                    <input type="radio" name="gender" id="other" value="Other">
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
        <a href="contact.php">Contactez nous</a>
    </footer>

</body>
</html>