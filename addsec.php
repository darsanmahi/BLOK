<!DOCTYPE html>
<html>
<?php
    $db=mysqli_connect("localhost","root","","hallbookingauthority");
    if(isset($_POST['username'])){
        $uname=$_POST['username'];
    }
    if(isset($_POST['password'])){
        $pword=$_POST['password'];
    }
    if(isset($_POST['clubname'])){
        $cc=$_POST['clubname'];
    }
    if(isset($_POST['reg'])){
        $q="INSERT into secretaries(username,password,club_name) values ('$uname','$pword','$cc')";
        $res=mysqli_query($db,$q);
        if($res){
            ?>
            <script>
                alert("User has been added successfully");
            </script>
            <?php
        }
    }
?>
</html>