<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            /*background-image: url(green-leaf-plant-in-white-flower-pot-1022923.jpg);*/
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            padding: 50px 0px 0px 0px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;            
        }
        .one1{
            font-size: 20px;
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
                <a class="navbar-brand mr-auto" href="#"><img src="3be847d8-395b-4d3b-a493-c75ae865e1b5_200x200.png" height="45" width="42"></a>
                <div class="collapse navbar-collapse" id="Navbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link" href="category.php"><i class="fa fa-home"></i> Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="search.php"><i class="fa fa-book"></i> Book New Hall</a></li>
                            <li class="nav-item"><a class="nav-link" href="booking_display.php"><i class="fa fa-chevron-left"></i> Previous Bookings</a></li>
                            <li class="nav-item active"><a class="nav-link" href="permanentclass.php"><i class="fa fa-id-card"></i> Permanent Class</a></li>
                        </ul>
                </div>
            </div>
        </nav>
    <?php
        session_start();
        $hno=$_SESSION['res'];
        $hno1=$hno['hallnumber'];
        ?>
        <div class='one1'>
        <?php
        echo '<header class="jumbotron">Your Permanent Class is '.$hno1;
        echo '</header>';
        $db1=mysqli_connect("localhost","root","","hallbookingauthority");
        if(!$db1)
        {echo 'Connection Failed';}
        else
        {
            $q2="SELECT * from issue";
            $r2=mysqli_query($db1,$q2);
            $rc2=mysqli_num_rows($r2);
            if($rc2==0)
            {
                echo 'No Issues have been reported';
            }
            else
            {
                $q="SELECT issues from issue where status='rectified'";
                $r=mysqli_query($db1,$q);
                $rc=mysqli_num_rows($r);
                if($rc==0)
                {
                    echo 'No Issues have been rectified';
                    echo '<br>';
                }
                else
                {
                    echo 'Rectified Issues';
                    echo '<br>';
                    $res=mysqli_fetch_assoc($r);
                    echo 'Issue: '.$res['issues'];
                    echo '<br>';
                }
                $q1="SELECT issues from issue where status='unrectified'";
                $r1=mysqli_query($db1,$q1);
                $rc1=mysqli_num_rows($r1);
                if($rc1==0)
                {
                    ?>
                    <div class="row-header">
                    <?php
                    echo 'All the Issues have been rectified';
                    echo '<br>';
                    echo '</div>';
                }
                else
                {
                    echo ' Un Rectified Issues';
                    echo '<br>';
                    $res=mysqli_fetch_assoc($r1);
                    echo 'Issue: '.($res['issues']);
                    echo '<br>';
                }
            }
            ?>
            </div>
            <?php
        }
    ?>
    </body>
</html>