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
                        <img src="Okko's Inn.jpg">
                    </div>
                </div>
                <div class="col-6">
                    <h1>Okko's Inn (2018)</h1>
                    <p>After losing her parents in a car accident, Okko goes to live in the countryside with her grandmother, who runs a traditional Japanese inn built on top of an ancient spring said to have healing waters. While she goes about her chores and prepares to become the inn's next caretaker, Okko discovers that there are spirits who live there that only she can see - not scary ones, but welcoming ghosts who keep her company, play games and help her navigate her new environment.</p>
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
</section>
</body>
</html>