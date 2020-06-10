<!DOCTYPE html>
<html>
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
    <style>
        body{
            background-image: url(./images/beatriz-perez-moya-XN4T2PVUUgk-unsplash.jpg);
            color: black;
            background-repeat: no-repeat;
            background-size: cover;
            margin-top: 280px;
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
                            <li class="nav-item active"><a class="nav-link" href="#"><i class="fa fa-book"></i> View Bookings</a></li>
                            <li class="nav-item"><a class="nav-link" href="adduser.php"><i class="fa fa-user-circle-o"></i> Add User</a></li>
                            <li class="nav-item"><a class="nav-link" href="addsecretary.php"><i class="fa fa-user-circle"></i> Add Secretary</a></li>
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
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <div class="container">
            <div class="row row-header">
                <div class="col-12">
                    <h3>Display the records</h3>
                </div>
            </div>
            <div class="row row-content">
                <div class="col-12">
                    <form action="displaybyclasscode.php" method="POST">
                        <div class="form-group row">
                            <label for="Block" class="col-form-label col-12 col-md-2">Block</label>
                            <div class="col-md-3">
                                <select name="Block" class="form-control" required>
                                    <option value="gblock">G-Block</option>
                                    <option value="jblock">J-Block</option>
                                    <option value="ablock">A-Block</option>
                                    <option value="yblock">Y-Block</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12 col-md-2">
                                <label for="classcode" class="col-form-label">Class Code</label>
                            </div>
                            <div class="col-md-3">
                                <input type="number" class="form-control" name="classcode" id="classcode" required placeholder="Class Code">
                            </div>
                        </div>
                        <div class="btn form-group row">
                            <div class="col-12 offset-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>