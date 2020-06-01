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
            <form class='issue1' action="issuefile.php" method="POST">
                <div class="form-group row">
                    <label for='Feedback' class="col-md-1 offset-md-1 col-form-label">Issue</label>
                    <div class="col-md-9">
                        <textarea class="form-control" id='Feedback' name="Feedback" placeholder="Enter the Issue" rows="8"></textarea>
                    </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
                            <button type="submit" class="btn btn-primary">
                                Submit Issue
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <script src="node_modules/jquery/dist/jquery.min.js"></script>
            <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
            <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        </body>
    <?php
?>
</html>