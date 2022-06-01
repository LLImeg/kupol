<?php
$servername = "localhost";
$database = "kupol";
$username = "root";
$password = "root";
// Создаем соединение
$mysqli = new mysqli($servername, $username, $password, $database);
// Проверяем соединение
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
?>