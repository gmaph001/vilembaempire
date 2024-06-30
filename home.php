<?php

    require_once "connect.php";

    $query = "SELECT * FROM products";

    $result = mysqli_query($db, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VILEMBA EMPIRE-Home</title>
        <link rel="stylesheet" type="text/css" href="css\css1.css">
        <link rel="stylesheet" type="text/css" href="css\navBar2.css">
        <link rel="stylesheet" type="text/css" href="css\menu.css">
        <link rel="stylesheet" type="text/css" href="css\icon.css">
        <link rel="stylesheet" type="text/css" href="css\lang.css">
        <link rel="icon" type="image/x-icon" href="media\icons\pic1.png">
    </head>
    <body>
            <div class="nav">
                <img src="media\images\pic1.png" class="logo">
                <div class="title">
                        <b>VILEMBA EMPIRE</b>
                </div>
                <div class="horizontal_menu">
                        <ul>
                            <li><button><a href="home.php">Home</a></button></li>
                            <li><button><a href="blog2.html">Our blog</a></button></li>
                            <li><button><a href="about_us2.html">About us</a></button></li>
                            <li><button><a href="contact.html">Contacts</a></button></li>
                            <li><button><a href="more2.php">Order</a></button></li>
                            <li class="language"><button><b>En</b></button></li>
                        </ul>
                </div>
                <div class="drop_downMenu">
                        <ul>
                            <li class="menu4dropdown"><button><b>Menu</b></button></li>
                        </ul>
                </div>
                <div class="drp">
                        <center>
                            <ul class="dropdown">
                            <li><button><a href="home.php">Home</a></button></li>
                            <li><button><a href="blog2.html">Our blog</a></button></li>
                            <li><button><a href="about_us2.html">About us</a></button></li>
                            <li><button><a href="contact.html">Contacts</a></button></li>
                            <li><button><a href="more2.php">Order</a></button></li>
                            <li><button><a href="index.php">Swahili</a></button></li>
                            <li><button><a href="home.php">English</a></button></li>
                            </ul>
                        </center>
                </div>
            </div>
            <div class="all">
                <div class="body">
                    <div class="en" id="lang_menu">
                        <ul>
                            <li><button><a href="index.php">Swahili</a></button></li>
                            <li><button><a href="home.php">English</a></button></li>
                        </ul>
                    </div>
                    <p class="one">
                    <marquee behavior="scroll" direction="left"><b class="one">Get new products!!!</b></marquee> 
                    </p>               
                </div>
                <div class="mpya">
                    <div class="videos">
                        <center>
                            <p class="video">
                                <video controls>
                                    <source src="media\video\010.mp4">
                                </video>
                            </p>
                        </center>
                        <br>
                    </div><br>
                    <div class="images">
                        <?php
                             
                             for($i=mysqli_num_rows($result); $i>0; $i--){
                                 $row = mysqli_fetch_array($result);
                                 $product = $row['product'];
                                 $price = $row['price'];
                                 $name = $row['product_name'];
                                 if($row['type'] === "sample"){
                                     echo    
                                         "<form action='product.php' method='POST' enctype='multipart/form-data'>
                                             <input type='text' value='$name' name='name' style='display: none;'>
                                             <input type='text' value='$product' name='product' style='display: none;'>
                                             <input type='number' value='$price' name='price' style='display: none;'>
                                             <button name='order' id='button'>
                                                 <img src='$product' height='300px' width='250px' style='border-radius: 20px;'>
                                             </button>
                                         </form>";
                                 }
                             }
      
                         ?>
                    </div>
                    <div class="instructions">
                        For more info on how to use this website, Click the following button: <b><i><a href="blog2.html">Instructions</a></i></b>
                    </div>
                </div>
            </div>
            <div class="footer">
            Contact Us!!<br>
            Via:<br>
            <div class="icons">
                <div class="instagram">
                    <a href="https://instagram.com/vilembaempire01" target="blank"><img src="media\icons\instagram.jpg" height="30px" width="30px"></a>
                </div>
                <div class="gmail">
                    <a href="mailto:happynessluoga0@gmail.com"><img src="media\icons\Gmail.jpg" height="25px" width="30px"></a>
                </div>
                <div class="facebook">
                    <a href="https://facebook.com/Vilemba Empire" target="blank"><img src="media\icons\facebook.jpg" height="30px" width="30px" ></a>
                </div>
                <div class="whatsapp">
                    <a href="https://wa.me/255692645259" target="_blank"><img src="media\icons\whatsapp.jpeg" height="30px" width="30px" style="border-radius: 50%;"></a>
                </div> <br>
            </div>
            <p style="margin-bottom: 10px;">
                &copy; <b><i>Vilemba Empire! Pendeza nasi!!!</i></b>
            </p>
        </div> 
        <div class="chat">
            <center>
                <a href="sms:+255692645259"><img src="media\icons\message.png" width="30px" height="30px"></a>
            </center>
        </div>                                                 
        <script src="js/navBar.js"></script>
    </body>
</html>