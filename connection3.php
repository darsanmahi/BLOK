<?php
    session_start();
    $val=0;
    if(isset($_POST['Block']))
    {
        $bl=$_POST['Block'];
        if($bl=='gblock')
        {
            $val=1;
        }
        if($bl=='jblock')
        {
            $val=2;
        }
        if($bl=='ablock')
        {
            $val=3;
        }
        if($bl=='yblock')
        {
            $val=4;
        }
        $_SESSION['Block']=$bl;
    }
    $_SESSION['val']=$val;
?>