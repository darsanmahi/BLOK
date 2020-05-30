<!DOCTYPE html>
<html>
<style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            /*background-image: url(green-leaf-plant-in-white-flower-pot-1022923.jpg);*/
            background-repeat: no-repeat;
            background-size: cover;
            color: black;
            text-align:center;
            font-size:20px;
            font-weight: 10px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;            
        }
    </style>
    <head>
        <script src="https://kit.fontawesome.com/574686131c.js"></script>
    </head>
    <?php
        session_start();
        $lname=$_SESSION['lab'];
        echo 'THE LAB: '.$lname;
        $db1=mysqli_connect("localhost","root","",$lname);
        if(!$db1)
        {echo "CONNECTION FAILED";}
        else
        {
            ?>
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
                <form action='iss_rect1.php' method='post'>
                    <a>System number</a>
                    <input type='text' placeholder="System Number" name='m1'>
                    <input type='submit' value='Rectified' name='rect_btn'>
                </form>
                <?php
            }
            else
            {
                echo 'No issues have been reported recently';
            }
        }
    ?>
</html>