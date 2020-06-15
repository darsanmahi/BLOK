<?php include('connection2.php')
?>
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
<html>
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
  <style>
    @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
    body{
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
      background-image: url(./images/black-ball-point-pen-with-brown-spiral-notebook-733852.jpg);
      background-size:cover;
      background-repeat: no-repeat;
    }
    .row-header{
      margin-top: 20px;
    }
    .error{
      color: black;
    }
  </style>
  <head>
    <title>Login</title>
    <div class="logo">
     <img src="./images/a1b44f98-ca7c-4fd1-915e-13ec5565c21c_200x200.png">
    </div>
  </head>
    <body>
      <div class="container">
        <div class="row row-header">
			<h1>LOGIN</h1>
        </div>
        <div class="row row-content">
            <form action="login2.php" method="post">
				  <div class="form-group row">
				  		<div class="error"><?php echo $error; ?></div>
				  </div>
                  <div class="form-group row">
                    <label for="username" class="col-form-label"><i class="fa fa-user-circle-o"></i> Username</label>
                    <input type="text" id="username" name="username" class="form-control">
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-form-label"><i class="fa fa-key"></i> Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                  </div>
                  <div class="form-group row">
                    <label for='lab' class="col-form-label">Select the Lab</label>
                    <select name='lab' class="form-control" id="lab">
                      <option value='grd'>GRD lab</option>
                      <option value='spl1'>Software Programming Lab-1</option>
                    </select>
                  </div>
                  <div class="btn">
                    <button type="submit" name="login_btn" class="btn btn-primary"> Submit</button>
                  </div>
            </form>
        </div>
      </div>
    </body>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>
