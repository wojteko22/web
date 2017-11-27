<html>
<head>
    <meta charset="utf-8">
    <title>Result of submitting form</title>
</head>
<body>
<?php
$name = $_POST["name"];
$nameOk = preg_match("/^[a-zA-z]+ [a-zA-z]+$/", $name);
$name = preg_replace("/\b(pazdan)\b/i", "Pirania", $name);
if (!$nameOk) {
    print("<p>Imię i nazwisko to dwa wyrazy składające się wyłącznie z liter!</p>");
    $specialCharsInName = preg_match("/[\"\\/]/", $name);
    if ($specialCharsInName)
        print("<p>BTW dlaczego masz jakieś znaki specjalne w imieniu i nazwisku? :P</p>");
    die();
} else
    print("<p>Witaj $name! :)</p>");
$email = $_POST["email"];
$emailOk = preg_match("/^[a-zA-Z0-9.!#$%&’*+=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/", $name);
if (!$emailOk)
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
<details>
    <summary>Porównywanie napisów</summary>
    <?php
    $lewy = "Lewandowski";
    $surname = explode(" ", $name)[1];
    if ($surname < $lewy)
        $positionInList = "przed";
    elseif ($surname > $lewy)
        $positionInList = "po";
    else
        $positionInList = "Fuck!! masz tak samo na nazwisko jakaś rodzina z";
    print("<p>Gdybyś był w klasie z Robertem Lewandowskim w dzienniku szkolnym byłbyś $positionInList nim.</p>");
    if (strcmp($surname, $lewy) == -1)
        $positionInList = "przed";
    elseif (strcmp($surname, $lewy) == 1)
        $positionInList = "po";
    else
        $positionInList = "Fuck!! z Mariuszem też masz tak samo na nazwisko, znasz się osobiście z";
    print("<p>A gdybyś był w klasie z Mariuszem Lewandowskim w dzienniku szkolnym byłbyś $positionInList nim.</p>")
    ?>
</details>
<details>
    <summary>Surprise</summary>
    <?php
    $requestName = $_REQUEST["name"];
    $serverIpAddress = $_SERVER["SERVER_ADDR"];
    $serverPort = $_SERVER["SERVER_PORT"];
    $clientIp = $_SERVER["REMOTE_ADDR"];
    $userPort = $_SERVER["REMOTE_PORT"];
    print("<p> Ooo, patrz $requestName, co wiemy:</p>");
    print("<p>Adres IP servera: $serverIpAddress</p>");
    print("<p>Port servera: $serverPort</p>");
    print("<p>Twój adres IP: $clientIp</p>");
    print("<p>Twój port: $userPort</p>");
    ?>
</details>
</body>
</html>