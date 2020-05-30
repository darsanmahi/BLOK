<!DOCTYPE html>
<html>
    <style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            background-image: url(abstract-art-black-background-blur-1040499.jpg);
            text-align: center;
            font-size: 15px;
            background-size:cover;
            background-repeat: no-repeat;
            color: white;
        }
        .sam{
            margin-top: 350px;
            padding:10px;
        }
        .no{
            padding: 2px;
            border: white;
        }
        .issue{
            padding: 2px;
            margin-top: 10px;
        }
        .btn{
            margin-top: 10px;
            border: 1px solid;
            color: white;
        }
        .btn:hover{
            background:white;
        }
    </style>
    <form class='sam' action='report1.php' method='post'>
        <a>Enter the System Number</a>
        <input type='text' class='no' placeholder="System Number" name='no'><br>
        <a>Enter the issue</a>
        <input type='text' class='issue' placeholder="issue" name='issue'><br>
        <input type='submit' class='btn' name='rep_btn' value='SUBMIT'>
    </form>
</html>