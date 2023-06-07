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
    <link rel="stylesheet" href="bjngn.css">
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
        <h1 class="showcase-heading">Showcase</h1>
        <ul id="autoplay">
            <li class="item-a">
                <div class="showcase-box">
                    <a href="http://localhost/Final_Project/Aladdin.php"><img src="Aladdin.jpg"></a>
                </div>
            </li>
            <li class="item-b">
                <div class="showcase-box">
                    <a href="http://localhost/Final_Project/it.php"><img src="It.jpg"></a>
                </div>
            </li>
            <li class="item-c">
                <div class="showcase-box">
                    <a href="http://localhost/Final_Project/MaryPoppins.php"><img src="Mary Poppins.jpg"></a>
                </div>
            </li>
            <li class="item-d">
                <div class="showcase-box">
                    <a href="http://localhost/Final_Project/TheLittleWomen.php"><img src="The Little Women.jpg"></a>
                </div>
            </li>
            <li class="item-e">
                <div class="showcase-box">
                    <a href="http://localhost/Final_Project/Wednesday.php"><img src="Wednesday.jpg"></a>
                </div>
            </li>
            <li class="item-f">
                <div class="showcase-box">
                    <a href="http://localhost/Final_Project/Coraline.php"><img src="Coraline.jpg"></a>
                </div>
            </li>
            <li class="item-g">
                <div class="showcase-box">
                    <a href="http://localhost/Final_Project/Marnie.php"><img src="Marnie.jpg"></a>
                </div>
            </li>
            <li class="item-h">
                <div class="showcase-box">
                    <a href="http://localhost/Final_Project/Queen'sGambit.php"><img src="Queens Gambit.jpg"></a>
                </div>
            </li>
            <li class="item-i">
                <div class="showcase-box">
                    <a href="http://localhost/Final_Project/Nutcracker.php"><img src="Nutracker.jpg"></a>
                </div>
            </li>
            <li class="item-j">
                <div class="showcase-box">
                    <a href="http://localhost/Final_Project/BeautyANdTheBeast.php"><img src="Beauty And The Beast.jpg"></a>
                </div>
            </li>
            <li class="item-k">
                <div class="showcase-box">
                    <a href="http://localhost/Final_Project/Okko'sInn.php"><img src="Okko's Inn.jpg"></a>
                </div>
            </li>
            <li class="item-l">
                <div class="showcase-box">
                    <a href="http://localhost/Final_Project/TurningRed.php"><img src="Turning Red.jpg"></a>
                </div>
            </li>
            <li class="item-m">
                <div class="showcase-box">
                    <a href="http://localhost/Final_Project/TheGreatestShowman.php"><img src="The Greatest Showman.jpg"></a>
                </div>
            </li>
          </ul>
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