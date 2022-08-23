<?php

$conn = new mysqli("laura-mysql", "laura", "laura", "laura");

if ($conn->connect_error) {

    echo "Error: " . $conn->connect_error;

}


$result = $conn->query("SELECT * FROM usuarios ORDER BY login");

$data = array();

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {

    array_push($data, $row);

}

echo json_encode($data);

