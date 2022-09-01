<?php

$conn = new PDO("sqlsrv:database=dbphp7;server=172.21.0.3;ConnectionPooling=0", "sa", "laura351798");

$stmt = $conn->prepare("SELECT * FROM usuarios ORDER BY login");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {

    foreach ($row as $key => $value) {

        echo $key. ": " .$value . "<br>";
    }
}

var_dump($results);