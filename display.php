<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            text-align:center;
            color: white;
            background-color: #212121;
            margin-left: 300px;
        }
        table {
        font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        border-collapse: collapse;
        }
        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }
        .is{
            margin-left: -200px;
            padding: 10px;
        }
    </style>
    <?php
        session_start();
        $lname=$_POST['lab'];
        $_SESSION['lab']=$lname;
        $db2=mysqli_connect("localhost","root","",$lname);
        if(!$db2)
        {echo "CONNECTION FALIED";}
        else
        {
            ?>
            <table style="width:80%">
                <tr>
                    <th>SYSTEM NUMBER</th>
                    <th>NO.OF.ISSUES</th>
                    <th>CURRENT STATUS</th>
                </tr>
            <?php
            $query="select * from systems";
            $result=mysqli_query($db2,$query);
            while($rows=mysqli_fetch_array($result))
            {
                echo '<tr>';
                echo '<td>';
                echo $rows['system_no'];
                echo '</td>';
                echo '<td>';
                echo $rows['issues'];
                echo '</td>';
                echo '<td>';
                echo $rows['current'];
                echo '</td>';
            }
            echo '</table>';
            echo "<form class='is' action='report.php' method='post'>
            <input type='submit' value='Report an Issue' name='issue_btn'>
            </form>";
        }
    ?>
</html>