<?php
define("SECONDS_TO_EXPIRE", 5 * 60);
$expirationTime = time() + SECONDS_TO_EXPIRE;
$path = "/";

switch ($_POST["style"]) {
    case "classic":
        setcookie("color", "black", $expirationTime, $path);
        setcookie("background-color", "white", $expirationTime, $path);
        setcookie("font-family", "Times New Roman, serif", $expirationTime, $path);
        break;
    case "dark":
        setcookie("color", "white", $expirationTime, $path);
        setcookie("background-color", "black", $expirationTime, $path);
        setcookie("font-family", "Arial, sans-serif", $expirationTime, $path);
        break;
    case "crazy":
        setcookie("color", "pink", $expirationTime, $path);
        setcookie("background-color", "violet", $expirationTime, $path);
        setcookie("font-family", "Luminari, fantasy", $expirationTime, $path);
        break;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Zapisanie ciasteczek</title>
</head>
<body>
<p>Kliknij <a href="../html/index.html">tu</a>, by wrócić do strony głównej</p>
</body>
</html>