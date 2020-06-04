<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_produto = "SELECT * FROM produto WHERE id = '$id'";
$resultado_produto = mysqli_query($conn, $result_produto);
$row_produto = mysqli_fetch_assoc($resultado_produto);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Editar</title>		
	</head>
	<body>
		<a href="cad_produto.php">Cadastrar</a><br>
		<a href="index.php">Listar</a><br>
		<h1>Editar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_produto.php">
			<input type="hidden" name="id" value="<?php echo $row_produto['id']; ?>">
			
			<label>Produto: </label>
			<input type="text" name="nome" placeholder="Digite o produto" value="<?php echo $row_produto['produto']; ?>"><br><br>
			
			<label>Quantidade: </label>
			<input type="number" name="number" placeholder="Digite a quantidade" value="<?php echo $row_produto['quantidade']; ?>"><br><br>

			<label>Data Vencimento: </label>
			<input type="date" name="data" placeholder="Digite a data" value="<?php echo $row_produto['data']; ?>"><br><br>
			
			<input type="submit" value="Editar">
		</form>
	</body>
</html>