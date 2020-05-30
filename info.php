<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            background-image: url(green-leaf-plant-in-white-flower-pot-1022923.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            color: black;
            text-align:center;
            margin-top: 300px;
            font-size:20px;
            font-weight: 10px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;            
        }
    </style>
    <?php session_start();
        $bname=$_SESSION['block'];
        $pno=$_SESSION['pno'];
        $hll=$_POST['hall_no'];
        $day=$_SESSION['day'];
        $date=$_SESSION['date'];
        $dept=$_SESSION['class'];
        $uname=$_SESSION['usernames'];
        $db1=mysqli_connect("localhost","root","",$bname);
        if(!$db1)
        {
            echo "connection failed!!";
        }
        else
        {
            $q="SELECT * from {$day} where hallnumber='$hll' and startingperiod='$pno'";
            $r=mysqli_query($db1,$q);
            $rc=mysqli_num_rows($r);
            if($rc==0)
            {echo 'INVALID HALL SELECTED';}
            else
            {
                echo "THE HALL YOU SELECTED ".$hll;
            echo '<br>';
            $qu2="INSERT INTO booking (hallnumber,period,date,day,class_code,roll_no) values ('$hll','$pno','$date','$day','$dept','$uname')";
            if(!mysqli_query($db1,$qu2))
            {echo mysqli_error($db1);}
            ?>
            <a href=category.php class="back"><input type="submit" value="Back"></a>
            <?php
            }
        }
    ?>
</html>