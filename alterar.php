<?php

	require_once 'Connection.php';
	require_once 'Aluno.php';

	$con = new Connection("root", "pqplar2016", "localhost", "crudphp_renan");

	echo "Codigo: ".$_POST['aluno_cod'];

	$aluno = new Aluno();
	$aluno->setId($_POST['aluno_cod']);
	$aluno->setNome($_POST['nome']);
	$aluno->setEmail($_POST['email']);
	$aluno->setCurso($_POST['curso']);

	$con->alterAluno( $aluno );

	$con->closeConnection();

	header('Location: /mostrar.php');

?>
