<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
    <style>
        body{
            background-image: url(jeshoots-com-VdOO4_HFTWM-unsplash.jpg);
            color: white;
            background-repeat: no-repeat;
            background-size: cover;
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
            $iss=array();
            $hno=array();
            $j=0;
            $i=0;
            ?>
            <br><br><br>
            <body>
            <div class="container">
            <?php
            if($rc!=0)
            {
                ?>
                <div class="row offset-2 row-header">
                    <h3>Issues not Rectified:</h3>
                </div>
                <div class="row row-content">
                <?php
                while($res=mysqli_fetch_array($r))
                {
                    ?>
                    <div class="col-12 col-sm-3 offset-2 align-contents-center">
                    <?php
                    echo 'HALL NUMBER: '.$res['hallnumber'];
                    echo '<br>';
                    echo 'ISSUE: '.$res['issues'];
                    echo '<br>';
                    echo '<br>';
                    $iss[$i]=$res['issues'];
                    $i++;
                    $hno[$j]=$res['hallnumber'];
                    $j++;
                    ?>
                    <div class="col-sm-3 align-contents-center">
                    </div>
                    </div>
                    <?php
                }
                $hno=array_unique($hno);
                $r1=mysqli_query($db,$q1);
                echo '</div>';
                ?>
                <form action="hallissrect.php" method="POST">
                    <div class="form-group row">
                        <label for='hno1' class="col-12 col-md-1 offset-2 col-form-label">Hall Number</label>
                        <select id="hno1" name="hno1" class="form-control col-md-3">
                            <?php
                                foreach($hno as $item)
                                {
                                    echo "<option value='$item'>".$item."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for='iss' class="col-12 col-md-1 offset-2 col-form-label">Issue</label>
                        <select id="iss" name="iss" class="form-control col-md-3">
                            <?php
                                foreach($iss as $item)
                                {
                                    echo "<option value='$item'>".$item."</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="btn col-12 offset-2 col-md-5">
                        <button class="btn btn-primary">Rectified</button>
                        <a href="logout.php"><button type="button" class="btn btn-dark btn-md">
                        <i class="fa fa-sign-out"></i> Log Out
                        </button></a>
                    </div>
                </form>
                </body>
                <?php
            }
        }
    ?>
</html>