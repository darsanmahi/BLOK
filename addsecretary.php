<?php
include ('addsec.php');
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
    <style>
        body{
            background-image: url(./images/top-view-photo-of-keyboard-near-earphones-1420701.jpg);
            color: black;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 250px 0px 0px 0px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
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
                            <li class="nav-item"><a class="nav-link" href="displayrecords.php"><i class="fa fa-book"></i> View Bookings</a></li>
                            <li class="nav-item"><a class="nav-link" href="adduser.php"><i class="fa fa-user-circle-o"></i> Add User</a></li>
                            <li class="nav-item active"><a class="nav-link" href="#"><i class="fa fa-user-circle"></i> Add Secretary</a></li>
                            <li class="nav-item"><a class="nav-link" href="bookadmin.php"><i class="fa fa-book"></i> Book Hall</a></li>
                            <li class="nav-item"><a class="nav-link" href="alterschedule.php"><i class="fa fa-building-o"></i> Alter Schedule</a></li>
                        </ul>
                        <span>
                            <a href="logout.php"><button type="button" class="btn btn-light btn-md">
                            <i class="fa fa-sign-out"></i> Log Out
                            </button></a>
                        </span>
                    </div>
            </div>
        </nav>
        <div class="container">
            <div class="row row-header">
                <h2>Register</h2>
            </div>
            <div class="row row-content">
                <div class="col-12 col-md-9">
                    <form action="addsecretary.php" method="POST">
                        <div class="form-group row">
                            <div class="col-12 col-md-2">
                                <label for="username" class="col-form-label">Username</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-md-2">
                                <label for="password" class="col-form-label">Password</label>
                            </div>
                            <div class="col-md-4">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" >
                            </div>
                        </div>
                        <div class="from-group row">
                            <div class="col-12 col-md-2">
                                <label for="clubname" class="col-form-label">Club Name</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="clubname" id="clubname" class="form-control" placeholder="Club Name" > 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-2 col-md-5">
                                <br>
                                <button type="submit" name="reg" class="btn btn-primary">Add Me</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>
