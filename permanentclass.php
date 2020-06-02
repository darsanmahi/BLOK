<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            background-image: url(iStock-916563360.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            margin-top: auto;
            padding: 50px 0px 0px 0px;
            color: white;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;            
        }
        .jumbotron{
            background-color: transparent;
        }
        .navbar-dark{
            background-color: #191919;
        }
        .one a{
            color: white;
            font-size: 20px;
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
                        <a class="navbar-brand mr-auto" href="#"><img src="3be847d8-395b-4d3b-a493-c75ae865e1b5_200x200.png" height="45" width="42"></a>
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
                echo '<header class="jumbotron offset-1"><h1>Your Permanent Class is '.$res['hallnumber'];
                echo '</h1>';
                echo '</header>';
                ?>
                <div class="container">
                    <div class="row row-content">
                        <div class="col-12">
                        <form action="cancel1.php" method="POST">
                                <h2>Add Free Periods</h2><br>
                                <div class="form-group row">
                                    <label for="period" class="col-form-label col-12 col-md-1">Period</label>
                                    <div class="col-md-3">
                                        <select name="period" class="form-control">
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
                                </div>
                                <div class="form-group row">
                                    <label for='date' class="col-12 col-md-1 col-form-label">Date</label>
                                    <div class="col-md-3">
                                        <input type="date" class="form-control" id="date" name="date">
                                    </div>
                                </div>
                                <div class="col-12 offset-1 col-sm-4 align-contents-center">
                                    <button class="btn btn-primary" type="submit" name="Enter">Free it</button>
                                </div>
                        </form>
                    </div>
                    <div class="row row-content">
                        <div class="col-12 col-sm-8 one">
                            <br>
                            <a href="hallissue.php">Having any Issues with this Hall<i class="fa fa-question-circle"></i></a>
                        </div>
                    </div>
                    <div class="row row-content">
                        <div class="col-12 col-sm-8 one">
                            <br>
                            <a href="issuereported.php"> Reported Issues!<i class="fa fa-warning"></i></a>
                        </div>
                    </div>
                </div>
            </body>
            <?php
        }
    }
?>
</html>