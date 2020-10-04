<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('Location: ../index.php');
        exit();
    }
    else{
        session_unset();
        session_destroy();
        header('Location: ../');
    }
?>