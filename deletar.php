<?php

	require_once 'Connection.php';

	$con = new Connection("root", "pqplar2016", "localhost", "crudphp_renan");
	$con->deleteAluno($_GET['id']);
	$con->closeConnection();

	header('Location: /mostrar.php');

?>
