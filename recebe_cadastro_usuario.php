<?php

include "includes/conexao.php";

$nome = $_POST['username'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha_c = $_POST['senha_confirm'];

// pega data atual passando formatação para inserir no BD
$data_cad = date('Y-m-d');

$verificar_email = $conn->prepare('SELECT * FROM usuario WHERE email = ?');
$verificar_email->execute(array($email));

if($verificar_email->rowCount() > 0){
	$response = array('sucesso' => false, 'motivo' => 'email_exists');

	echo json_encode($response);
}else{

	// verifica se as senhas coincideem
	if($senha <> $senha_c){
		$response = array('sucesso' => false, 'motivo' => 'senha_wrongs');
		echo json_encode($response);
	}else{

		// se não houver o email cadastrado e as senhas coincidirem, ele cadastra o novo usuario
		$inseri_usu = $conn->prepare('INSERT INTO usuario
		(nome, email, senha, datacad) VALUES
		(?, ?, ?, ?)');

		$inseri_usu->execute(array($nome, $email, $senha, $data_cad));

		$response = array('sucesso' => true, 'motivo' => '0');
		echo json_encode($response);
	}
}

?>