<?php
    include("connection3.php");
?>
<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
<style>
    @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
    body{
        background-image: url(./images/sharon-mccutcheon-eMP4sYPJ9x0-unsplash.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        padding: 100px;
    }
    .navbar-dark{
       background-color: #191919;
    }
</style>
<head>
    <title>Cancel Booking</title>
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-auto" href="#"><img src="./images/3be847d8-395b-4d3b-a493-c75ae865e1b5_200x200.png" height="45" width="42"></a>
                    <div class="collapse navbar-collapse" id="Navbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link" href="category1.php"><i class="fa fa-home"></i> Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="search1.php"><i class="fa fa-book"></i> Book New Hall</a></li>
                            <li class="nav-item active"><a class="nav-link" href="booking_display1.php"><i class="fa fa-chevron-left"></i> Previous Bookings</a></li>
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
        $arrg1=$_SESSION['arrg'];
        $arrj1=$_SESSION['arrj'];
        $arrg=array_unique($arrg1);
        $arrj=array_unique($arrj1);
        ?>
    <div class="container">
        <div class="row row-content">
            <div class="col-12 col-md-9">
            <form class="major" action="cancelclub.php" method="POST">
                <div class="col-12 ">
                    <h2>Cancel Booking</h2><br>
                        <div class="form-group row">
                            <label for="Block" class="col-form-label col-12 col-md-3">Block</label>
                                <div class="col-sm-3">
                                    <select id="Block" name="Block" class="form-control">
                                        <option value="gblock">G-Block</option>
                                        <option value="jblock">J-Block</option>
                                        <option value="ablock">A-Block</option>
                                        <option value="yblock">Y-Block</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <button class="btn btn-primary" type="submit" name="Enter">Select</button>
                                </div>
                        </div>
                </div>
            </form>
            <?php
            $val=$_SESSION['val'];
            ?>
            <form class="minor" action="cancelclub1.php" method="POST">
                <div class="col-12">
                        <div class="form-group row">
                            <label for='hallnumber' class="col-12 col-md-3 col-form-label">Hall Number</label>
                            <div class="col-md-3">
                                <select name='hno' id="hallnumber" class="form-control">
                                        <?php
                                            if($val==1)
                                            {
                                                foreach($arrg as $item)
                                                {
                                                    echo "<option value='$item'>$item</option>";
                                                }
                                            }
                                            elseif($val==2)
                                            {
                                                foreach($arrj as $item)
                                                {
                                                    echo "<option value='$item'>$item</option>";
                                                }
                                            }
                                        ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for='period' class="col-12 col-md-3 col-form-label">Period Number</label>
                            <div class="col-md-3">
                                <input type="number" class="form-control" id="period" name="pno" placeholder="Period Number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for='date' class="col-12 col-md-3 col-form-label">Date</label>
                            <div class="col-md-3">
                                <input type="date" class="form-control" id="date" name="date">
                            </div>
                        </div>
                        <div class="col-12 offset-2 col-sm-4 align-contents-center">
                            <button class="btn btn-primary" type="submit" name="Enter">Cancel Booking</button>
                        </div>
                    </div>
                    </div> 
                </div>
            </form>
        </div>
    </div>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
