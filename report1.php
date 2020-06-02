<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            background-image: url(green-leaf-plant-in-white-flower-pot-1022923.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            color: black;
            text-align:center;
            margin-top: 220px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;            
        }
    </style>
    <body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-auto" href="main.html"><img src="3be847d8-395b-4d3b-a493-c75ae865e1b5_200x200.png" height="45" width="42"></a>
                <div class="collapse navbar-collapse" id="Navbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="display.php"><span class="fa fa-keyboard-o"></span> Home</a></li>
                        <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-exclamation fa-lg"></span> Report Issue</a></li>
                    </ul>
                </div>
            </div>
       </nav>
    <?php
        session_start();
        $lname=$_SESSION['lab'];
        $inc_value=1;
        $db1=mysqli_connect("localhost","root","",$lname);
        if(!$db1)
        {echo "CONNECTION FAILED";}
        else
        {
            $iname=$_POST['issue'];
            $no=$_POST['systemno'];
            $q="SELECT * from systems where system_no='$no'";
            $r=mysqli_query($db1,$q);
            $res=mysqli_num_rows($r);
            if ($res==0)
            {
                echo 'INVALID SYSTEM NUMBER';
                ?><div class="row row-content"><div class="col-12"><a class="btn btn-danger" href=report.php><i class="fa fa-chevron-left"></i> Back</a></div></div><?php
            }
            $query="Insert into problems(issue,system_no) values ('$iname','$no')";
            $query1="UPDATE systems set issues=issues+1 where system_no='$no'";
            $query2="UPDATE systems set current='$iname' where system_no='$no'";
            $result=mysqli_query($db1,$query);
            $result1=mysqli_query($db1,$query1);
            $result2=mysqli_query($db1,$query2);
            if($result)
            {
                echo 'Your Issue '.$iname.' on '.$no.' is updated';
                ?><div class="row row-content"><div class="col-12"><a class="btn btn-primary" href=report.php><i class="fa fa-chevron-left"></i> Back</a></div></div><?php
            }
        }
    ?>
    </body>
</html>