<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header('Location: ../login.php');
    }else{
        if($_SESSION['role_name']!='admin'){
            header('Location: ../login.php');
        }
    }
?>