<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
    <style>
        body{
            background-image: url(./images/sharon-mccutcheon-eMP4sYPJ9x0-unsplash.jpg);
             background-repeat: no-repeat;
             background-size:cover;
             font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
             padding: 80px;
         }
         .navbar-dark{
             background-color: #191919;
         }
     </style>
    <body>
        <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-auto" href="#"><img src="./images/3be847d8-395b-4d3b-a493-c75ae865e1b5_200x200.png" height="45" width="42"></a>
                    <div class="collapse navbar-collapse" id="Navbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link" href="hallissuedisp.php"><i class="fa fa-home"></i> Home</a></li>
                            <li class="nav-item active"><a class="nav-link" href="#"><i class="fa fa-book"></i> View Bookings</a></li>\
                            <li class="nav-item"><a class="nav-link" href="adduser.php"><i class="fa fa-user-circle-o"></i> Add User</a></li>
                            <li class="nav-item"><a class="nav-link" href="addsecretary.php"><i class="fa fa-user-circle"></i> Add Secretary</a></li>
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
        session_start();
        $arr=$_SESSION['arr'];
        ?>
        <div class="container">
            <div class="row row-content">
                <div class="col-12 col-md-9">
                    <form class="major" action="canceladmin1.php" method="POST">
                        <div class="col-12">
                            <h2>Cancel Booking</h2><br>
                            <div class="form-group row">
                                    <label for='hallnumber' class="col-12 col-md-3 col-form-label">Hall Number</label>
                                    <div class="col-md-3">
                                        <select name='hno' id="hallnumber" class="form-control">
                                            <?php
                                            foreach($arr as $item)
                                            {
                                                echo "<option value='$item'>".$item."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                            </div>

                        <div class="form-group row">
                            <label for='period' class="col-12 col-md-3 col-form-label">Period Number</label>
                            <div class="col-md-3">
                                <input type="number" class="form-control" id="period" min="1" max="9" name="pno" placeholder="Period Number" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for='date' class="col-12 col-md-3 col-form-label">Date</label>
                            <div class="col-md-3">
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                        </div>
                        <div class="col-12 offset-2 col-sm-4 align-contents-center">
                            <button class="btn btn-danger" type="submit" name="Enter">Cancel Booking</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div> 
        </div>
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>