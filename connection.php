<?php
   session_start();
   $error='';
   $success='';
   $db=mysqli_connect("localhost","root","","hallbookingauthority");
   if(isset($_POST['usernames']))
   {
        $uname=$_POST["usernames"];
        $_SESSION['usernames']=$uname;
   }
   if(isset($_POST['password']))
   {
        $password=$_POST['password'];
   }
   if(isset($_POST['login_btn']))
   {
       $query=mysqli_query($db,"SELECT * from representative where username='$uname' && password='$password'");
       $rowcount=mysqli_num_rows($query);
       if($rowcount==true)
       {
           header("Location: category.php");
       }
       else
       {
           $q1=mysqli_query($db,"SELECT * from logininfoh where username='$uname' && password='$password'");
           $rc=mysqli_num_rows($q1);
           if($rc==true)
           {
               header("Location: hallissuedisp.php");
           }
           else
           {
                $q1=mysqli_query($db,"SELECT * from secretaries where username='$uname' && password='$password'");
                $rc=mysqli_num_rows($q1);
                if($rc==true)
                {
                    header("Location: category1.php");
                }
                else
                {
                    $error="INCORRECT CREDENTIALS";
                }
           }
       }
   }

?>