<?php
$servername = "localhost";
$username = "rusoko";
$password = "abc123";

$conn = mysqli_connect($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE data";
if (mysqli_query($conn, $sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// todo: tworzy tabele
// todo: wypełnia bazę danymi
//USE nazwa_bazy;
//
//CREATE TABLE nazwa_tabeli
//(
//    ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
//   ...
//   ...
//   ...
//   ...
//);
//
//INSERT INTO nazwa_tabeli (...) VALUES (...);
//INSERT INTO nazwa_tabeli (...) VALUES (...);
//INSERT INTO nazwa_tabeli (...) VALUES (...);

$conn->close();

// todo: Wykorzystać gdzieś:
//• mysqli_fetch_row(),
//• quotemeta(),
//• zmienna nazwa zmiennej ($$zmienna).
