
<?php

include_once("php/sessions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    
    <title id="titre">Blonin'workshop</title>

</head>
<body>
    
    <?php

    include_once("../php/nav.php");

    ?>


    <div class="container">
        <div class="item">
            <img src="../component/img/spear/spear5.png" alt="épée">
            <p>
                épée longue <br>
                Prix 189.99€
            </p>
            <div class="sub">
                <button class="ajout" id="buttonPlus" onclick="ajout('object1',10)">+</button>
                <p id="object1">
                    0
                </p>
                <button class="ajout" id="buttonMoins" onclick="moins('object1',10)">-</button>
                <button class="panier">Ajouter au panier</button>
            </div>
            <div class="stock" style="display: none;">stock : 10</div>
        </div>

        <div class="item">
            <img src="../component/img/spear/spear2.webp" alt="épée">
            <p>
                épée longue <br>
                Prix 189.99€
            </p>
            <div class="sub">
                <button class="ajout" id="buttonPlus" onclick="ajout('object2',5)">+</button>
                <p id="object2">
                    0
                </p>
                <button class="ajout" id="buttonMoins" onclick="moins('object2',5)">-</button>
                <button class="panier">Ajouter au panier</button>
            </div>
            <div class="stock" style="display: none;">stock : 5</div>
        </div>

        <div class="item">
            <img src="../component/img/spear/spear3.png" alt="épée">
            <p>
                épée longue <br>
                Prix 189.99€
            </p>
            <div class="sub">
                <button class="ajout" id="buttonPlus" onclick="ajout('object3',7)">+</button>
                <p id="object3">
                    0
                </p>
                <button class="ajout" id="buttonMoins" onclick="moins('object3',7)">-</button>
                <button class="panier">Ajouter au panier</button>
            </div>
            <div class="stock" style="display: none;">stock : 7</div>
        </div>

        <div class="item">
            <img src="../component/img/spear/spear4.png" alt="épée">
            <p>
                épée longue <br>
                Prix 189.99€
            </p>
            <div class="sub">
                <button class="ajout" id="buttonPlus" onclick="ajout('object4',2)">+</button>
                <p id="object4">
                    0
                </p>
                <button class="ajout" id="buttonMoins" onclick="moins('object4',2)">-</button>
                <button class="panier" >Ajouter au panier</button>
            </div>
            <div class="stock" style="display: none;">stock : 2</div>
        </div>
        
    </div>
    
    <button class="affichage" onclick="display()">Afficher le stock</button>

    <footer>
        <a href="contact.php">Contactez nous</a>
    </footer>

    <script src="../component/js/tp.js"></script>
</body>
</html>