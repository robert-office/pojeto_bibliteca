<?php

include "includes/conexao.php";

$nome = $_POST['nome_editora'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];

$sql = $conn->prepare('INSERT INTO editora (nome, endereco, numero, compl) VALUES (?, ?, ?, ?)');
$sql->execute(array($nome, $endereco, $numero, $complemento));

header("Location: index.php");