<?php
        session_start();
        $lname=$_SESSION['lab'];
        $db1=mysqli_connect("localhost","root","",$lname);
        if(!$db1)
        {echo 'CONNECTION FAILED';}
        else
        {
            $q1="SELECT * from problems";
            $r=mysqli_query($db1,$q1);
            $rc=mysqli_num_rows($r);
            echo $rc;
        }
    ?>