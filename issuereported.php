<!DOCTYPE html>
<html>
    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            /*background-image: url(green-leaf-plant-in-white-flower-pot-1022923.jpg);*/
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
        $hno=$_SESSION['res'];
        $hno1=$hno['hallnumber'];
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
        }
    ?>
</html>