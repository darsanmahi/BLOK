<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
<style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            /*background-image: url(green-leaf-plant-in-white-flower-pot-1022923.jpg);*/
            background-repeat: no-repeat;
            background-size: cover;
            color: black;
            padding: 50px 0px 0px 0px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;            
        }
        .issue input[type='text']{
            text-align: left;
            border: 1.5px solid black;
            padding: 10px 20px 200px 4px;
        }
        .navbar-dark{
            background-color: #191919;
        }
</style>
<?php
    session_start();    
    $hno=$_SESSION['res'];
    $hno1=$hno['hallnumber'];
    ?>
        <body>
            <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand mr-auto" href="#">BLOK</a>
                        <div class="collapse navbar-collapse" id="Navbar">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item"><a class="nav-link" href="category.php"><i class="fa fa-home"></i> Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="search.php"><i class="fa fa-book"></i> Book New Hall</a></li>
                                <li class="nav-item"><a class="nav-link" href="booking_display.php"><i class="fa fa-chevron-left"></i> Previous Bookings</a></li>
                                <li class="nav-item active"><a class="nav-link" href="permanentclass.php"><i class="fa fa-id-card"></i> Permanent Class</a></li>
                            </ul>
                        </div>
                </div>
            </nav>
                <?php
                echo '<header class="jumbotron"><h4 class="offset-4">Your Permanent Class is '.$hno1;
                echo '</h4>';
                echo '</header>';
                ?>
            <form class='issue' action="issuefile.php" method="POST">
                <div class="col-12 offset-4 col-sm-6">
                    <a>Enter the Issue you faced</a><br><br>
                    <input type='text' name='issue' class='issue' placeholder="Enter the Issue"><br><br>
                    <button type='submit' name='issbtn'>Submit Issue</button>
                </div>
            </form>
            <script src="node_modules/jquery/dist/jquery.min.js"></script>
            <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
            <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        </body>
    <?php
?>
</html>