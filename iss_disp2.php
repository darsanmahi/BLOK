<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
<style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            background-image: url(blue-background-bricks-close-up-colors-of-autumn-2096622.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            padding: 50px 0px 0px 0px;
            text-align:center;
            font-weight: 10px;
            margin-top: 10px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;            
        }
        .navbar-dark{
            background-color: #191919;
        }
    </style>
    <head>
        <script src="https://kit.fontawesome.com/574686131c.js"></script>
    </head>
    <?php
        session_start();
        $lname=$_SESSION['lab'];
        $db1=mysqli_connect("localhost","root","",$lname);
        if(!$db1)
        {echo 'CONNECTION FAILED';}
        else
        {
            $q1="SELECT * from problems";
            $r=mysqli_query($db1,$q1);
            $rc=mysqli_num_rows($r);
    ?>
    <body>
        <div class="container">
            <div class="btn btn-group offset-9 align-content-end">
                <a href="iss_disp1.php" class="btn btn-primary">
                    <span>Notifications</span>
                    <span class='badge' id="notif_badge"></span>
                </a>
                <a href="logout2.php" class="btn btn-warning"><i class="fa fa-sign-out"></i>Log Out</a>
            </div>
        </div>
        <script type="text/javascript">
        function loadDoc() {
            setInterval(function(){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("notif_badge").innerHTML =
                this.responseText;
            }
        };
            xhttp.open("GET", "fetch.php", true);
            xhttp.send();
            },1000)
        }
        loadDoc();
        </script>
        <div class="name">
            <p style="text-align:center;font-size:40px;color:white;margin-top:200px">Welcome to Issue Rectifying Page of <?php echo $lname; ?></a>
        </div>
    </body>
    <?php
        }
    ?>
</html>