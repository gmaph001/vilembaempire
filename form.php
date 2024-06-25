<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="css/product2.css">
     <link rel="icon" type="image/x-icon" href="media\icons\pic1.png">
     <title>Bidhaa</title>
</head>
<body>
     <div class="main">
          <div class="body">
               <div class="response">
                    <?php

                         require_once "connect.php";

                         if(isset($_POST['upload'])){
                              $productname = $_POST['jina'];
                              $price = $_POST['bei'];
                              $pn = $_FILES['bidhaa']['name'];
                              $type = $_POST['type'];

                              $p = $_FILES['bidhaa']['tmp_name'];
                              $foldername = "media/images/" . $pn;
                              $product = 'media/images/' . $pn;

                              move_uploaded_file($p, $foldername);

                              $query = "INSERT INTO products (product_name, price, product, type) VALUES ('$productname', '$price', '$product', '$type')";

                              $result = mysqli_query($db, $query);

                              if($result){
                                   echo "<p>Hongera! Umefanikiwa kuiweka bidhaa yako kwenye tovuti!</p>
                                        <p>Unaweza kuendelea kuperuzi</p><br>
                                        <a href='index.php' target='_blank'>Endelea</a>";
                              }
                              else{
                                   echo "<p>Pole! Kulikuwa na tatizo, wakati bidhaa inapandishwa!</p>";
                              }
                         }
                    ?>
               </div>
          </div>
     </div>
</body>
</html>