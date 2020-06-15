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
        if($pword=' '){
            ?>
            <script>
                alert("Password Required");
            </script>
            <?php
        }
        else{
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
    }
    if(isset($_POST['rem'])){
        $q1="SELECT * from secretaries where username='$uname' and password='$pword'";
        $res1=mysqli_query($db,$q1);
        $rc=mysqli_num_rows($res1);
        if($rc==0){
            ?>
            <script>
                alert("No Secretaries have been enrolled");
            </script>
            <?php
        }
        else{
        $q="DELETE from secretaries where username='$uname' and password='$pword'";
        $res=mysqli_query($db,$q);
        if($res){
            ?>
            <script>
                alert("User has been removed successfully");
            </script>
            <?php
        }
        }
    }
?>
</html>