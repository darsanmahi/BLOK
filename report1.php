<!DOCTYPE html>
<html>
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
            $no=$_POST['no'];
            $q="SELECT * from systems where system_no='$no'";
            $r=mysqli_query($db1,$q);
            $res=mysqli_num_rows($r);
            if ($res==0)
            {
                echo 'INVALID SYSTEM NUMBER';
                ?><div class="one"><a href=report.php><input type="submit" value="Back"></a></div><?php
            }
            $query="Insert into problems(issue,system_no) values ('$iname','$no')";
            $query1="UPDATE systems set issues=issues+1 where system_no='$no'";
            $query2="UPDATE systems set current='$iname' where system_no='$no'";
            $result=mysqli_query($db1,$query);
            $result1=mysqli_query($db1,$query1);
            $result2=mysqli_query($db1,$query2);
            if($result)
            {
                echo 'YOUR ISSUE '.$iname.' ON '.$no.' IS UPDATED';
                ?><div class="one"><a href=report.php><input type="submit" value="Back"></a></div><?php
            }
        }
    ?>
</html>