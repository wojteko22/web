<html>
<head>
    <meta charset="utf-8">
    <title>Result of submitting form</title>
</head>
<body>
<?php
$name = $_POST["name"];
$nameOk = preg_match("/^[a-zA-z]+ [a-zA-z]+$/", $name);
if (!$nameOk)
    print("<p>Imię i nazwisko to dwa wyrazy składające się wyłącznie z liter!</p>");
$email = $_POST["email"];
$emailOk = preg_match("/^[a-zA-Z0-9.!#$%&’*+=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/", $name);
if (!$nameOk)
    print("<p>Wprowadzono niepoprawny email :(</p>");
print("<p>BTW, o to trochę możliwości PHP:</p>");
?>
<details>
    <summary>Typowanie dynamiczne</summary>
    <?php
    $x = 3;
    print(
        '<p>Zadeklarowaliśmy i zainicjowaliśmy zmienną: $x = ' . $x . ';</p>');
    print('<p>gettype($x) = ' . gettype($x) . '</p>');
    $x = 'trzy';
    print('<p>$x = "trzy";</p>');
    print('<p>gettype($x) = ' . gettype($x) . '</p>');
    ?>
</details>
</body>
</html>