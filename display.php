<!DOCTYPE html>
<html>
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            padding:50px 0px 0px 0px;
            text-align:center;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .navbar-dark{
            background-color: #191919;
        }
    </style>
    <head>
         <title>Check Status</title>
     </head>
    <?php
        session_start();
        $lname=$_SESSION['lab'];
        $db2=mysqli_connect("localhost","root","",$lname);
        if(!$db2)
        {echo "CONNECTION FALIED";}
        else
        {
            ?>
            <body>
                <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <a class="navbar-brand mr-auto" href="#"><img src="./images/3be847d8-395b-4d3b-a493-c75ae865e1b5_200x200.png" height="45" width="42"></a>
                        <div class="collapse navbar-collapse" id="Navbar">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-keyboard-o"></span> Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="report.php"><span class="fa fa-exclamation fa-lg"></span> Report Issue</a></li>
                            </ul>
                            <span>
                                <a href="logout1.php"><button type="button" class="btn btn-light btn-md">
                                <i class="fa fa-sign-out"></i> Log Out
                                </button></a>
                            </span>
                        </div>
                    </div>
                </nav>
                <header class="jumbotron">
                    <h2>STATUS CHECKING PAGE OF <?php echo $lname; ?></h2>
                </header>
                <div class="row row-content">
                    <div class="col-12 offset-3 col-sm-6">
                        <h3>&nbsp;Status of the Systems</h3>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>SYSTEM NUMBER</th>
                                        <th>NO.OF.ISSUES</th>
                                        <th>CURRENT STATUS</th>
                                    </tr>
                                </thead>
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
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</body>';
        }
    ?>
</html>