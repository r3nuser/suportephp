<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<a href="index.php">
		<button>Voltar</button>
	</a>
	<table>
		<tr>
			<td>Id</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Curso</th>
			<th></th>
			<th></th>
		</tr>
		<?php
			require_once 'Connection.php';

			$h = "10.9.0.213";
			$u = "renan";
			$p = "renan";
			$d = "suporteiros";

			$sql = new Connection($h, $u, $p, $d);

			$sql->closeConnection();
		?>
	</table>
</body>
</html>
