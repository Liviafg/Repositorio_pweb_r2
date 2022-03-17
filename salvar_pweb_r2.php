<?php
	include "conexao_pweb_r2.php";
	$nome = $_POST['nome'];
	$email = $_POST['notas'];
	$sql = "INSERT INTO usuarios (nome, notas) VALUES ('$nome', '$notas')";
	mysqli_query($connect, $sql) or die(error());
	$response = array("success" => true);
	echo json_encode($response);
?>