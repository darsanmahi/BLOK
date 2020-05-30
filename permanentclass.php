<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
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
        .add input[type='date'],input[type='number']{
            border-radius: 8px;
            padding: 8px 4px 10px;
        }
        .add button[type="submit"]{
            background-color: white;
            color: black;
            text-align: center;
            border: 2px solid black;
            padding: 4px 12px;
        }
        .add button[type="submit"]:hover{
            background-color: gray;
            transition: 0.35s;
            opacity: 1;
        }
        .one1 a{
            text-decoration: none;
            display: inline-block;
            padding: 8px 16px;
        }
        .one1 a:hover {
            background-color: #ddd;
            color: black;
            transition: 0.5s;
        }
        .previous {
            background-color: black;
            color: white;
        }
    </style>
<?php
    session_start();
    $uname=$_SESSION['usernames'];
    $db1=mysqli_connect("localhost","root","","hallbookingauthority");
    if(!$db1)
    {echo 'Connection Failed';}
    else
    {
        $q="SELECT hallnumber from permanentclass where class_code=(SELECT class_code from representative where username='$uname')";
        $r=mysqli_query($db1,$q);
        $res=mysqli_fetch_assoc($r);
        $_SESSION['res']=$res;
        if(!$r)
        {echo mysqli_error($db1);}
        else
        {
            echo '<header class="jumbotron">Your Permanent Class is '.$res['hallnumber'];
            echo '</header>';
            ?>
            <body>
                <div class="container">
                    <div class="row row-content">
                        <div class="col-12 offset-10 col-sm-3 align-content-right">
                            <a href="issuereported.php">Issues reported</a>
                        </div>
                        <div class="col-12">
                            <h2>Add Free Periods</h2><br>
                            <form class="add" action='addfree.php' method="POST">
                                <a>Enter the date </a>
                                <input type='date' name='date' placeholder="Date"><br><br>
                                <a>Enter the period </a>
                                <div class="sample1">
                                <label for="period"></label>
                                <select name="period">
                                    <option value="morningsession">Entire Morning Session</option>
                                    <option value="noonsession">Entire Noon Session</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                                </div>
                                <br>
                                <button type="submit">Free it</button>
                            </form>
                            <br>
                            <div class='one1'>
                                <a href="hallissue.php">Having Any Issues in this Hall?</a><br><br>
                                <a href="category.php" class="previous">&laquo; Go Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </body>
            <?php
        }
    }
?>
</html>