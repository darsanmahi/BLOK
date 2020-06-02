<!DOCTYPE html>
<html>
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
<style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            padding: 80px 0px 0px 0px;
            text-align:center;
            font-weight: 10px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;            
        }
        .navbar-dark{
            background-color: #191919;
        }
    </style>
    <?php
        session_start();
        $lname=$_SESSION['lab'];
        $db1=mysqli_connect("localhost","root","",$lname);
        if(!$db1)
        {echo "CONNECTION FAILED";}
        else
        {
            ?>
            <body>
            <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-brand mr-auto" href="main.html">BLOK</a>
                        <div class="collapse navbar-collapse" id="Navbar">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item"><a class="nav-link" href="iss_disp2.php"><span class="fa fa-keyboard-o"></span> Home</a></li>
                                <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-exclamation fa-lg"></span> Rectify Issue</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            <?php
            $query='SELECT * FROM problems';
            $result=mysqli_query($db1,$query);
            $rowcount=mysqli_num_rows($result);
            if($rowcount>0)
            {
                while($rows=mysqli_fetch_array($result))
                {
                    echo "SYSTEM NUMBER: ";
                    echo $rows['system_no'];
                    echo '<br>';
                    echo "NAME OF THE ISSUE: ";
                    echo $rows['issue'];
                    echo '<br>';
                    echo '<br>';
                }
                ?>
                <div class="container">
                    <div class="row row-content">
                        <div class="col-12 col-md-9">
                            <form action='iss_rect1.php' method='POST'>
                                <div class="form-group row">
                                    <label for='systemno' class="offset-5 col-md-3 col-form-label">System Number</label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" id='systemno' name='systemno' placeholder="System Number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <button type="submit" class="offset-7 btn btn-success">Rectfifed</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
            }
            else
            {
                echo 'No issues have been reported recently';
            }
            echo '</body>';
        }
    ?>
</html>