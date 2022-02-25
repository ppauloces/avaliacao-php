<?php
include 'conn.php';

//METODO POST ONDE PEGARÁ OS DADOS DO FORMULÁRIO
$produto = $_POST['produto'];
$preco = $_POST['preco'];
$cor = $_POST['cor'];


//VERIFICACAO PARA NAO RECEBER CADASTROS VAZIOS
if(empty($preco) || empty($produto)){
    echo "<script>alert('Voce precisa preencher todos os campos')</script>";
    echo "<script>setTimeout(function() {
        window.location.href = '../index.php';
    }, 1000)</script>";
    die;
}

//CONSULTA AO BANCO DE DADOS PARA FAZER A INSERÇÃO
$stmt = $pdo->prepare("INSERT INTO produtos (nome, preco, cor) VALUES (:produto, :preco, :cor)");
$stmt->bindValue(':produto',$produto);
$stmt->bindValue(':preco',$preco);
$stmt->bindValue(':cor',$cor);
$stmt->execute();

//VERIFICACAO PARA SABER SE DEU TUDO CERTO
if($stmt->rowCount()){
    echo "<script>alert('CADASTRADO COM SUCESSO')</script>";
    echo "<script>setTimeout(function() {
        window.location.href = '../index.php';
    }, 1000)</script>";
}else{
    echo "<script>alert('erro ao cadastrar')</script>";;
}

?>