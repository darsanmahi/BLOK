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
             padding: 80px 0px 0px 0px;
         }
         .navbar-dark{
             background-color: #191919;
         }
         h2{
             margin-top: 250px;
         }
     </style>
     <head>
         <title>Your Bookings</title>
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
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <?php
        session_start();
        $blk=$_POST['Block'];
        $_SESSION['Block']=$blk;
        $cc=$_POST['classcode'];
        $_SESSION['classcode']=$cc;
        $arr=array();
        $i=0;
        $name=null;
        $db=mysqli_connect("localhost","root","",$blk);
        $q="SELECT * from booking where class_code='$cc'";
        $res1=mysqli_query($db,$q);
        $rc=mysqli_num_rows($res1);
        if($blk=='gblock')
        {$name="G-Block";}
        if($blk=='jblock')
        {$name="J-Block";}
        if($blk=='ablock')
        {$name="A-Block";}
        if($blk=='yblock')
        {$name="Y-Block";}
        ?>
        <div class="container">
        <?php
        if($rc!=0)
        {
            ?>
                    <div class="row row-header">
                        <h3><?php echo $name ?>:</h3>
                    </div>
                    <div class="row row-content">
                <?php
                
            while($res=mysqli_fetch_array($res1))
            {
                ?>
                    <div class="col-sm-2 align-self-end">
                    <?php
                    echo '<strong>HALL NUMBER: </strong>'.$res['hallnumber'];
                    echo '<br>';
                    echo '<strong>PERIOD: </strong>'.$res['period'];
                    echo '<br>';
                    echo '<strong>DATE: </strong>'.$res['date'];
                    echo '<br>';
                    echo '<strong>DAY: </strong>'.$res['day'];
                    echo '<br>';
                    echo '<br>';
                    $arr[$i]=$res['hallnumber'];
                    $i++;
                    ?>
                    <div class="col-sm-2 align-contents-center">
                    </div>
                    </div>
                    <?php
                }
                ?>
                </div>
                <div class="row row-content">
                    <div class="col-12 col-md-5">
                        <a href="canceladmin.php">Cancel Any Booking?</a>
                    </div>
                </div>
                <?php
            }
        else{
            echo '<h2>No Halls has been booked</h2>';
        }
    ?>
     </div>
    <?php
        $_SESSION['arr']=$arr;
    ?>
     </body>
</html>