<?php
session_start();
if(!$_SESSION['admin']){
  header('location:../admin/login.html');
}
require "../config.php";
$idescolhido = $_GET['id'];

$produto = $_POST['produto'];
$categoria = $_POST['categoria'];
$minimo = $_POST['minimo'];
$ideal = $_POST['ideal'];


$sql = "UPDATE produto SET nome = ?, categoria = ? WHERE id_produto = ?";
$desclaraoSql = $conexao->prepare($sql);
$desclaraoSql->bindParam(1,$produto);
$desclaraoSql->bindParam(2,$categoria);
$desclaraoSql->bindParam(3,$idescolhido);
$resultado = $desclaraoSql->execute();

 
if($resultado){
    $sql2 = "UPDATE estoque SET produto = ?, categoria = ?, minimo =?, ideal=? WHERE id_produto = ?";
    $declaracaoSql = $conexao->prepare($sql2);
    $declaracaoSql->bindParam(1, $produto);
    $declaracaoSql->bindParam(2, $categoria);
    $declaracaoSql->bindParam(3, $minimo);
    $declaracaoSql->bindParam(4, $ideal);
    $declaracaoSql->bindParam(5, $idescolhido);
    $declaracaoSql->execute();
    echo "<script>alert('Dados atualizado com sucesso!');location.href='produtos.php';</script>";
}
