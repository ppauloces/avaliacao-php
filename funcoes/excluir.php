<?php
include 'conn.php';

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM produtos WHERE id_prod = :id");
$stmt->bindValue(":id", $id);
$stmt->execute();

echo "<script>alert('DELETADO COM SUCESSO')</script>";
echo "<script>setTimeout(function() {window.location.href = '../tabela.php';}, 2000)</script>";
?>