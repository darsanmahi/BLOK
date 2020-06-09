<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
    <style>
        body{
            background-image: url(./images/Performance-management-tools-Clear-Review.jpg);
            color: black;
            background-repeat: no-repeat;
            padding: 10px 0px 0px 0px;
            background-size: cover;
            text-align: left;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
        }
        .navbar-dark{
            background-color: black;
        }
        h2{
            margin-top: 250px;
        }
    </style>
    <?php
        $db=mysqli_connect("localhost","root","","hallbookingauthority");
        if(!$db)
        {echo 'Connection Failed';}
        else
        {
            $q="SELECT * from issue where status='unrectified'";
            $q1="SELECT * from issue where status='unrectified'";
            $r=mysqli_query($db,$q);
            $rc=mysqli_num_rows($r);
            $iss=array();
            $hno=array();
            $j=0;
            $i=0;
            ?>
            <br><br><br>
            <body>
            <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-auto" href="#"><img src="./images/3be847d8-395b-4d3b-a493-c75ae865e1b5_200x200.png" height="45" width="42"></a>
                    <div class="collapse navbar-collapse" id="Navbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active"><a class="nav-link" href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="displayrecords.php"><i class="fa fa-book"></i> View Bookings</a></li>
                            <li class="nav-item"><a class="nav-link" href="adduser.php"><i class="fa fa-user-circle-o"></i> Add User</a></li>\
                            <li class="nav-item"><a class="nav-link" href="addsecretary.php"><i class="fa fa-user-circle"></i> Add Secretary</a></li>
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
            <?php
            if($rc!=0)
            {
                ?>
                <div class="row row-header">
                    <h3>Issues not Rectified:</h3>
                </div>
                <div class="row row-content">
                <?php
                while($res=mysqli_fetch_array($r))
                {
                    ?>
                    <div class="col-10 col-sm-3 align-contents-center">
                    <?php
                    echo '<strong>HALL NUMBER: </strong>'.$res['hallnumber'];
                    echo '<br>';
                    echo '<strong>ISSUE: </strong>'.$res['issues'];
                    echo '<br>';
                    echo '<br>';
                    $iss[$i]=$res['issues'];
                    $i++;
                    $hno[$j]=$res['hallnumber'];
                    $j++;
                    ?>
                    <div class="col-sm-3 align-contents-center">
                    </div>
                    </div>
                    <?php
                }
                $hno=array_unique($hno);
                $r1=mysqli_query($db,$q1);
                echo '</div>';
                ?>
                <form action="hallissrect.php" method="POST">
                    <div class="form-group row">
                        <label for='hno1' class="col-12 col-md-1 col-form-label">Hall Number</label>
                        <select id="hno1" name="hno1" class="form-control col-md-3">
                            <?php
                                foreach($hno as $item)
                                {
                                    echo "<option value='$item'>".$item."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for='iss' class="col-12 col-md-1 col-form-label">Issue</label>
                        <select id="iss" name="iss" class="form-control col-md-3">
                            <?php
                                foreach($iss as $item)
                                {
                                    echo "<option value='$item'>".$item."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="btn col-12 col-md-5">
                        <button class="btn btn-primary">Rectified</button>
                        <a href="logout.php"><button type="button" class="btn btn-dark btn-md">
                        <i class="fa fa-sign-out"></i> Log Out
                        </button></a><br><br>
                        <a href="displayrecords.php">See Bookings?</a>
                    </div>
                    <div class="row row-content">
                    </div>
                </form>
                </body>
                <?php
            }
            else
            {
                echo '<h2>No Issues have been reported recently!</h2>';
            }
        }
    ?>
</html>