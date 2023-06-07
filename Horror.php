<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FInal Ticket</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="ocee.css">
    <link rel="stylesheet" href="css/lightslider.css">
    <script src="js/JQuery3.3.1.js"></script>
    <script src="js/lightslider.js"></script>
    <link rel="shortcut icon" href="controls.png">
</head>
<body>
    <nav>
         <a href="#" class="logo">
            <img src="kay.jpeg">
         </a>
         <ul class="menu">
            <li><a href="http://localhost/Final_Project/ticket.php">Home</a></li>
            <li><a href="http://localhost/Final_Project/Horror.php">Horror</a></li>
            <li><a href="http://localhost/Final_Project/Romance.php">Romance</a></li>
            <li><a href="http://localhost/Final_Project/animation.php">Animation</a></li>
            <li><a href="http://localhost/Final_Project/SliceOfLife.php">Slice Of Life</a></li>
         </ul>
    </nav>
    <section id="main">
        <div class="row">
        <h1 class="showcase-heading">Horror</h1>
        <ul id="autoplay">
            <li class="item-a">
                <div class="showcase-box">
                    <a href="http://localhost/Final_Project/Wednesday.php"><img src="Wednesday.jpg"></a>
                </div>
            </li>
        </li>
        <li class="item-b">
            <div class="showcase-box">
                <a href="http://localhost/Final_Project/it.php"><img src="It.jpg"></a>
            </div>
        </li>
        <li class="item-c">
            <div class="showcase-box">
                <a href="http://localhost/Final_Project/Tunnel.php"><img src="tunnel.jpg"></a>
            </div>
        </li>
        <li class="item-d">
            <div class="showcase-box">
                <a href="http://localhost/Final_Project/Annabelle.php"><img src="Annabelle.jpg"></a>
            </div>
        </li>
        <li class="item-e">
            <div class="showcase-box">
                <a href="http://localhost/Final_Project/ReadyOrNot.php"><img src="Ready Or Not.jpg"></a>
            </div>
            <li class="item-f">
                <div class="showcase-box">
                    <a href="http://localhost/Final_Project/Coraline.php"><img src="Coraline.jpg"></a>
                </div>
            </li>
        </li>
        </li>
        </ul>
    </section>
</section>
<script>
$(document).ready(function() {
    var autoplaySlider = $('#autoplay').lightSlider({
        auto:true,
        loop:true,
        pauseOnHover: true,
        onBeforeSlide: function (el) {
            $('#current').text(el.getCurrentSlideCount());
        } 
    });
    $('#total').text(autoplaySlider.getTotalSlideCount());
});
</script>
</body>
</html>