<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">

<style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            background-image: url(./images/green-leaf-plant-in-white-flower-pot-1022923.jpg);
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
    <head>
        <title>System Issues</title>
    </head>
    <?php
        session_start();
        $lname=$_SESSION['lab'];
        $db1=mysqli_connect("localhost","root","",$lname);
        $name=$_POST['systemno'];
        if(!$db1)
        {echo "CONNECTION FAILED!";}
        else
        {
            $q1="SELECT * from problems where system_no='$name'";
            $r1=mysqli_query($db1,$q1);
            $rc1=mysqli_num_rows($r1);
            if($rc1==0)
            {echo 'INVALID SYSTEM NUMBER ENTERED';}
            else
            {
                $query="DELETE from problems where system_no='$name'";
                $query1="UPDATE systems set issues=issues-1 where system_no='$name'";
                $query2="UPDATE systems set current='Working' where system_no='$name' ";
                $result=mysqli_query($db1,$query);
                $result1=mysqli_query($db1,$query1);
                $result2=mysqli_query($db1,$query2);
                echo 'THE ISSUE ON '.$name.' IS RECTIFIED';
            }
        }
    ?>
    <a href="iss_disp1.php"><button type="submit" class="btn btn-primary" id="btn"><i class="fa fa-chevron-left"></i> Back</button></a>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>