<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
<style>
    @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
    body{
        background-image: url(blur-calm-waters-dawn-daylight-395198.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        padding: 100px;
    }
    .major{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .major a {
            font-size: 25px;
            color: black;
        }
        .major input{
            width: 200px;
            border-color:#3498db;
            border-radius: 16px;
            padding: 10px;
            margin-top: 30px;
        }
        .button{
            cursor: pointer;
        }
        .sample1{
            font-size: 25px;
            margin-top: 50px;
        }
        .navbar-dark{
            background-color: #191919;
        }
</style>
<head>
    <title>Cancel Booking</title>
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-auto" href="#">BLOK</a>
                    <div class="collapse navbar-collapse" id="Navbar">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link" href="category.php"><i class="fa fa-home"></i> Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="search.php"><i class="fa fa-book"></i> Book New Hall</a></li>
                            <li class="nav-item active"><a class="nav-link" href="booking_display.php"><i class="fa fa-chevron-left"></i> Previous Bookings</a></li>
                            <li class="nav-item"><a class="nav-link" href="permanentclass.php"><i class="fa fa-id-card"></i> Permanent Class</a></li>
                        </ul>
                    </div>
            </div>
        </nav>
    <form class="major" action="cancel1.php" method="POST">
        <div class="container">
            <div class="row row-content">
                <div class="col-12 offset-3 col-sm-8 align-contents-center">
                    <div class="sample1">
                        <label for="Block">Select the block:</label>
                        <select name="Block">
                            <option value="gblock">G-Block</option>
                            <option value="jblock">J-Block</option>
                            <option value="ablock">A-Block</option>
                            <option value="yblock">Y-Block</option>
                        </select>
                        <br>
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
                    <div class="col-12 offset-2 col-sm-4">
                        <input type="submit" name="Enter" value="ENTER">
                    </div>
                </div>
            </div>
        <div>
    </form>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
