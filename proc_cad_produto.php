<?php
session_start();
include_once("conexao.php");

$produto = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_STRING);
$quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_STRING);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);


$result_produto = "INSERT INTO produto (produto, quantidade, data_vencimento) VALUES ('$produto', '$quantidade', '$data')";
$resultado_produto = mysqli_query($conn, $result_produto);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Produto cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Produto não foi cadastrado com sucesso</p>";
	header("Location: cad_produto.php");
}
