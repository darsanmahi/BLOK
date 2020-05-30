<!DOCTYPE html>
<html>
    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            background-image: url(background-blurred-1587.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            text-align:center;
            margin-top: auto;
            font-size:20px;
            font-weight: 10px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;            
        }
        .book{
            border: 2px solid;
            padding: 1px 1px;
            width: 100px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s; 
            margin-left: 720px;
        }
    </style>
    <?php
        if(isset($_POST['Enter']))
        {
            header("location: display1.php");
        }
    ?>
</html>