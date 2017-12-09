<?php
$servername = "localhost";
$username = "rusoko";
$password = "abc123";

$conn = mysqli_connect($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "DROP DATABASE data";
if (mysqli_query($conn, $sql) === TRUE) {
    echo "Database deleted successfully";
} else {
    echo "Error deleting database: " . mysqli_error($conn);
}

$conn->close();