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
            color: black;
            text-align:center;
            font-size: 15px;
            padding: 100px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;            
        }
        .navbar-dark{
            background-color: #191919;
        }
    </style>
    <head>
        <title>Hall Booked</title>
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
                            <li class="nav-item"><a class="nav-link" href="category.php"> <i class="fa fa-home"></i> Home</a></li>
                            <li class="nav-item active"><a class="nav-link" href="search1.php"><i class="fa fa-book"></i> Book New Hall</a></li>
                            <li class="nav-item"><a class="nav-link" href="booking_display1.php"><i class="fa fa-chevron-left"></i> Previous Bookings</a></li>
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
    </body>
    <?php session_start();
        $bname=$_SESSION['block'];
        $pno=$_SESSION['pno'];
        $hll=$_POST['hall_no'];
        $day=$_SESSION['day'];
        $date=$_SESSION['date'];
        $purpose=$_SESSION['purpose'];
        $uname=$_SESSION['usernames'];
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
                echo "THE HALL YOU SELECTED ".$hll;
            echo '<br>';
            $qu2="INSERT INTO bookingclub (hallnumber,period,date,day,roll_no,reason) values ('$hll','$pno','$date','$day','$uname','$purpose')";
            $qu5="UPDATE tempfreeperiod set status='Booked' where hallnumber='$hll'";
            if(!mysqli_query($db1,$qu2))
            {echo mysqli_error($db1);}
            if(!mysqli_query($db2,$qu5))
            {echo mysqli_error($db2);}
            }
        }
    ?>
</html>