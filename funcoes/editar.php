<?php
include 'conn.php';

//PEGANDO OS DADOS VIA GET PARA A EDIÇÃO
$id = $_GET['id'];

//CONSULTA DOS DADOS CADASTRADOS
$query = 'SELECT * FROM produtos WHERE id_prod = :id';
$query = $pdo->prepare($query);
$query->bindValue(':id',$id);
$query->execute();
$total = $query->rowCount();
$row_result = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Titan Software</title>
</head>

<body>

    <nav>
        <a href="../index.php"><span style="color: #ff8c00;">Titan</span> Software</a>
        <ul>
            <li><a href="../tabela.php">VISUALIZAR PRODUTOS CADASTRADOS</a></li>
        </ul>
    </nav>

    <?php
    //LACO PARA VISUALIZAÇÃO DO PRODUTO DE ACORDO COM O ID
        foreach ($row_result as $array) {
          $id_prod = $array['id_prod'];
          $produto = $array['nome'];
          $cor = $array['cor'];
          $preco = $array['preco'];
        }
    ?>

    <form action="edit_func.php" method="post">
        <div>
            <label for="name">Produto:</label>
            <input type="hidden" value="<?= $id ?>" name="id">
            <input type="text" name="produto" value="<?= $produto?>">
            
        </div>
        <div>
            <label for="name">Preço:</label>
            <input type="text" name="preco" value="<?= $preco ?>">
        </div>
            <div>
            <label for="msg">Cor:</label>
            <select name="cor" disabled>
                <option value="<?php $cor ?>"><?= $cor ?></option>
                <option value="Vermelho">
            </select>
        </div>
        <div class="button">
            <button type="submit">EDITAR</button>
        </div>
    </form>
</body>

</html>