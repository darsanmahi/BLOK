<!DOCTYPE html>
<html>
<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            background-image: url(./images/lrF7O8.png);
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            margin-top: 220px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .navbar-dark{
            background-color: #191919;
        }
    </style>
    <head>
        <title>Report Issue</title>
    </head>
    <body>
        <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-auto" href="main.html"><img src="./images/3be847d8-395b-4d3b-a493-c75ae865e1b5_200x200.png" height="45" width="42"></a>
                <div class="collapse navbar-collapse" id="Navbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="display.php"><span class="fa fa-keyboard-o"></span> Home</a></li>
                        <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-exclamation fa-lg"></span> Report Issue</a></li>
                    </ul>
                    <span>
                        <a href="logout1.php"><button type="button" class="btn btn-light btn-md">
                        <i class="fa fa-sign-out"></i> Log Out
                        </button></a>
                    </span>
                </div>
            </div>
       </nav>
       <div class="container">
        <div class="row row-content">
            <div class="col-12">
            </div>
        </div>
        <div class="row row-content">
           <div class="col-5 offset-4">
              <h3>Report your Issue</h3>
           </div>
            <div class="col-12 offset-4 col-md-8">
                <form action="report1.php" method="POST">
                    <div class="form-group row">
                        <label for='systemno' class="col-md-3 col-form-label">System Number</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id='systemno' name="systemno" placeholder="System Number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for='issue' class="col-md-3 col-form-label">Issue</label>
                        <div class="col-md-4">
                            <textarea class="form-control" id='issue' name="issue" rows="4" placeholder="Issue"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="btn offset-2">
                            <button class="btn btn-primary" type="submit">Submit Issue</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
       </div>
    </body>
</html>