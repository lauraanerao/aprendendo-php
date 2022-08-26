<?php

$conn = new PDO("mysql:dbname=laura;host=laura-mysql", "laura", "laura");

$stmt = $conn->prepare("SELECT * FROM usuarios ORDER BY login");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {

    foreach ($row as $key => $value) {

        echo $key. ": " .$value . "<br>";
    }
}

var_dump($results);