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
print("<p>BTW, oto trochę możliwości PHP:</p>");
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
<details>
    <summary>Tablice</summary>
    <?php
    $keepers = array("Szczęsny", "Fabiański", "Boruc");
    print('<p>Iteracja po tablicy indeksowanej numerycznie:</p>');
    for ($i = 0; $i < count($keepers); ++$i) {
        $j = $i + 1;
        print("<p>Bramkarz nr $j to $keepers[$i]</p>");
    }
    $teams = array(
        "Lewandowski" => "Bayern Monachium",
        "Kamil Grosicki" => "Hull City",
        "Piotr Zieliński" => "S.S.C. Napoli",
        "Kuba Błaszczykowski" => "VfL Wolfsburg"
    );
    print('<br><p>Iteracja po tablicy asocjacyjnej:</p>');
    for (reset($teams); $element = key($teams); next($teams))
        print("<p>$element gra w klubie $teams[$element]</p>");
    print('<br><p>Jeszcze jedna iteracja po tej samej tablicy asocjacyjnej:</p>');
    foreach ($teams as $player => $team)
        print("<p>$player gra w klubie $team</p>");
    ?>
</details>
</body>
</html>