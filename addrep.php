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
    if(isset($_POST['classcode'])){
        $cc=$_POST['classcode'];
    }
    if(isset($_POST['reg'])){
        if($pword==' '){
            ?>
            <script>
                alert("Password Required");
            </script>
            <?php
        }
        else{
            $q="INSERT into representative(username,password,class_code) values ('$uname','$pword','$cc')";
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
        $q1="SELECT * from representative where username='$uname'";
        $res1=mysqli_query($db,$q1);
        $rc=mysqli_num_rows($res1);
        if($rc==0){
            ?>
            <script>
                alert("No representative have been enrolled");
            </script>
            <?php
        }
        else{
        $q="DELETE from representative where username='$uname'";
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