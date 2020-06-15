<?php include('connection.php')
?>
<!DOCTYPE html>
<html>
  <meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
  <style>
    @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
    body{
      margin: 0;
      padding: 0;
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
      background-image: url(./images/wall-clock-at-5-50-707582.jpg);
      background-size:cover;
      background-repeat: no-repeat;
    }
    .box{
      width: 400px;
      padding: 40px;
      position: absolute;
      top: 50%;
      left: 35%;
      transform: translate(-50%,-50%);
      background: #191919;
      border-radius: 24px;
      text-align: center;
    }
    .box h1{
      color: white;
      text-transform: uppercase;
      margin-bottom: white;
      text-align: left;
      font-weight: 500;
    }
    .box input[type = "text"],.box input[type = "password"]{
      border:0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align:center;
      border: 2px solid #3498db;
      padding: 14px 10px;
      width: 200px;
      outline: none;
      color: white;
      border-radius: 24px;
      transition: 0.25s;
    }
    .box input[type = "text"]:focus,.box input[type = "password"]:focus{
      width: 280px;
      border-color: #2ecc71;
    }
    .box button[type = "submit"]{
      border:0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border: 2px solid #2ecc71;
      padding: 14px 40px;
      outline: none;
      color: white;
      border-radius: 24px;
      transition: 0.25s;
      cursor: pointer;
    }
    .box button[type = "submit"]:hover{
      background: #2ecc71;
    }  
    .error{
      color: white;
    }
    i{
      color: white;
    }
  </style>
  <head>
    <title>َLOGIN</title>
    <div class="logo">
     <img src="./images/a1b44f98-ca7c-4fd1-915e-13ec5565c21c_200x200.png">
    </div>
  </head>
    <body>
        <form class="box" action="login1.php" method="post">
            <h1>Login</h1><div class="error"><?php echo $error; ?></div>
            <input type="text" name="usernames" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="login_btn" class='btn' >LET ME IN</button>
        </form>
    </body>
</html>
