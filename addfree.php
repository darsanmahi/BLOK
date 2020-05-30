<!DOCTYPE html>
<html>
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
        .sub{
             display: inline-block;
             border-radius: 4px;
             background-color: white;
             border: 2px solid black;
             color: black;
             text-align: center;
             cursor: pointer;
        }
        .sub:hover span:after{
            opacity: 1;
            right:0 ;
        }
    </style>
    <?php
        session_start();
        $hno=$_SESSION['res'];
        $hno1=$hno['hallnumber'];
        if($hno[0]=='G')
        {$block='gblock';}
        elseif($hno[0]=='J')
        {$block='jblock';}
        elseif($hno[0]=='A')
        {$block='ablock';}
        elseif($hno[0]=='Y')
        {$block='yblock';}
        $per=$_POST['period'];
        $date=$_POST['date'];
        $db1=mysqli_connect("localhost","root","","hallbookingauthority");
        if(!$db1)
        {echo 'Connection Falied';}
        else
        {
            $q="INSERT into tempfreeperiod(hallnumber,period,date,block) values ('$hno1','$per','$date','$block')";
            $r1=mysqli_query($db1,$q);
            if(!$r1)
            {echo mysqli_error($db1);}
            else
            {
                echo '<p style="text-align=center;margin-top:300px;margin-left:60px">Status of Hall Updated Successfully</p>';
                ?>
                <a href="category.php"><input type="submit" class='sub' value="Back"></a>
                </div>
                <?php
            }
        }
    ?>
</html>