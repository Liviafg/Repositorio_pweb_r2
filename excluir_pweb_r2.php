<?php
	include "conexao_pweb_r2.php";
	$id = $_POST['id'];
	$sql = "DELETE FROM usuarios WHERE id_usuario = '$id'";
	mysqli_query($connect, $sql);
	$response = array("success" => true);
	echo json_encode($response);
?>