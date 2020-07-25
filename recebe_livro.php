<?php

include "includes/conexao.php";

$livro_nome = $_POST['livro_nome'];
$categoria = $_POST['categoria'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];

$sql = $conn->prepare('INSERT INTO livros (nome, id_categoria, id_autor, id_editora) VALUES (?, ?, ?, ?)');
$sql->execute(array($livro_nome, $categoria, $autor, $editora));

header("Location: index.php");