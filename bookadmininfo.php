<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">

    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            background-image: url(./images/green-leaf-plant-in-white-flower-pot-1022923.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            padding: 100px 0px 0px 0px;
        }
        .logo{
            float: right;
        }
        .navbar-dark{
            background-color: #191919;
        }
        h3{
            margin-top: 200px;
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
                            <li class="nav-item"><a class="nav-link" href="hallissuedisp.php"><i class="fa fa-home"></i> Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="displayrecords.php"><i class="fa fa-book"></i> View Bookings</a></li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-user-circle-o"></i> Add User</a></li>
                            <li class="nav-item"><a class="nav-link" href="addsecretary.php"><i class="fa fa-user-circle"></i> Add Secretary</a></li>
                            <li class="nav-item active"><a class="nav-link" href="bookadmin.php"><i class="fa fa-book"></i> Book Hall</a></li>
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
    <?php session_start();
        $bname=$_SESSION['block'];
        $pno=$_SESSION['pno'];
        $hll=$_POST['hall_no'];
        $day=$_SESSION['day'];
        $date=$_SESSION['date'];
        $dept=$_SESSION['classcode'];
        $uname=$_SESSION['usernames'];
        $sname=$_SESSION['sname'];
        $db1=mysqli_connect("localhost","root","",$bname);
        $db2=mysqli_connect("localhost","root","","hallbookingauthority");
        if(!$db1)
        {
            echo "connection failed!!";
        }
        else
        {
            $q="SELECT * from {$day} where hallnumber='$hll' and startingperiod='$pno'";
            $query="SELECT * from tempfreeperiod where hallnumber='$hll' and period='$pno' and date='$date'";
            $result=mysqli_query($db2,$query);
            $rowcount=mysqli_num_rows($result);
            $r=mysqli_query($db1,$q);
            $rc=mysqli_num_rows($r);
            if($rc==0 && $rowcount==0)
            {echo 'INVALID HALL SELECTED';}
            else
            {
                echo "<h3>THE HALL YOU SELECTED ".$hll.'</h3>';
            echo '<br>';
            $qu2="INSERT INTO booking (hallnumber,period,date,day,class_code,roll_no,staff_name) values ('$hll','$pno','$date','$day','$dept','$uname','$sname')";
            $qu5="UPDATE tempfreeperiod set status='Booked' where hallnumber='$hll'";
            if(!mysqli_query($db1,$qu2))
            {echo mysqli_error($db1);}
            if(!mysqli_query($db2,$qu5))
            {echo mysqli_error($db2);}
            }
        }
    ?>
    </div>
    </body>
</html>