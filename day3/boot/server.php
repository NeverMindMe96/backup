<?php

$servername = 'localhost'; // Change this to your server address
$username = 'root'; // Change this to your database username
$password = ''; // Change this to your database password
$database = 'mydatabase'; // Change this to your database name


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

?>