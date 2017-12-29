<?php include("conecta.php") ?>
<?php

	$statement = $conn->prepare("INSERT INTO candidato (id_cidade, id_partido, nome, sexo, nascimento, naturalidade, profissao, partido, numero, cargo, data_cadastro) VALUES(1, 1, 'asdasda', 'm', 01011990, 'asadsd', 'asdasdada', 'dasdasdadada', 01, , NOW())");

	//$statement->bind_param("iississsis", $id_cidade, $id_partido, $nome, $sexo, $nascimento, $naturalidade, $profissao, $partido, $numero, $cargo);

	$id_cidade = $_POST["cidades"];
	$id_partido = $_POST["partido"];
	$nome = $_POST["candidato"];
	$sexo = $_POST["sexo"];
	$nascimento = $_POST["nascimento"];
	$naturalidade = $_POST["naturalidade"];
	$profissao = $_POST["profissao"];
	$partido = $_POST["partido"];
	$numero = $_POST["numero"];
	$cargo = $_POST["cargo"];

	$statement->execute();

	require 'index.php';

?>