<?php

require('connect.php');

$query = "SELECT * FROM verzamelaar";

$result = mysqli_query($mysqli, $query);

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
    <link rel="stylesheet" href="styles/addstyle.css">
</head>
<body>
<div class="header" id="header">
            <ul class="ul">
                <li class="home" id="home"><a href="index.php">Home</a></li>
                <li class="add" id="add"><a href="#contmenu">Add</a></li>
                <li class="about" id="about"><a href="about.html">About</a></li>
                <li class="contact" id="contact"><a href="#contactpage">Contact</a></li>
                <i onclick="wwagen()" id="wwagen" class="fa-regular fa-cart-shopping"></i>
            </ul>
</div>
<div class="spacing"></div>
<div class="rijen">
            <?php
            if(mysqli_num_rows($result) > 0){
                while ($item = mysqli_fetch_assoc($result)){
                    echo"<div class='rijtje'>";
                    echo"<div></div>";
                    echo "<p>".$item['naam']."</p>";
                    echo"</div>";
                    
                }
            }else{
                echo "errrrror";
            }

            ?>
        </div>
    <script src="./icons.js"></script>
</body>
</html>