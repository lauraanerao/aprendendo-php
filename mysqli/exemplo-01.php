<?php

$conn = new mysqli("laura-mysql", "laura", "laura", "laura");

if ($conn->connect_error) {

    echo "Error: " . $conn->connect_error;

}

else {

    echo "Ok.";
}

$stmt = $conn->prepare("INSERT INTO usuarios (login, senha) VALUES (?, ?)");

$login = "user";
$pass = "123456";

$stmt->bind_param("ss", $login, $pass);

$stmt->execute();

