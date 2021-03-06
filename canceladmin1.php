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
             padding: 80px 0px 0px 0px;

         }

         .navbar-dark{
             background-color: #191919;
         }
         h3{
             margin-top: 250px;
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
                            <li class="nav-item"><a class="nav-link" href="hallissuedisp.php"><i class="fa fa-home"></i> Home</a></li>
                            <li class="nav-item active"><a class="nav-link" href="displayrecords.php"><i class="fa fa-book"></i> View Bookings</a></li>
                            <li class="nav-item"><a class="nav-link" href="adduser.php"><i class="fa fa-user-circle-o"></i> Add/Remove User</a></li>
                            <li class="nav-item"><a class="nav-link" href="addsecretary.php"><i class="fa fa-user-circle"></i> Add/Remove Secretary</a></li>
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
        <?php
        session_start();
        $blk=$_SESSION['Block'];
        $hno=$_POST['hno'];
        $period=$_POST['pno'];
        $date=$_POST['date'];
        $cc=$_SESSION['classcode'];
        $db=mysqli_connect("localhost","root","",$blk);
        $db1=mysqli_connect("localhost","root","","hallbookingauthority");
        $q11="SELECT * from booking where hallnumber='$hno' and period ='$period' and date =' $date'";
        $r11=mysqli_query($db,$q11);
        $rccc=mysqli_num_rows($r11);
        if($rccc>0){
        $q="DELETE from booking where hallnumber='$hno' and period='$period' and date='$date' and class_code='$cc'";
        $result=mysqli_query($db,$q);
        $q1="UPDATE tempfreeperiod set status='Free' where hallnumber='$hno' and period='$period' and date='$date' and class_code='$cc'";
        $r1=mysqli_query($db1,$q1);
        if(!$result || $r1)
        {
            echo mysqli_error($db);
            echo mysqli_error($db1);
        }
        else
        {
            echo '<h3>Your Booking has been cancelled successfully</h3>';
        }
        }
        else{
            echo '<p style="padding:250px 0px 0px 0px";> There is no booking of hall '.$hno. ' for period '.$period. ' on '.$date.'</p>';
        }
        ?>
        </div>
    </body>
</html>