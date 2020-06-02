<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <style>
        @import url("https://unpkg.com/@popperjs/core@2");
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            background-image: url(green-leaf-plant-in-white-flower-pot-1022923.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            color: black;
            padding: 80px 0px 0px 0px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;            
        }
        .navbar-dark{
            background-color: #191919;
        }
        p{
            font-size: 20px;
        }
    </style>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                        <li class="nav-item"><a class="nav-link" href="category.php"><i class="fa fa-home"></i> Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="search.php"><i class="fa fa-book"></i> Book New Hall</a></li>
                        <li class="nav-item"><a class="nav-link" href="booking_display.php"><i class="fa fa-chevron-left"></i> Previous Bookings</a></li>
                        <li class="nav-item active"><a class="nav-link" href="#"><i class="fa fa-id-card"></i> Permanent Class</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
        session_start();
        $hno=$_SESSION['res'];
        $hno1=$hno['hallnumber'];
        if($hno1[0]=='G')
        {$block='gblock';}
        elseif($hno1[0]=='J')
        {$block='jblock';}
        elseif($hno1[0]=='A')
        {$block='ablock';}
        elseif($hno1[0]=='Y')
        {$block='yblock';}
        $per=$_POST['period'];
        $date=$_POST['date'];
        $db1=mysqli_connect("localhost","root","","hallbookingauthority");
        if(!$db1)
        {echo 'Connection Falied';}
        else
        {
            echo '<div class="col-12 offset-4 col-sm-6 align-contents-center">';
            if($per=='morningsession')
            {
                $q1="INSERT into tempfreeperiod(hallnumber,period,date,block,status) values ('$hno1',1,'$date','$block','Free')";
                $q2="INSERT into tempfreeperiod(hallnumber,period,date,block,status) values ('$hno1',2,'$date','$block','Free')";
                $q3="INSERT into tempfreeperiod(hallnumber,period,date,block,status) values ('$hno1',3,'$date','$block','Free')";
                $q4="INSERT into tempfreeperiod(hallnumber,period,date,block,status) values ('$hno1',4,'$date','$block','Free')";
                $r1=mysqli_query($db1,$q1);
                $r2=mysqli_query($db1,$q2);
                $r3=mysqli_query($db1,$q3);
                $r4=mysqli_query($db1,$q4);
                echo '<p>Status of Hall Updated Successfully</p>';
            }
            elseif($per=='noonsession')
            {
                $q1="INSERT into tempfreeperiod(hallnumber,period,date,block,status) values ('$hno1',5,'$date','$block','Free')";
                $q2="INSERT into tempfreeperiod(hallnumber,period,date,block,status) values ('$hno1',6,'$date','$block','Free')";
                $q3="INSERT into tempfreeperiod(hallnumber,period,date,block,status) values ('$hno1',7,'$date','$block','Free')";
                $q4="INSERT into tempfreeperiod(hallnumber,period,date,block,status) values ('$hno1',8,'$date','$block','Free')";
                $r1=mysqli_query($db1,$q1);
                $r2=mysqli_query($db1,$q2);
                $r3=mysqli_query($db1,$q3);
                $r4=mysqli_query($db1,$q4);
                echo '<p>Status of Hall Updated Successfully</p>';
            }
            else
            {
                $q="INSERT into tempfreeperiod(hallnumber,period,date,block,status) values ('$hno1','$per','$date','$block','Free')";
                $r1=mysqli_query($db1,$q);
                if(!$r1)
                {echo mysqli_error($db1);}
                else
                {
                    echo '<p>Status of Hall Updated Successfully</p>';
                }
            }
        }
        ?>
        </div>
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>