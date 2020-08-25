<?php include('conn1.php')?>
<!DOCTYPE html>
<html>
    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            background-image: url(classroom.jpg);
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background-repeat: no-repeat;
            background-size: cover;
            height: 200%;
            font-size: 30px;
        }
        .halls{
            text-align: center;
            margin-top: -100px;
            margin-left: 500px;
        }
        .type1{
            margin-left: -550px;
            margin-top: 100px;
            font-size: 30px;
        }
        .type2{
            margin-left: -550px;
        }
        .type3{
            margin-left: -550px;
        }
        .type4{
            margin-left: -550px;
        }
        .type1 button[type = "submit"]{
            border:0;
            font-size: 30px;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px transparent;
            padding: 14px 40px;
            outline: none;
            color: black;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
        }
        .type4 button[type = "submit"]{
            border:0;
            font-size: 30px;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px transparent;
            padding: 14px 40px;
            outline: none;
            color: black;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
        }
        .type2 button[type = "submit"]{
            border:0;
            font-size: 30px;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px transparent;
            padding: 14px 40px;
            outline: none;
            color: black;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
        }
        .type3 button[type = "submit"]{
            border:0;
            font-size: 30px;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px transparent;
            padding: 14px 40px;
            outline: none;
            color: black;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
        }
    </style>
    <head>
        <title>Hall Booking System</title>
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="a1b44f98-ca7c-4fd1-915e-13ec5565c21c_200x200.png">
            </div>
                    <form class='halls' action="search.php" method="post">
                        <div class=type1>
                            <button type="submit" name="Gblock" class="btn">G-Block</button>
                        </div>
                        <div class=type2>
                            <button type="submit" name="Ablock" class="btn">A-Block</button>
                        </div>
                        <div class=type3>
                            <button type="submit" name="Jblock" class="btn">J-Block</button>
                        </div>
                        <div class=type4>
                            <button type="submit" name="Yblock" class="btn">Y-Block</button>
                        </div>
    </form>
        </header>
    </body>
</html>