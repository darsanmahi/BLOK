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
            margin-top: auto;
            text-align: center;
            font-weight: 10px;
            padding: 80px 0px 0px 0px;
            font-size: 15px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;            
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
    <?php
        session_start();
        $bname=$_POST['Block'];
        $db1=mysqli_connect("localhost","root","",$bname);
        $db2=mysqli_connect("localhost","root","","hallbookingauthority");
        if(!$db1)
        {
            echo "CONNECTION FAILED";
        }
        else
        {
            $date=$_POST['date'];
            $pno=$_POST['pno'];
            $_SESSION['pno']=$pno;
            $_SESSION['block']=$bname;
            $day1=strtotime($date);
            $day=date("l",$day1);
            $dept=$_POST['classcode'];
            $_SESSION['day']=$day;
            $_SESSION['date']=$date;
            $_SESSION['classcode']=$dept;
            $sname=$_POST['sname'];
            $_SESSION['sname']=$sname;
            $arrh=array();
            $i=0;
            $_SESSION['arrh']=$arrh;
            $q1="SELECT hallnumber from booking where date='$date' and period='$pno'";
            $q3="SELECT hallnumber from bookingclub where date='$date' and period='$pno'";
            $q2="SELECT hallnumber from tempfreeperiod where period='$pno' and date='$date' and block='$bname' and status='Free'";
            if( $date=="" || $day=="" || $pno=="" || $dept="" || $year="")
            {
                echo "<script> alert('All field required');</script>";
                return;
	        }
            $r1=mysqli_query($db1,$q1);
            $rc1=mysqli_num_rows($r1);
            $r2=mysqli_query($db2,$q2);
            $rc2=mysqli_num_rows($r2);
            $r3=mysqli_query($db1,$q3);
            $rc3=mysqli_num_rows($r3);
            if($rc1>0||$rc3>0)
            {
                $query="SELECT hallnumber from {$day} where hallnumber not in (SELECT hallnumber from booking where date='$date' and period='$pno' UNION SELECT hallnumber from bookingclub where date='$date' and period='$pno' ) and startingperiod='$pno'";
            }
            elseif($rc1==0)
            {
                $query="SELECT hallnumber from {$day} where $pno=startingperiod";
            }
                $result=mysqli_query($db1,$query);
                $rc=mysqli_num_rows($result);
                if($rc!=0)
                {
                    echo "The halls available are";
                    echo '<br>';
                    if($rc2>0)
                    {
                        $rcc=mysqli_fetch_assoc($r2);
                        echo '<li>'.$rcc['hallnumber'].'</li>';
                        $arrh[$i]=$rcc['hallnumber'];
                        $i++;
                    }
                    while($rows=mysqli_fetch_array($result))
                    {
                        echo '<li>'.$rows['hallnumber'].'</li>';
                        $arrh[$i]=$rows['hallnumber'];
                        $i++;
                    }
                    ?>
                    <div class="container">
                        <div class="row row-content">
                            <div class="col-12 col-sm-9">
                                <form action="bookadmininfo.php" method="POST">
                                    <div class="form-group row">
                                        <select class="form-control offset-6 col-md-3" id="hall_no" name="hall_no" placeholder="Hall Number">
                                            <?php
                                                foreach($arrh as $item)
                                                {
                                                    echo "<option value='$item'>$item</option>";
                                                }
                                            ?>
                                        </select>
                                        <button class="btn btn-primary" type="submit" name="book_btn"> Book</button>
                                    </div>
                                    <div class="form-group row">
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php
                }
                elseif($rc==0)
                {
                    echo "<h3>NO HALLS AVAILABLE</h3>";
                    ?>
                    <div class="row row-content">
                        <div class="col-12 offset-3 col-sm-6">
                            <a href="search.php" class="btn btn-primary" role="button"><i class="fa fa-chevron-left"></i> Back</a>
                        </div>
                    </div>
                    <?php
                }
        }
    ?>
    </div>
 </body>
</html>