<?php
/**
 * Created by IntelliJ IDEA.
 * User: Dawid
 * Date: 03/12/2017
 * Time: 21:33
 */

$passwords = array("dawid" => "ptakiLatajaKluczem", "wojtek" => "okon");

define("SECONDS_TO_EXPIRE", 25 * 60);
$expirationTime = time() + SECONDS_TO_EXPIRE;
$path = "/";
session_start();

if (!isset($_POST["login"]) || !isset($_POST["password"])) {
    header("Location: ../html/login-panel.php");
    exit();
}

$login = $_POST["login"];
$password = $_POST["password"];

$loginSuccessful = false;

if(array_key_exists($login, $passwords))
    $loginSuccessful = $passwords[$login] == $password;

$_SESSION['loginSuccessful'] = $loginSuccessful;

if ($loginSuccessful) {
    $_SESSION['userLogin'] = $login;
    header('Location: ../html/memes.php');
}
else {
    $_SESSION['errorMessage'] = "Nieprawidłowy login lub hasło";
    header("Location: ../html/login-panel.php");
}