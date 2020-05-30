<!DOCTYPE html>
<html>
     <style>
         @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
         body{
             font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
         }
         .one{
             margin-left: 700px;
         }
         .two{
             margin-left: -50px;
         }
     </style>
    <?php
        session_start();
        ?>
        <p style="text-align:center;font-size:30px;">YOUR BOOKINGS</p>
        <br>
        <?php
        $uname=$_SESSION['usernames'];
        $db=mysqli_connect("localhost","root","","gblock");
        $q="SELECT * from booking where roll_no='$uname'";
        $r=mysqli_query($db,$q);
        $rc=mysqli_num_rows($r);
        echo '<div class=one>';
        echo '<div class="two">G-Block: </div>';
        echo '<br>';
        if($rc!=0)
        {
            while($res=mysqli_fetch_array($r))
            {
                echo 'HALL NUMBER: '.$res['hallnumber'];
                echo '<br>';
                echo 'PERIOD: '.$res['period'];
                echo '<br>';
                echo 'DATE: '.$res['date'];
                echo '<br>';
                echo 'DAY: '.$res['day'];
                echo '<br>';
                echo '<br>';
            }
        }
        else
        {echo 'No Halls booked in G-Block';}
        echo '<br>';
        $db1=mysqli_connect("localhost","root","","jblock");
        $q1="SELECT * from booking where roll_no='$uname'";
        $r1=mysqli_query($db1,$q1);
        $rc1=mysqli_num_rows($r1);
        if($rc1!=0)
        {
            while($res1=mysqli_fetch_array($r1))
            { 
                echo 'HALL NUMBER: '.$res1['hallnumber'];
                echo '<br>';
                echo 'PERIOD: '.$res1['period'];
                echo '<br>';
                echo 'DATE: '.$res1['date'];
                echo '<br>';
                echo 'DAY: '.$res1['day'];
                echo '<br>';echo '<br>';
            }
        }
        else
        {echo 'No Halls booked in J-Block';}
        echo '<br>';
        echo '<a href="cancel.php">Cancel Any Booking?</a>';
        echo '</div>';
    ?>
</html>