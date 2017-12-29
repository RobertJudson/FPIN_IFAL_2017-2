<?php include("conecta.php") ?>
<?php

	$statement = $conn->prepare("INSERT INTO usuario (nome, email, login, senha) VALUES(?, ?, ?, ?)");

	$statement->bind_param("ssss", $nome, $email, $login, $pass);

	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$login = $_POST["newUsername"];
	$pass = md5($_POST["newPassword"]);

	$statement->execute();

	require 'index.php';

?>