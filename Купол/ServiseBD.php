<?php
include 'connect.php';
    $serviceid=$_GET["Sname"];
    $servicename=$_GET["Sinfo"];
    $serviceinfo=$_GET["Scost"];

    $mysqli->query("INSERT INTO service (Sname, Sinfo, Scost) VALUES ('$serviceid', '$servicename','$serviceinfo');");

if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
}
$new_url = 'http://localhost/Купол/Service.php';
header('Location: '.$new_url);
exit();

 