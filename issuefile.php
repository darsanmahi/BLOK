<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
<html>
    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            /*background-image: url(green-leaf-plant-in-white-flower-pot-1022923.jpg);*/
            background-repeat: no-repeat;
            background-size: cover;
            color: black;
            margin-top: auto;
            font-size:20px;
            text-align: center;
            font-weight: 10px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;            
        }
        a{
            text-decoration: none;
            display: inline-block;
            padding: 8px 16px;
        }
        a:hover {
            background-color: #ddd;
            color: black;
        }
        .previous {
            background-color: black;
            color: white;
        }
</style>
<?php
    session_start();
    $hno=$_SESSION['res'];
    $hno1=$hno['hallnumber'];
    $st='unrectified';
    echo '<header class="jumbotron">Your Permanent Class is '.$hno1;
    echo '</header>';
    $issue=$_POST['issue'];
    $db1=mysqli_connect("localhost","root","","hallbookingauthority");
    if(!$db1)
    {echo 'Connection Failed';}
    else
    {
        $q="INSERT into issue(hallnumber,issues,status) values ('$hno1','$issue','$st')";
        if(!mysqli_query($db1,$q))
        {echo mysqli_error($db1);}
        else
        {
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-12 offset-3 col-sm-6 align-items-center">
                        <p>Your Issue has been reported succesfully</p>
                        <a href="permanentclass.php" class="previous">&laquo; Go Back</a>
                    </div>
                </div>
            </div>
            <?php
        }
    }
?>
</html>