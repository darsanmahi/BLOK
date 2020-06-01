<!DOCTYPE html>
<html>
     <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
     <meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
     <style>
        /*@import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");*/
         body{
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
                <a class="navbar-brand mr-auto" href="#">BLOK</a>
                    <div class="collapse navbar-collapse" id="Navbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link" href="category.php"><i class="fa fa-home"></i> Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="search.php"><i class="fa fa-book"></i> Book New Hall</a></li>
                            <li class="nav-item active"><a class="nav-link" href="#"><i class="fa fa-chevron-left"></i> Previous Bookings</a></li>
                            <li class="nav-item"><a class="nav-link" href="permanentclass.php"><i class="fa fa-id-card"></i> Permanent Class</a></li>
                        </ul>
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
        $q="SELECT * from booking where roll_no='$uname'";
        $r=mysqli_query($db,$q);
        $rc=mysqli_num_rows($r);
        ?>
        <div class="container">
        <?php
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
                <div class="col-12 col-sm-2 align-contents-center">
                <?php
                echo 'HALL NUMBER: '.$res['hallnumber'];
                echo '<br>';
                echo 'PERIOD: '.$res['period'];
                echo '<br>';
                echo 'DATE: '.$res['date'];
                echo '<br>';
                echo 'DAY: '.$res['day'];
                echo '<br>';
                echo '<br>';
                ?>
                <div class="col-12 col-sm-2 align-contents-center">
                </div>
                </div>
                <?php
            }
            ?>
            </div>
            <?php
        }
        else
        {echo '<div class="row row-header"><h4>No Halls booked in G-Block</h4></div>';}
        $db1=mysqli_connect("localhost","root","","jblock");
        $q1="SELECT * from booking where roll_no='$uname'";
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
                ?>
                <div class="col-12 col-sm-2 align-contents-center">
                </div>
                </div>
                <?php
            }
        }
        else
        {echo '<div class="row row-header"><h4>No Halls booked in J-Block</h4></div>';}
        echo '<a href="cancel.php">Cancel Any Booking?</a>';
        ?>
        </div>
        <?php
        ?>
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>