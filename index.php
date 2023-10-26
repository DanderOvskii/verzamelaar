<?php

require('connect.php');

$query = "SELECT * FROM verzamelaar";

$result = mysqli_query($mysqli, $query);


$data = $_GET['data'];
$data2 = $_GET['data2'];
$data3 = $_GET['data3'];
$prijs = $_GET['prijs'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VINYL</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/style600px.css">
    <link rel="stylesheet" href="styles/stylemenu.css">
</head>
<body>
<div class="header" id="header">
            <ul class="ul">
                <li class="home" id="home"><a href="#startding">Home</a></li>
                <li class="add" id="add"><a href="add.php">Add</a></li>
                <li class="about" id="about"><a href="about.html">About</a></li>
                <li class="contact" id="contact"><a href="#contactpage">Contact</a></li>
                <i onclick="wwagen()" id="wwagen" class="fa-regular fa-cart-shopping"></i>
            </ul>
</div>
<div class="spacing"></div>

    <div class="container main">
        <div class="select">
            <?php
            if(mysqli_num_rows($result) > 0){
                while ($item = mysqli_fetch_assoc($result)){
                    echo "<a href='index.php?data=".$item['naam']."&data2=".$item['beschrijving']."&data3=".$item['img']."&prijs=".$item['prijs']."'>";
                    echo"<div class='vakje'>";
                    echo "<img src='media/".$item['img']."' alt=''>";
                    echo "<p>".$item['naam']."</p>";
                    echo"</div>";
                    echo"</a>";
                    
                }
            }else{
                echo "errrrror";
            }

            ?>
        </div>
        <div class="view">
            <div class="images">
                
                <?php
                echo "<img class='plaatje' src='media/".$data3."' alt=''>"
                ?>
            </div>
            <div class="info">
                <p class="titel">
                    <?php 
                    echo $data;
                    ?>
                </p>

                <ul class="lijst">
                    <?php
                    echo"<li>€".$prijs.",-</li>";
                    echo"</br>";
                    echo"<li>".$data2."</li>";
                    
                    ?>
                </ul>
                <button class="knoppie">koop</button>
                
                
                
               
            </div>
        </div>
    </div>
    <script src="./icons.js"></script>
</body>
</html>