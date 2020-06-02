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
</html>