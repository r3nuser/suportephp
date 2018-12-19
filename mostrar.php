<html>
<head>
	<meta charset="utf-8">
	<style>
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		}
	</style>
</head>
<body>
	<a href="index.php">
		<button>Voltar</button>
	</a>
	<table>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Curso</th>
			<th>Deletar</th>
			<th>Alterar</th>
		</tr>
		<?php
			require_once 'Connection.php';

			$con = new Connection('root', 'pqplar2016', 'localhost', 'crudphp_renan');

			if ($con->con->connect_error) {
				echo 'Erro ao conectar ao DB!<br>';
			}

			$result = $con->readAluno();

			if ( mysqli_num_rows($result) > 0 ){
				while ( $row = mysqli_fetch_assoc($result) ){
					echo "<tr>";
					echo "<td>".$row["aluno_cod"]."</td>";
					echo "<td>".$row["nome"]."</td>";
					echo "<td>".$row["email"]."</td>";
					echo "<td>".$row["curso"]."</td>";
					echo "<td><a href=\"deletar.php?id=".$row["aluno_cod"]."\">X</a></td>";
					echo "<td><a href=\"recadastro.php?id=".$row["aluno_cod"]."\">X</a></td>";
					echo "</tr>";
				}
			}

			$con->closeConnection();
		?>
	</table>
</body>
</html>
