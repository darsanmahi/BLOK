<!DOCTYPE html>
<html>
    <?php
    $db=mysqli_connect("localhost","root","","hallbookingauthority");
    $hno=$_POST['hno'];
    $iss=$_POST['iss'];
    $q="UPDATE issue set status='rectified' where hallnumber='$hno' and issues='$iss'";
    $r=mysqli_query($db,$q);
    ?>
    <div class="container">
        <div class="row row-content">
            <div class="col-12 offset-3 col-sm-6">
                <p>Status Updated Successfully</p>
            </div>
        </div>
    </div>
    <?php
    ?>
</html>