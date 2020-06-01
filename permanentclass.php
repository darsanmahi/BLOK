<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            /*background-image: url(green-leaf-plant-in-white-flower-pot-1022923.jpg);*/
            background-repeat: no-repeat;
            background-size: cover;
            color: black;
            margin-top: auto;
            padding: 50px 0px 0px 0px;
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
        .navbar-dark{
            background-color: #191919;
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
            ?>
            <body>
                <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-brand mr-auto" href="#">BLOK</a>
                        <div class="collapse navbar-collapse" id="Navbar">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item"><a class="nav-link" href="category.php"><i class="fa fa-home"></i> Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="search.php"><i class="fa fa-book"></i> Book New Hall</a></li>
                                <li class="nav-item"><a class="nav-link" href="booking_display.php"><i class="fa fa-chevron-left"></i> Previous Bookings</a></li>
                                <li class="nav-item active"><a class="nav-link" href="#"><i class="fa fa-id-card"></i> Permanent Class</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <?php
                echo '<header class="jumbotron"><h4>Your Permanent Class is '.$res['hallnumber'];
                echo '</h4>';
                echo '</header>';
                ?>
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