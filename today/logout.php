<?php

session_start();

if(!isset($_SESSION['username'])){
    header('Location: login.php');
}

session_destroy();
header("Location: login.php")
?>