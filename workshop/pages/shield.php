
<?php

include_once("php/sessions.php");
$json_data =file_get_contents("../component/json/products.json");
$products = json_decode($json_data,true);
$shield = $products['shield'];


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
        <?php 
            if (count($shield)!= 0) {
                foreach ($shield as $key) {
                    ?>
                    <div class="item">
                    <img src="<?php echo $key['image'] ?>" alt="">
                    <p>
                        <?php echo $key['name'] ?> <br>
                        <?php echo $key['price'] ?> €
                    </p>
                    <div class="sub">
                        <button class="ajout" id="buttonPlus" onclick="ajout('<?php echo $key['id'] ?>',<?php echo $key['stock'] ?>)">+</button>
                        <p id="<?php echo $key['id'] ?>">
                            0
                        </p>
                        <button class="ajout" id="buttonMoins" onclick="moins('<?php echo $key['id'] ?>',<?php echo $key['stock'] ?>)">-</button>
                        <button class="panier">Ajouter au panier</button>
                    </div>
                    <div class="stock" style="display: none;">stock : <?php echo $key['stock'] ?></div>
                    </div>

                    <?php
                    
                }
            }
        ?>
    </div>
    
    <button class="affichage" onclick="display()">Afficher le stock</button>

    <footer>
        <a href="contact.php">Contactez nous</a>
    </footer>

    <script src="../component/js/tp.js"></script>
</body>
</html>