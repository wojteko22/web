<html>
<head>
    <meta charset="utf-8">
    <title>Result of submitting form</title>
</head>
<body>
<p>
    <?php
    $name = $_POST["name"];
    $nameOk = preg_match("/^[a-zA-z]+ [a-zA-z]+$/", $name);
    if (!$nameOk)
        print("<p>Imię i nazwisko to dwa wyrazy składające się wyłącznie z liter!</p>");
    $email = $_POST["email"];
    $emailOk = preg_match("/^[a-zA-Z0-9.!#$%&’*+=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/", $name);
    if (!$nameOk)
        print("<p>Wprowadzono niepoprawny email :(</p>");


    ?>
</p>
</body>
</html>