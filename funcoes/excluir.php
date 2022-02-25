<?php
include 'conn.php';

//PEGANDO O ID VIA GET
$id = $_GET['id'];

//CONSULTA PARA A EXCLUSAO
$stmt = $pdo->prepare("DELETE FROM produtos WHERE id_prod = :id");
$stmt->bindValue(":id", $id);
$stmt->execute();

echo "<script>alert('DELETADO COM SUCESSO')</script>";
echo "<script>setTimeout(function() {window.location.href = '../tabela.php';}, 2000)</script>";
?>