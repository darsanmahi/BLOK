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
            margin-top: auto;
            font-size:20px;
            text-align: center;
            font-weight: 10px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;            
        }
    </style>
    <?php
        session_start();
        $i=0;
        $j=0;
        $flag=0;
        $temp=0;
        $bname=$_POST['Block'];
        $db1=mysqli_connect("localhost","root","",$bname);
        $db2=mysqli_connect("localhost","root","","hallbookingauthority");
        if(!$db1)
        {
            echo "CONNECTION FAILED";
        }
        else
        {
            $date=$_POST['date'];
            $pno=$_POST['pno'];
            $_SESSION['pno']=$pno;
            $_SESSION['block']=$bname;
            $day=$_POST['day'];
            $dept=$_POST['class'];
            $_SESSION['day']=$day;
            $_SESSION['date']=$date;
            $_SESSION['class']=$dept;
            $q1="SELECT hallnumber from booking where date='$date' and period='$pno'";
            $q2="SELECT hallnumber from tempfreeperiod where period='$pno' and date='$date' and block='$bname' and status='Free'";
            if( $date=="" || $day=="" || $pno=="" || $dept="" || $year="")
            {
                echo "<script> alert('All field required');</script>";
                return;
	        }
            $r1=mysqli_query($db1,$q1);
            $rc1=mysqli_num_rows($r1);
            $r2=mysqli_query($db2,$q2);
            $rc2=mysqli_num_rows($r2);
            if($rc1>0)
            {
                $query="SELECT hallnumber from {$day} where hallnumber not in (SELECT hallnumber from booking where date='$date' and period='$pno') and startingperiod='$pno'";
            }
            elseif($rc1==0)
            {
                $query="SELECT hallnumber from {$day} where $pno=startingperiod";
            }
                $result=mysqli_query($db1,$query);
                $rc=mysqli_num_rows($result);
                if($rc!=0)
                {
                    echo "The halls available are";
                    echo '<br>';
                    if($rc2>0)
                    {
                        $rcc=mysqli_fetch_assoc($r2);
                        echo '<li>'.$rcc['hallnumber'].'</li>';
                    }
                    while($rows=mysqli_fetch_array($result))
                    {
                        echo '<li>'.$rows['hallnumber'].'</li>';
                    }
                    echo '<form action="info.php" method="POST">
                    <input type="text" name="hall_no" placeholder="Hall Number">
                    <button class="one1" type="submit" name="book_btn">Book</button>
                    </form>';
                }
                elseif($rc==0)
                {echo "NO HALLS AVAILABLE";}
            }
    ?>