<?php
$servername = "localhost";
$username = "rusoko";
$password = "abc123";

$conn = mysqli_connect($servername, $username, $password);
if ($conn->connect_error)
    die("<p>Connection failed: " . $conn->connect_error . "</p>");

$sql = "CREATE DATABASE data";
if (!mysqli_query($conn, $sql))
    die("<p>Error creating database: " . mysqli_error($conn) . "</p>");
echo "<p>Database created successfully</p>";

if (!mysqli_select_db($conn, "data"))
    die("<p>Error opening data database: " . mysqli_error($conn) . "</p>");
echo "<p>Database data opened successfully</p>";

$sql = "CREATE TABLE people (
    login VARCHAR(255) NOT NULL PRIMARY KEY,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(30) NOT NULL
);";
if (!(mysqli_query($conn, $sql)))
    die("<p>Error creating table people: " . mysqli_error($conn) . "</p>");
echo "<p>Table people created successfully</p>";

$sql = "INSERT INTO people(login, password, email, phone) VALUES
('wojtek', 'okon', 'wojteczek@gmail.com', '" . mysqli_real_escape_string($conn, '(+48)123456678') . "'),
('dawid', 'ptaki', 'dawidek@gmail.com', '" . mysqli_real_escape_string($conn, '(+48)323456678') . "')";
if (!(mysqli_query($conn, $sql)))
    die("<p>Error inserting rows to table people: " . mysqli_error($conn) . "</p>");
echo "<p>Rows inserted successfully to table people</p>";

$conn->close();

// todo: Wykorzystać gdzieś:
//• mysqli_fetch_row(),
//• quotemeta(),
