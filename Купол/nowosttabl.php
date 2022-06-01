<?php
include 'connect.php';

if($result = $mysqli->query("SELECT * FROM nowosti")){
    foreach($result as $row){
         
        $sobkart = $row["pictur"];
        $sobtip = $row["Nazv"];
        $sobNazv = $row["Opis"]; 
        $sobdate = $row["Date"];

        echo "<tr class='table__tr'>";
        echo "<td class='table__td katr'><img src=${sobkart}></td>";
        echo "<td class='table__td nowosti'>${sobtip}</td>";
        echo "<td class='table__td opis'>${sobNazv}</td>";
        echo "<td class='table__td date'>${sobdate}</td>";
    }
}
