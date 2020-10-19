<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Comentário</title>		
	</head>
	<body>
		<h1>Comentário</h1>
		<h3>
		<?php
			session_start();
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
		</h3>
		<form method="POST" action="processa.php">
			<label>Nome: </label>
			<input type="text" name="nome" /><br><br>
			
			<label>E-mail: </label>
			<input type="email" name="email" /><br><br>

			<label>Comentário: </label>
			<input type="text" name="comentario" /><br><br>
			
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>