<?php

    require_once 'FileManager.php';
    require_once 'Aluno.php';

    $aluno = new Aluno();

    $aluno->setNome($_POST["nome"]);
    $aluno->setEmail($_POST["email"]);
    $aluno->setCurso($_POST["curso"]);

    $content = $aluno->getNome().
                " ".$aluno->getEmail().
                " ".$aluno->getCurso()."\n";

    $file = new FileManager("database/alunos.txt", "a");

    $file->addInFile($content);
    $file->closeFile();

    header('Location: /index.php');

?>
