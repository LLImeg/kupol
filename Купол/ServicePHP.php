<?php
include 'connect.php';

if($result = $mysqli->query("SELECT * FROM service")){
    foreach($result as $row){
         
        $servicename = $row["Sname"];
        $serviceinfo = $row["Sinfo"];
        $servicecost = $row["Scost"];

        echo "<tr class='table__tr'>";
        echo "<td class='table__td Sname'>${servicename}</td>";
        echo "<td class='table__td Sinfo'>${serviceinfo}</td>";
        echo "<td class='table__td Scost'>${servicecost}</td>";

    }
}
