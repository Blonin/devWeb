
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
                                <?php echo $key['name'] ?> <?php echo $key['price'] ?> €
                            </p>
                            <form class="cart" method="post" action="/process-cart.php">
                                <!-- inpun id to send 1 2 3 or 4 to later get the name-->
                                <!-- and also the type that should change according to the pages of shop -->
                                <input type="hidden" name="id" id="id" value="<?php echo $j ?>" >
                                <input type="hidden" name="type" id="type" value="shield" >
                                <?php echo $key['name']?>
                                <label for="quant">Combien</label>
                                <select id="quant" name="quant">
                                    <?php 
                                    for ($i=0; $i <= $key['stock']; $i++) { 
                                    ?>
                                        <option value="<?php echo $i?>"><?php echo $i?></option>
                                    <?php
                                    }
                                    ?>
                                </select>

                                <div class="cart-form" style="justify-content: center;">
                                    <button type="submit" onclick="" style="min-width: 20%;" class="btn effect01" ><span>ADD</span></button>
                                </div>
                            </form>
                            <div class="stock" style="display: none;">
                                stock : <?php echo $key['stock'] ?>
                            </div>   
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