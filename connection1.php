<?php
   $error='';
   $success='';
   $db=mysqli_connect("localhost","root","","student");
   if(isset($_POST['username']))
   {
        $uname=$_POST["username"];
   }
   if(isset($_POST['password']))
   {
        $password=$_POST['password'];
   }
   if(isset($_POST['login_btn']))
   {
       $query=mysqli_query($db,"SELECT * from students where username='$uname' && password='$password'");
       $rowcount=mysqli_num_rows($query);
       if($rowcount==true)
       {
           header("Location: display.php");
       }
       else
       {
           $error="INCORRECT CREDENTIALS!!!";
       }
   }

?>