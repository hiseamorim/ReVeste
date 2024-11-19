<?php

$user = 'root';
$password = '';
$database = 'reveste';
$host = 'localhost';

$conn = new mysqli($host, $user, $password, $database);

if($conn->error) {
    die("Falha ao conectar ao banco de dados." . $conn->error);
}