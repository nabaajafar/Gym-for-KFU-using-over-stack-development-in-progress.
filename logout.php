<?php
session_start();

//if(isset($_SESSION['member_id']))
//{
    session_unset();
    session_destroy();
    header("Location: Homepage.php");
    exit();
//}

?>
