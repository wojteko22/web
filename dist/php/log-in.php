<?php
session_start();
$passwords = array("dawid" => "ptakiLatajaKluczem", "wojtek" => "okon");

if (!isset($_POST["login"]) || !isset($_POST["password"])) {
    header("Location: ../html/login-panel.php");
    exit();
}

$login = $_POST["login"];
$password = $_POST["password"];

$loginSuccessful = false;

if(array_key_exists($login, $passwords))
    $loginSuccessful = $passwords[$login] == $password;

if ($loginSuccessful) {
    $_SESSION['userLogin'] = $login;
    $destination = $_SESSION['destination'];
    header("Location: $destination");
}
else {
    $_SESSION['errorMessage'] = "Nieprawidłowy login lub hasło";
    header("Location: ../html/login-panel.php");
}