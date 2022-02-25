<?php
include 'conn.php';

$produto = $_POST['produto'];
$preco = $_POST['preco'];
$cor = $_POST['cor'];

if(empty($preco) || empty($produto)){
    echo "<script>alert('Voce precisa preencher todos os campos')</script>";
    echo "<script>setTimeout(function() {
        window.location.href = '../index.php';
    }, 1000)</script>";
    die;
}

$stmt = $pdo->prepare("INSERT INTO produtos (nome, preco, cor) VALUES (:produto, :preco, :cor)");
$stmt->bindValue(':produto',$produto);
$stmt->bindValue(':preco',$preco);
$stmt->bindValue(':cor',$cor);
$stmt->execute();

if($stmt->rowCount()){
    echo "<script>alert('CADASTRADO COM SUCESSO')</script>";
    echo "<script>setTimeout(function() {
        window.location.href = '../index.php';
    }, 1000)</script>";
}else{
    echo "<script>alert('erro ao cadastrar')</script>";;
}

?>