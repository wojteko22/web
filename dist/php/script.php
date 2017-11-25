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
    print('<p>$a = 3</p>');
    $a = 3;
    print('<p>Wartość gettype($a): ' . gettype($a) . '</p>');
    $a = 'trzy';
    print('<p>$a = "trzy";</p>');
    print('<p>Wartość gettype($a): ' . gettype($a) . '</p>');
    ?>
</details>
<details>
    <summary>Konwersja typów</summary>
    <?php
    print('<p>$b = 3.5</p>');
    $b = 3.5;
    print('<p>Wartość gettype($b): ' . gettype($b) . '</p>');
    print('<p>settype($b, integer)</p>');
    settype($b, 'integer');
    print('<p>Wartość $b: ' . $b . '</p>');
    print('<p>Wartość gettype($b): ' . gettype($b) . '</p>')
    ?>
</details>
<details>
    <summary>Rzutowanie</summary>
    <?php
    print('<p>$c = 3.5</p>');
    $c = 3.5;
    print('<p>Wartość gettype($c): ' . gettype($c) . '</p>');
    print('<p>Wartość (integer) $c: ' . (integer)$c . '</p>');
    print('<p>Wartość $c: ' . $c . '</p>');
    print('<p>Wartość gettype($c): ' . gettype($c) . '</p>')
    ?>
</details>
<details>
    <summary>Operatory</summary>
    <?php
    define("VALUE", 2);
    print('<p>Zdefiniowano stałą VALUE równą ' . VALUE . '</p>');
    print('<p>$d = 3</p>');
    $d = 3;
    print('<p>$d += VALUE</p>');
    $d += VALUE;
    print('<p>Wartość $d: ' . $d . '</p>');
    print('<p>Wartość "3 > 2": ' . (3 > 2) . '</p>');
    print('<p>Wartość "2 + 2 * 2": ' . (2 + 2 * 2) . '</p>');
    ?>
</details>
</body>
</html>