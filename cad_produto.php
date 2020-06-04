<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Cadastrar</title>		
	</head>
	<body>
		<a href="cad_usuario.php">Cadastrar</a><br>
		<a href="index.php">Listar</a><br>
		<h1>Cadastrar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_cad_produto.php">
			<label>Produto: </label>
			<input type="text" name="produto" placeholder="Digite o produto"><br><br>
			
			<label>Quantidade: </label>
			<input type="number" name="quantidade" placeholder="Digite a quantidade"><br><br>

			<label>Data de vencimento: </label>
			<input type="date" name="data" placeholder="Digite o vencimento"><br><br>
			
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>