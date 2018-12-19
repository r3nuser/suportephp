<?php

    require_once 'Connection.php';
    require_once 'Aluno.php';

    $aluno = new Aluno();

    $aluno->setNome($_POST["nome"]);
    $aluno->setEmail($_POST["email"]);
    $aluno->setCurso($_POST["curso"]);

    $con = new Connection('root', 'pqplar2016', 'localhost', 'crudphp_renan');

    $con->createAluno( $aluno );

    header('Location: /index.php');

?>
