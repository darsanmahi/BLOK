<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            background-image: url(cement-color-concrete-design-1260727.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            font-size: 20px;
            margin-top: 0px;
        }
        .main{
            width: 300px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: 40px;
            transform: translate(-50%,-50%);
            background: #191919;
            border-radius: 12px;
            text-align: center;
        }
        .main a{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            color: white;
            font-size: 20px;
        }
        .one{
            margin-top: 520px;
        }
    </style>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class='one'>
            <a href="logout.php"><button type="button" class="btn btn-default btn-md">
          <span class="glyphicon glyphicon-log-out"></span> Log Out
        </button></a>
        </div>
        <div class='main'>
            <a href='booking_display.php'>My Bookings</a><br>
            <a href='search.php'>Book New Hall</a><br>
            <a href="permanentclass.php">Your Permanent Class</a>
        </div>
    </body>
</html>