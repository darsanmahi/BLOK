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
            if($per=='morningsession')
            {
                $q1="INSERT into tempfreeperiod(hallnumber,period,date,block) values ('$hno1',1,'$date','$block')";
                $q2="INSERT into tempfreeperiod(hallnumber,period,date,block) values ('$hno1',2,'$date','$block')";
                $q3="INSERT into tempfreeperiod(hallnumber,period,date,block) values ('$hno1',3,'$date','$block')";
                $q4="INSERT into tempfreeperiod(hallnumber,period,date,block) values ('$hno1',4,'$date','$block')";
                $r1=mysqli_query($db1,$q1);
                $r2=mysqli_query($db1,$q2);
                $r3=mysqli_query($db1,$q3);
                $r4=mysqli_query($db1,$q4);
                echo '<p style="text-align=center;margin-top:300px;margin-left:60px">Status of Hall Updated Successfully</p>';
                    ?>
                    <a href="category.php"><input type="submit" class='sub' value="Back"></a>
                    <?php
            }
            elseif($per=='noonsession')
            {
                $q1="INSERT into tempfreeperiod(hallnumber,period,date,block) values ('$hno1',5,'$date','$block')";
                $q2="INSERT into tempfreeperiod(hallnumber,period,date,block) values ('$hno1',6,'$date','$block')";
                $q3="INSERT into tempfreeperiod(hallnumber,period,date,block) values ('$hno1',7,'$date','$block')";
                $q4="INSERT into tempfreeperiod(hallnumber,period,date,block) values ('$hno1',8,'$date','$block')";
                $r1=mysqli_query($db1,$q1);
                $r2=mysqli_query($db1,$q2);
                $r3=mysqli_query($db1,$q3);
                $r4=mysqli_query($db1,$q4);
                echo '<div class="col-12 col-sm-8 align-contents-center">';
                echo '<p>Status of Hall Updated Successfully</p>';
                    ?>
                    <a href="category.php"><input type="submit" class='sub' value="Back"></a>
                    <?php
            }
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
                    <a href="permanentclass.php"><input type="submit" class='sub' value="Back"></a>
                    </div>
                    <?php
                }
            }
        }
    ?>
</html>