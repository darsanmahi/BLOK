<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .main a{
            color: black;
            font-size: 20px;
        }
        .one button{
            font-size:20px;
        }
        .jumbotron{
            background-color: #343a40;
            color: white;
        }
    </style>
    <body>
        <header class="jumbotron">
            <h2>BLOK-The Digital Hall Booking System</h2>
        </header>
        <div class="container">
            <div class="row row-content">
                <div class='col-5 offset-3 main align-content-end'>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-chevron-left"></i><a href='booking_display.php'> My Bookings</a></li>
                        <li><i class="fa fa-book"></i> <a href='search.php'> Book New Hall</a></li>
                        <li><i class="fa fa-id-card"></i> <a href="permanentclass.php"> Your Permanent Class</a></li>
                    </ul>
                    <br>
                </div>
                <div class='col-5 offset-3 one align-content-end'>
                    <a href="logout.php"><button type="button" class="btn btn-default btn-md">
                    <i class="fa fa-sign-out"></i> Log Out
                    </button></a>
                </div>
            </div>
        </div>
    </body>
</html>