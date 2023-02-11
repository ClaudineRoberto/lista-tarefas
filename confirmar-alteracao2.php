<?php 
include_once "conexao.php";
$id = $_GET['id'];
$status = $_GET['status'];

$sqlAlterar = "update t_tarefas set status = '$status' where id = $id";
mysqli_query($conexao, $sqlAlterar);
mysqli_close($conexao);

header("location: index.php?msg=alterado")
?>