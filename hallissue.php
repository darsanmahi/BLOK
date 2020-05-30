<!DOCTYPE html>
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
        .issue input[type='text']{
            text-align: left;
            border: 1.5px solid black;
            padding: 10px 20px 200px 4px;
        }
</style>
<?php
    session_start();    
    $hno=$_SESSION['res'];
    $hno1=$hno['hallnumber'];
    echo '<header class="jumbotron">Your Permanent Class is '.$hno1;
    echo '</header>';
    ?>
    <body>
        <form class='issue' action="issuefile.php" method="POST">
            <a>Enter the Issue you faced</a><br><br>
            <input type='text' name='issue' class='issue' placeholder="Enter the Issue"><br><br>
            <button type='submit' name='issbtn'>Submit Issue</button>
    </body>
    </form>
    <?
?>
</html>