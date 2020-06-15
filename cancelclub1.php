<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            background-image: url(./images/blur-calm-waters-dawn-daylight-395198.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            padding: 80px 0px 0px 0px;
        }
        .one{
            margin-left: 670px;
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
    session_start();
    $bname=$_SESSION['Block'];
    $hno=$_POST['hno'];
    $pno=$_POST['pno'];
    $date=$_POST['date'];
    $db=mysqli_connect("localhost","root","",$bname);
    if(!$db)
    {echo 'CONNECTION FAILED';}
    else
    {
        $q1="SELECT * from bookingclub where hallnumber='$hno' and date='$date' and period='$pno'";
        $rc=mysqli_query($db,$q1);
        $res=mysqli_num_rows($rc);
        if ($res==0)
        {
            echo '<p style="text-align:center;font-size:20px;margin-top:200px;">There is no booking of the hall '.$hno;
        }
        else
        {
            $q2="DELETE from bookingclub where hallnumber='$hno' and date='$date' and period='$pno'";
            $r1=mysqli_query($db,$q2);
            echo '<p style="text-align:center;font-size:20px;margin-top:200px;">YOUR BOOKING HAS BEEN CANCELLED SUCCESSFULLY</p>';
        }
    }
?>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>