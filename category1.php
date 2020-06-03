<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            background-image: url(Website-Design-Background-1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            color: white;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .main a{
            color: white;
            font-size: 20px;
        }
        .one button{
            font-size:20px;
        }
        .jumbotron{
            background-color: transparent;
        }
    </style>
    <?php
        session_start();
        $uname=$_SESSION['usernames'];
        $db=mysqli_connect("localhost","root","","hallbookingauthority");
        $q="SELECT club_name from secretaries where username='$uname'";
        $res=mysqli_query($db,$q);
        $name=mysqli_fetch_array($res);
    ?>
    <body>
        <header class="jumbotron">
            <h2>Welcome, The Secretary of <?php echo $name['club_name'];?></h2>
        </header>
        <div class="container">
            <div class="row row-content">
                <div class='col-12 main'>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-chevron-left"></i><a href='booking_display1.php'> My Bookings</a></li>
                        <li><i class="fa fa-book"></i> <a href='search1.php'> Book New Hall</a></li>
                    </ul>
                    <br>
                </div>
                <div class='col-12 one'>
                    <a href="logout.php"><button type="button" class="btn btn-light btn-md">
                    <i class="fa fa-sign-out"></i> Log Out
                    </button></a>
                </div>
            </div>
        </div>
    </body>
</html>