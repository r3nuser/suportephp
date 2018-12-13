<html>
<head>
<script src="jquery-3.3.1.min.js"></script>
<meta charset="utf-8">
</head>
<body>
    <form action="cadastrar.php" method="post">
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
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
