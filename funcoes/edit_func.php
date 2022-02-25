<?php
include 'conn.php';

//PUXANDO OS METODOS VIA POST PARA A EDICAO
$id = $_POST['id'];
$produto = $_POST['produto'];
$preco = $_POST['preco'];

//CONSULTA PARA FAZER O UPDATE DOS DADOS CADASTRADOS
$stmt = $pdo->prepare("UPDATE produtos SET nome=:produto, preco=:preco, id_prod=:id WHERE id_prod = :id");
$stmt->bindValue(':id', $id);
$stmt->bindValue(':produto', $produto);
$stmt->bindValue(':preco', $preco);
$stmt->execute();

header("Location: ../tabela.php")
?>