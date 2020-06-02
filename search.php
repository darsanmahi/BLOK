<?php include('conn1.php');
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">

    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            background-image: url(sharon-mccutcheon-eMP4sYPJ9x0-unsplash.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            padding: 100px 0px 0px 0px;
        }
        .logo{
            float: right;
        }
        .navbar-dark{
            background-color: #191919;
        }
        </style>
    <head>
        <title>Hall Booking Page</title>
    </head>
    <body>
        <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-auto" href="#"><img src="3be847d8-395b-4d3b-a493-c75ae865e1b5_200x200.png" height="45" width="42"></a>
                    <div class="collapse navbar-collapse" id="Navbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link" href="./category.php"><i class="fa fa-home"></i> Home</a></li>
                            <li class="nav-item active"><a class="nav-link" href="#"><i class="fa fa-book"></i> Book New Hall</a></li>
                            <li class="nav-item"><a class="nav-link" href="./booking_display.php"><i class="fa fa-chevron-left"></i> Previous Bookings</a></li>
                            <li class="nav-item"><a class="nav-link" href="./permanentclass.php"><i class="fa fa-id-card"></i> Permanent Class</a></li>
                        </ul>
                    </div>
            </div>
        </nav>
        <div class="container">
            <div class="row row-content">
                <div class="col-12 col-md-9">
                    <form action="display1.php" method="POST">
                        <div class="col-12 offset-2 align-contents-center">
                            <h2>Book New Hall</h2><br>
                            <div class="form-group row">
                                <label for="Block" class="col-form-label col-12 col-md-2">Block</label>
                                <div class="col-md-3">
                                    <select name="Block" class="form-control">
                                        <option value="gblock">G-Block</option>
                                        <option value="jblock">J-Block</option>
                                        <option value="ablock">A-Block</option>
                                        <option value="yblock">Y-Block</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for='period' class="col-12 col-md-2 col-form-label">Period Number</label>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="period" name="pno" placeholder="Period Number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for='date' class="col-12 col-md-2 col-form-label">Date</label>
                                <div class="col-md-3">
                                    <input type="date" class="form-control" id="date" name="date">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for='classcode' class="col-12 col-md-2 col-form-label">Class Code</label>
                                <div class="col-md-3">
                                    <input type="number" id="classcode" class="form-control" name="classcode" placeholder="Class Code">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for='sname' class="col-12 col-md-2 col-form-label">Staff Name</label>
                                <div class="col-md-3">
                                    <input type="text" name="sname" class="form-control" id="sname" placeholder="Staff Name">
                                </div>
                            </div>
                            <div class="col-12 offset-1 col-sm-4 align-contents-center">
                                <button class="btn btn-primary" type="submit" name="Enter">Check the Availability</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>