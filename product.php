<?php

     require_once "connect.php";

     $product = $_POST['product'];
     $price = $_POST['price'];
     $name = $_POST['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>VILEMBA EMPIRE-Product</title>
          <link rel="stylesheet" type="text/css" href="css\product.css">
          <link rel="icon" type="image/x-icon" href="media\icons\pic1.png">
</head>
<body>
     <div class="main">
          <center>
               <div class="product">
                    <div class="image">
                         <?php echo "<a href='$product' target='_blank'><img src='$product' class='images'></a>";?>
                    </div>
                    <div class="description">
                    <p>
                              <?php echo "<span><b>Jina (Name):</b></span>&nbsp; <span><b><i>$name</i></b></span>";?>
                         </p><br>
                         <p>
                              <?php echo "<span><b>Bei (Price):</b></span>&nbsp; <span><b><i>Tshs. $price/=</i></b></span>";?>
                         </p><br>
                         <p>
                              <b><i>Je, umependezwa na bidhaa hii?</i></b>
                         </p>
                         <p>
                              <b><i>(Do you like this product?)</i></b>
                         </p><br>
                         <center>
                              <p>
                                   <b><i>Wasiliana nasi kwa whatsapp</i></b>
                              </p>
                              <p>
                                   <b><i>(Contact us via whatsapp):</i></b>
                              </p><br>
                         </center>
                         <div class="whatsapp">
                              <?php echo "<a href='https://wa.me/255692645259?text=Naomba kilemba hiki: www.vilembaempire.com/$product' target='_blank'><img src='media\icons\whatsapp.jpeg' class='whatsapp-icon'></a>";?>
                         </div> <br>
                    </div>
               </div>
          </center>
     </div>
</body>
</html>