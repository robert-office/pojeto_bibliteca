<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'biblioteca';

// conexão e seleção do banco de dados
$con = mysqli_connect($host, $user, $pass, $db);
mysqli_set_charset($con, "utf8");

// conexão PDO
$conn = new PDO("mysql:host=" . $host . ";dbname=" . $db . ";charset=utf8", $user, $pass);