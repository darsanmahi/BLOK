<?php
   $error='';
   $success='';
   $db=mysqli_connect("localhost","root","","labassistant");
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
       $query=mysqli_query($db,"SELECT * from loginh where l_id='$uname' && password='$password'");
       $rowcount=mysqli_num_rows($query);
       if($rowcount==true)
       {
           header("Location: iss_disp.php");
       }
       else
       {
           $error="INCORRECT CREDENTIALS!!!";
       }
   }

?>