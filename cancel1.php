<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            background-image: url(blur-calm-waters-dawn-daylight-395198.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .one{
            margin-left: 670px;
        }
    </style>
</html>
<?php
    $bname=$_POST['Block'];
    $hno=$_POST['hno'];
    $pno=$_POST['pno'];
    $date=$_POST['date'];
    $db=mysqli_connect("localhost","root","",$bname);
    if(!$db)
    {echo 'CONNECTION FAILED';}
    else
    {
        $q1="SELECT * from booking where hallnumber='$hno' and date='$date' and period='$pno'";
        $rc=mysqli_query($db,$q1);
        $res=mysqli_num_rows($rc);
        if ($res==0)
        {
            echo '<p style="text-align:center;font-size:20px;margin-top:200px;">There is no booking of the hall '.$hno;
            ?><div class="one"><a href=category.php><input type="submit" value="Back to Selection Page"></a></div><?php
        }
        else
        {
            $q2="DELETE from booking where hallnumber='$hno' and date='$date' and period='$pno'";
            $r1=mysqli_query($db,$q2);
            echo '<p style="text-align:center;font-size:20px;margin-top:200px;">YOUR BOOKING HAS BEEN CANCELLED SUCCESSFULLY</p>';
            ?><div class="one"><a href=category.php><input type="submit" value="Back to Selection Page"></a></div><?php
        }
    }
?>