<?php
/**
 * Created by IntelliJ IDEA.
 * User: Dawid
 * Date: 03/12/2017
 * Time: 21:33
 */

$logins = array("dawid", "wojtek");
$passwords = array("ptaki", "okon");

define("SECONDS_TO_EXPIRE", 25 * 60);
$expirationTime = time() + SECONDS_TO_EXPIRE;
$path = "/";
session_start();
setcookie("SID", session_id(), $expirationTime, $path);

if (!isset($_POST["login"]) || !isset($_POST["password"])) {
    header("Location: ../html/login-panel.php");
    exit();
}

$login = $_POST["login"];
$password = $_POST["password"];

$loginSuccessful = false;

for ($i = 0; $i < count($logins) && !$loginSuccessful; $i++)
    $loginSuccessful = ($logins[$i] == $login && $passwords[$i] == $password);

$_SESSION['loginSuccessful'] = $loginSuccessful;

if ($loginSuccessful) {
    $_SESSION['userLogin'] = $login;
    header('Location: ../html/memes.php');
}
else {
    $_SESSION['errorMessage'] = "Nieprawidłowy login lub hasło";
    header("Location: ../html/login-panel.php");
}