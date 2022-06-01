<?php
include 'connect.php';
    $sobkart=$_GET["pictur"];
    $sobtip=$_GET["Nazv"];
    $sobNazv=$_GET["Opis"];
    $sobdate=$_GET["Date"];


    $mysqli->query("INSERT INTO nowosti (pictur, Nazv, Opis, Date) VALUES ('$sobkart', '$sobtip', '$sobNazv', '$sobdate');");

if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
}
$new_url = 'http://localhost/Купол/nowosti.php';
header('Location: '.$new_url);
exit();

 