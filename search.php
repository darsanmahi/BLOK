<?php include('conn1.php');
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            background-image: url(blur-calm-waters-dawn-daylight-395198.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .logo{
            float: right;
            margin-top: -100px;
        }
        .major{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin-left: 450px;
            margin-top: 100px;
        }
        .major a {
            font-size: 25px;
            color: black;
            margin-top: 50px;
        }
        .sample{
            margin-left: 25px;
        }
        .major input{
            margin-left: 20px;
            width: 200px;
            border-color:#3498db;
            border-radius: 24px;
            padding: 10px;
            margin-top: 40px;
        }
        .buttn{
            cursor: pointer;
        }
        .sample1{
            font-size: 25px;
            margin-left: 50px;
        }
        </style>
    <head>
        <title>َHALL BOOKING PAGE</title>
        <div class="logo">
            <img src="a1b44f98-ca7c-4fd1-915e-13ec5565c21c_200x200.png">
        </div>
    </head>
    <body>
        <form class="major" action="display1.php" method="POST">
            <div class="sample1">
                <label for="Block">Select the block:</label>
                <select name="Block">
                    <option value="gblock">G-Block</option>
                    <option value="jblock">J-Block</option>
                    <option value="ablock">A-Block</option>
                    <option value="yblock">Y-Block</option>
                </select>
            </div>
            <a>Enter the period number</a>
            <input type="number" name="pno" placeholder="Period Number">
            <br>
            <div class="sample">
                <a>Enter the day</a>
                <input type="day" name="day" placeholder="Day"><br>
                <a>Enter the date</a>
                <input type="date" name="date" placeholder="Date"><br>
                <a>Enter your Class Code</a>
                <input type='text' name='class' placeholder="Class"><br>
                <a>Enter staff name</a>
                <input type='text' name='Staff_name' placeholder="Staff Name"><br>
            </div>
            <div class="col-12 offset-2 col-sm-4 align-contents-center">
                <input type="submit" name="Enter" value="ENTER">
            </div>
        </form>
    </body>
</html>