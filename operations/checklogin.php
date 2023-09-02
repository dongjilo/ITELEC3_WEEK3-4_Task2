<?php
session_start();
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];

if ($username<>'' && $password<>''){
    $_SESSION['txtUsername'] = $username;
    $_SESSION['txtPassword'] = $password;
    unset($_SESSION['error']);
    header("Location: ../dashboard.php");
} else {
    $_SESSION['error'] = "Empty Fields. Please try again.";
    header("Location:../login.php");
}