<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<a href="index.php"><button>Voltar</button></a>
    <form action="alterar.php" method="post">

	<label>ID: <input type="text" name="aluno_cod" value="<?php echo $_GET['id']; ?>"></label>
	<br>
        <label>Nome: <input type="text" name="nome" required></label>
        <br>
        <label>E-mail: <input type="text" name="email" required></label>
        <br>
        <label>Curso:</label>
        <br>
        <label><input type="radio" name="curso" checked value="ccomp" required> Ciência da Computação</label>
        <br>
        <label><input type="radio" name="curso" value="engcomp"> Engenharia da Computação</label>
        <br>
        <input type="submit" value="Alterar">
    </form>
</body>
</html>
