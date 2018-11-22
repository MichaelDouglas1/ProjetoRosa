<?php
session_start();

if(!$_SESSION['Email']){
    header('Location:index.php');
    exit();
}
?>