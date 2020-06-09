<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
<html>
    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            /*background-image: url(green-leaf-plant-in-white-flower-pot-1022923.jpg);*/
            background-repeat: no-repeat;
            background-size: cover;
            color: black;
            text-align: center;
            font-weight: 10px;
            padding: 80px 0px 0px 0px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;            
        }
        a{
            text-decoration: none;
            display: inline-block;
            padding: 8px 16px;
        }
        a:hover {
            background-color: #ddd;
            color: black;
        }
        .previous {
            background-color: black;
            color: white;
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
                                <li class="nav-item"><a class="nav-link" href="category.php"><i class="fa fa-home"></i> Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="search.php"><i class="fa fa-book"></i> Book New Hall</a></li>
                                <li class="nav-item"><a class="nav-link" href="booking_display.php"><i class="fa fa-chevron-left"></i> Previous Bookings</a></li>
                                <li class="nav-item active"><a class="nav-link" href="permanentclass.php"><i class="fa fa-id-card"></i> Permanent Class</a></li>
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
    $hno=$_SESSION['res'];
    $hno1=$hno['hallnumber'];
    $st='unrectified';
    echo '<header class="jumbotron">Your Permanent Class is '.$hno1;
    echo '</header>';
    $issue=$_POST['issue'];
    $db1=mysqli_connect("localhost","root","","hallbookingauthority");
    if(!$db1)
    {echo 'Connection Failed';}
    else
    {
        $q="INSERT into issue(hallnumber,issues,status) values ('$hno1','$issue','$st')";
        if(!mysqli_query($db1,$q))
        {echo mysqli_error($db1);}
        else
        {
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-12 offset-3 col-sm-6 align-items-center">
                        <p>Your Issue has been reported succesfully</p>
                        <a href="permanentclass.php" class="previous">&laquo; Go Back</a>
                    </div>
                </div>
            </div>
            <?php
        }
    }
?>
</body>
</html>