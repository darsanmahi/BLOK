<?php
    session_start();
    unset($_SESSION["usernames"]);
    unset($_SESSION["password"]);
    header("location: login2.php");
?>