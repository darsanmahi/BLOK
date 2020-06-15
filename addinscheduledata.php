<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
    <style>
        body{
            background-image: url(./images/roman-bozhko-PypjzKTUqLo-unsplash.jpg);
            color: black;
            background-repeat: no-repeat;
            padding: 270px 0px 0px 0px;
            background-size: cover;
            text-align: left;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
        }
        .navbar-dark{
            background-color: black;
        }
    </style>
    <head>
        <title>Alter Schedule</title>
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
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="displayrecords.php"><i class="fa fa-book"></i> View Bookings</a></li>
                            <li class="nav-item"><a class="nav-link" href="adduser.php"><i class="fa fa-user-circle-o"></i> Add/Remove User</a></li>
                            <li class="nav-item"><a class="nav-link" href="addsecretary.php"><i class="fa fa-user-circle"></i> Add/Remove Secretary</a></li>
                            <li class="nav-item"><a class="nav-link" href="bookadmin.php"><i class="fa fa-book"></i> Book Hall</a></li>
                            <li class="nav-item active"><a class="nav-link" href="alterschedule.php"><i class="fa fa-building-o"></i> Alter Schedule</a></li>
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
            <div class="row row-content">
                <div class="col-12 col-md-8">
            <?php
            if(isset($_POST['add_btn'])){
                $blk=$_POST['Block'];
                $db=mysqli_connect("localhost","root","",$blk);
                $hno=$_POST['hno'];
                $day=$_POST['day'];
                $pno=$_POST['pno'];
                $query="INSERT INTO {$day}(hallnumber,startingperiod) values ('$hno','$pno')";
                $result=mysqli_query($db,$query);
                if($result){
                    echo '<h2>Schedule Altered Successfully</h2>';
                    ?>
                    </div>
                    </div>
                    <div class="row row-content">
                    <a href="alterschedule.php" type="button" class="btn btn-primary offset-2"><i class="fa fa-chevron-left"></i> Back </a>
                    </div>
                    <?php
                }
            }
            elseif(isset($_POST['remove_btn'])){
                $blk=$_POST['Block'];
                $db=mysqli_connect("localhost","root","",$blk);
                $hno=$_POST['hno'];
                $day=$_POST['day'];
                $pno=$_POST['pno'];
                $q1="SELECT * FROM {$day} where hallnumber='$hno' and startingperiod='$pno'";
                $r1=mysqli_query($db,$q1);
                $rc=mysqli_num_rows($r1);
                if($rc!=0){
                    $query="DELETE from {$day} where hallnumber='$hno' and startingperiod='$pno'";
                    $result=mysqli_query($db,$query);
                    if($result){
                        echo '<h2>Schedule Altered Successfully</h2>';
                        ?>
                        </div>
                        </div>
                        <div class="row row-content">
                        <a href="alterschedule.php" type="button" class="btn btn-primary offset-2"><i class="fa fa-chevron-left"></i> Back </a>
                        </div>
                        <?php
                    }
                }
                elseif($rc==0){
                    echo '<h2>No Such Hall '.$hno.' with the period '.$pno.' is free</h2>';
                    ?>
                        </div>
                        </div>
                        <div class="row row-content">
                        <a href="alterschedule.php" type="button" class="btn btn-primary offset-2"><i class="fa fa-chevron-left"></i> Back </a>
                        </div>
                        <?php
                }
            }
        ?>
        </div>
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>