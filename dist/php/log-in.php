<?php
session_start();

if (!isset($_POST["login"]) || !isset($_POST["password"])) {
    header("Location: ../html/login-panel.php");
    exit();
}

$login = $_POST["login"];
$password = $_POST["password"];

$loginSuccessful = false;

if (!($conn = mysqli_connect("localhost", "rusoko", "abc123")))
    die("<p>Connection failed: " . $conn->connect_error . "</p>");

if (!mysqli_select_db($conn, "data"))
    die("<p>Error opening data database: " . mysqli_error($conn) . "</p>");

$sql = "SELECT password FROM people WHERE login = '$login'";

if (!($result = mysqli_query($conn, $sql)))
    die("<p>Error executing query: " . mysqli_error($conn) . "</p>");

mysqli_close($conn);
$row = mysqli_fetch_row($result);
$realPassword = $row[0];

$loginSuccessful = $password == $realPassword;

if ($loginSuccessful) {
    $_SESSION['userLogin'] = $login;
    $destination = $_SESSION['destination'];
    header("Location: $destination");
} else {
    $_SESSION['errorMessage'] = "Nieprawidłowy login lub hasło";
    header("Location: ../html/login-panel.php");
}