<?php 

session_start();

include "includes/conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$verifica = $conn->prepare('SELECT * FROM usuario WHERE email = ? AND senha = ?');
$verifica->execute(array($email, $senha));

if($verifica->rowCount() > 0){
	$vetor = $verifica->fetch();

	$id_usu = $vetor['id'];

	$_SESSION['id_usu'] = $id_usu;

	header('Location: index_biblioteca.php');
}else{
	$_SESSION['erro_login'] = "1";
	header("Location: index.php");
}