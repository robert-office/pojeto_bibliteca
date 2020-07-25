<?php

include "includes/conexao.php";

$nome_autor = $_POST['nome_autor'];
$genero = $_POST['genero'];
$datanasc = $_POST['datanasc'];

$sql = $conn->prepare('INSERT INTO autor (nome, genero, data_nasc) VALUES (?, ?, ?)');
$sql->execute(array($nome_autor, $genero, $datanasc));

header("Location: index.php");