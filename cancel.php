<!DOCTYPE html>
<html>
<style>
    @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
    body{
        background-image: url(blur-calm-waters-dawn-daylight-395198.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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
        .button{
            margin-left: 150px;
            margin-top: 50px;
            cursor: pointer;
        }
        .sample1{
            font-size: 25px;
            margin-left: 50px;
        }
</style>
<head>
    <title>Cancel Booking</title>
</head>
<body>
    <form class="major" action="cancel1.php" method="POST">
            <div class="sample1">
                <label for="Block">Select the block:</label>
                <select name="Block">
                    <option value="gblock">G-Block</option>
                    <option value="jblock">J-Block</option>
                    <option value="ablock">A-Block</option>
                    <option value="yblock">Y-Block</option>
                </select>
            </div>
            <a>Enter the hall number</a>
            <input type="text" name="hno" placeholder="Hall Number">
            <br>
            <div class="sample">
                <a>Enter the period number</a>
                <input type="number" name="pno" placeholder="Period Number"><br>
                <a>Enter the date</a>
                <input type="date" name="date" placeholder="Date"><br>
                
            </div>
            <div class="button">
                <input type="submit" name="Enter" value="ENTER">
            </div>
        </form>
    </body>
</html>
</body>
