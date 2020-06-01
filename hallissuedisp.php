<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
    <style>
        body{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
        }
    </style>
    <?php
        $db=mysqli_connect("localhost","root","","hallbookingauthority");
        if(!$db)
        {echo 'Connection Failed';}
        else
        {
            $q="SELECT * from issue where status='unrectified'";
            $q1="SELECT * from issue where status='unrectified'";
            $r=mysqli_query($db,$q);
            $rc=mysqli_num_rows($r);
            ?>
            <br><br><br>
            <div class="container">
            <?php
            if($rc!=0)
            {
                ?>
                <div class="row row-header">
                    <h3>Issues not Rectified:</h3>
                </div>
                <div class="row row-content">
                <?php
                while($res=mysqli_fetch_array($r))
                {
                    ?>
                    <div class="col-12 col-sm-3 align-contents-center">
                    <?php
                    echo 'HALL NUMBER: '.$res['hallnumber'];
                    echo '<br>';
                    echo 'ISSUE: '.$res['issues'];
                    echo '<br>';
                    echo '<br>';
                    ?>
                    <div class="col-sm-3 align-contents-center">
                    </div>
                    </div>
                    <?php
                }
                $r1=mysqli_query($db,$q1);
                ?>
                </div>
                </div>
                <form action="hallissrect.php" method="POST">
                    <div class="form-group row">
                        <label for='hno' class="col-12 offset-2 col-md-1 col-form-label">Hall Number</label>
                        <div class="col-md-3">
                            <input type="text" name='hno' id="hno" class="form-control" placeholder="Hall Number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for='iss' class="col-12 offset-2 col-md-1 col-form-label">Issue</label>
                        <div class="col-md-3">
                            <input type='text' name='iss' id="iss" class="form-control" placeholder="Issue">
                        </div>
                    </div>
                    <div class="btn col-12 offset-1 col-md-5">
                        <button class="btn btn-primary">Rectified</button>
                    </div>
                </form>
                <?php
            }
        }
    ?>
</html>