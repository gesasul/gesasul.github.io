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
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="showcase-box">
                        <img src="The Little Women.jpg">
                    </div>
                </div>
                <div class="col-6">
                    <h1>The Little Women (2020)</h1>
                    <p>While the March sisters enter the threshold of womanhood, they go through many ups and downs in life and endeavour to make important decisions that can affect their future.</p>
                    <div class="table-responsive-xl">
                                <table class="table table-bordered">
                                    <thead class="align-top">
                                        <th>Day</th>
                                        <th>Time</th>
                                        <th>Price</th>
                                        <th>Studio</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //PHP script used to display the student's data here
                                        $select_query = "select * from aww";
                                        $run_select = mysqli_query($conn, $select_query);

                                        while ($data = mysqli_fetch_array($run_select)) {
                                            echo "
                                                <tr>    
                                                    <td>$data[day]</td>
                                                    <td>$data[time]</td>
                                                    <td>$data[price]</td>
                                                    <td>$data[studio]</td>
                                                </tr>
                                                ";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                </div>
            </div>
        </div>
    </section>
</main>
</section>
</body>
</html>