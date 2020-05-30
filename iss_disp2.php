<!DOCTYPE html>
<html>
<style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            background-image: url(blue-background-bricks-close-up-colors-of-autumn-2096622.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            color: black;
            text-align:center;
            font-size:20px;
            font-weight: 10px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;            
        }
        .notif {
            background-color: #555;
            color: white;
            text-decoration: none;
            padding: 15px 26px;
            position: relative;
            display: inline-block;
            border-radius: 2px;
            margin-top:40px;
            margin-left: 1000px;
        }

        .notif:hover {
            background: white;
        }

        .notif .badge {
            position: absolute;
            top: -10px;
            right: -10px;
            padding: 5px 10px;
            border-radius: 50%;
            background: white;
            color: black;
        }
    </style>
    <head>
        <script src="https://kit.fontawesome.com/574686131c.js"></script>
    </head>
    <?php
        session_start();
        $lname=$_POST['lab'];
        $_SESSION['lab']=$lname;
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
        <a href="iss_disp1.php" class="notif">
            <span>Notifications</span>
            <span class='badge' id="notif_badge"></span>
        </a>
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