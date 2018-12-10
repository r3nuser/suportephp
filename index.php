<?php

require_once 'Aluno.php';

$aluno = new Aluno();
$aluno.setNome("Renan");
$aluno.setEmail("renangomes.es@gmail.com");
$aluno.setCurso("Ciência da Computação");

echo $aluno->nome;
echo $aluno->email;
echo $aluno->curso;

?>
