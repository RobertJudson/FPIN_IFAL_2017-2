<?php include("conecta.php") ?>
<?php

	$statement = $conn->prepare("INSERT INTO cidade (id_estado, nome, data_cadastro) VALUES(?, ?, NOW())");

	$statement->bind_param("is", $id_estado, $nome);

	$id_estado = $_POST["estados"];
	$nome = $_POST["cidade"];

	$statement->execute();

	require 'index.php';

?>