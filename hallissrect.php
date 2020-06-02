<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <style>
        body{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
    </style>
    <?php
    $db=mysqli_connect("localhost","root","","hallbookingauthority");
    $hno=$_POST['hno1'];
    $iss=$_POST['iss'];
    $q="UPDATE issue set status='rectified' where hallnumber='$hno' and issues='$iss'";
    $r=mysqli_query($db,$q);
    if($r)
    {
    ?>
    <body>
        <div class="container">
            <div class="row row-content">
                <div class="col-12 offset-5 col-sm-6">
                    <p>Status Updated Successfully</p>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary" href="hallissuedisp.php"><i class="fa fa-chevron-left"></i> Back</a>
                </div>
            </div>
        </div>
        <?php
        }
        else
        {
            mysqli_error($db);
        }
        ?>
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>