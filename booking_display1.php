<!DOCTYPE html>
<html>
     <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
     <meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
     <style>
         body{
             background-image: url(./images/jess-bailey-l3N9Q27zULw-unsplash.jpg);
             background-repeat: no-repeat;
             background-size:auto;
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
                <a class="navbar-brand mr-auto"><img src="./images/3be847d8-395b-4d3b-a493-c75ae865e1b5_200x200.png" height="45" width="42"></a>
                    <div class="collapse navbar-collapse" id="Navbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link" href="category1.php"><i class="fa fa-home"></i>  Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="search1.php"><i class="fa fa-book"></i> Book New Hall</a></li>
                            <li class="nav-item active"><a class="nav-link" href="#"><i class="fa fa-chevron-left"></i> Previous Bookings</a></li>
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
        ?>
        <p style="text-align:center;font-size:30px;">YOUR BOOKINGS</p>
        <br>
        <?php
        $uname=$_SESSION['usernames'];
        $db=mysqli_connect("localhost","root","","gblock");
        $q="SELECT * from bookingclub where roll_no='$uname'";
        $r=mysqli_query($db,$q);
        $rc=mysqli_num_rows($r);
        ?>
        <div class="container">
        <?php
        $arrg=array();
        $i=0;
        $arrj=array();
        if($rc!=0)
        {
            ?>
                <div class="row row-header">
                    <h3>G-Block:</h3>
                </div>
                <div class="row row-content">
            <?php
            while($res=mysqli_fetch_array($r))
            {
                ?>
                <div class="col-sm-3 align-self-end">
                <?php
                echo 'HALL NUMBER: '.$res['hallnumber'];
                echo '<br>';
                echo 'PERIOD: '.$res['period'];
                echo '<br>';
                echo 'DATE: '.$res['date'];
                echo '<br>';
                echo 'DAY: '.$res['day'];
                echo '<br>';
                echo 'PURPOSE: '.$res['reason'];
                echo '<br>';
                echo '<br>';
                $arrg[$i]=$res['hallnumber'];
                $i++;
                ?>
                <div class="col-sm-2 align-contents-center">
                </div>
                </div>
                <?php
            }
            $i=0;
            ?>
            </div>
            <?php
        }
        else
        {echo '<div class="row row-header"><h4>No Halls booked in G-Block</h4></div>';}
        $db1=mysqli_connect("localhost","root","","jblock");
        $q1="SELECT * from bookingclub where roll_no='$uname'";
        $r1=mysqli_query($db1,$q1);
        $rc1=mysqli_num_rows($r1);
        if($rc1!=0)
        {
            ?>
                <div class="row row-header">
                    <h3>J-Block:</h3>
                </div>
                <div class="row row-content">
            <?php
            while($res1=mysqli_fetch_array($r1))
            { 
                ?>
                <div class="col-12 col-sm-2 align-contents-center">
                <?php
                echo 'HALL NUMBER: '.$res1['hallnumber'];
                echo '<br>';
                echo 'PERIOD: '.$res1['period'];
                echo '<br>';
                echo 'DATE: '.$res1['date'];
                echo '<br>';
                echo 'DAY: '.$res1['day'];
                echo '<br>';echo '<br>';
                $arrj[$i]=$res1['hallnumber'];
                $i++;
                ?>
                <div class="col-12 col-sm-2 align-contents-center">
                </div>
                </div>
                <?php
            }
        }
        else
        {echo '<div class="row row-header"><h4>No Halls booked in J-Block</h4></div>';}
        if($rc1!=0 || $rc!=0)
        {echo '<a href="cancelclub.php">Cancel Any Booking?</a>';}
        $_SESSION['arrg']=$arrg;
        $_SESSION['arrj']=$arrj;
        ?>
        </div>
        <?php
        ?>
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>