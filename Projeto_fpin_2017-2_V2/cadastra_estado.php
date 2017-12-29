<?php include("conecta.php") ?>
<?php

	$statement = $conn->prepare("INSERT INTO estado (nome, sigla, data_cadastro) VALUES(?, ?, NOW())");

	$statement->bind_param("ss", $nome, $sigla);

	$nome = $_POST["nome"];
	$sigla = $_POST["sigla"];

	$statement->execute();

	require 'index.php';

?>