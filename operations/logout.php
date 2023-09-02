<?php
session_start();
if (!empty($_SESSION['txtUsername']) && !empty($_SESSION['txtPassword'])){
    unset($_SESSION['txtUsername']);
    unset($_SESSION['txtPassword']);
    header("location: ../login.php");
}
