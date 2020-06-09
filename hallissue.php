<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
<style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            background-image: url(./images/volodymyr-hryshchenko-inI8GnmS190-unsplash.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            color: black;
            padding: 50px 0px 0px 0px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;            
        }
        .navbar-dark{
            background-color: #191919;
        }
        .jumbotron{
            background-color: transparent;
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
                    <a class="navbar-brand mr-auto" href="#"><img src="./images/3be847d8-395b-4d3b-a493-c75ae865e1b5_200x200.png" height="45" width="42"></a>
                        <div class="collapse navbar-collapse" id="Navbar">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item"><a class="nav-link" href="category.php"><i class="fa fa-home"></i> Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="search.php"><i class="fa fa-book"></i> Book New Hall</a></li>
                                <li class="nav-item"><a class="nav-link" href="booking_display.php"><i class="fa fa-chevron-left"></i> Previous Bookings</a></li>
                                <li class="nav-item active"><a class="nav-link" href="permanentclass.php"><i class="fa fa-id-card"></i> Permanent Class</a></li>
                            </ul>
                            <span>
                                <a href="logout.php"><button type="button" class="btn btn-light btn-md">
                                <i class="fa fa-sign-out"></i> Log Out
                                </button></a>
                            </span>
                        </div>
                </div>
            </nav>
                <?php
                echo '<header class="jumbotron"><h2 class="offset-4">Your Permanent Class is '.$hno1;
                echo '</h2>';
                echo '</header>';
                ?>
            <div class="container">
            <form class='issue1' action="issuefile.php" method="POST">
                <div class="form-group row">
                    <label for='Feedback' class="col-md-1 col-form-label">Issue</label>
                    <div class="col-md-5">
                        <textarea class="form-control" id='Feedback' name="Feedback" placeholder="Enter the Issue" rows="5"></textarea>
                    </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-md-1 col-md-10">
                            <button type="submit" class="btn btn-danger">
                                Submit Issue
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
            <script src="node_modules/jquery/dist/jquery.min.js"></script>
            <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
            <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        </body>
    <?php
?>
</html>