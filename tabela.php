<?php
include 'funcoes/conn.php';

//CONSULTA DOS NOSSOS PRODUTOS CADASTRADOS
$query = 'SELECT * FROM produtos ORDER BY id_prod DESC;';
$query = $pdo->prepare($query);
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
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <title>Titan Software</title>
</head>

<body>

    <nav>
        <a href="index.php"><span style="color: #ff8c00;">Titan</span> Software</a>
        <ul>
            <li><a href="index.php">CADASTRAR PRODUTO</a></li>
        </ul>
    </nav>

    <table id="tabela">
        <caption>Tabela de Produtos</caption>
        <thead>
            <tr>
                <th scope="col">Produto</th>
                <th scope="col">Cor</th>
                <th scope="col">Preço</th>
                <th scope="col">Desconto</th>
                <th scope="col">Valor com desconto</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                //LAÇO QUE GERA OS PRODUTOS EM UM LOOP
                foreach ($row_result as $array) {
                    $id_prod = $array['id_prod'];
                    $produto = $array['nome'];
                    $preco = $array['preco'];
                    $cor = $array['cor'];
                    $desconto = '0';

                    // REGRAS DE NEGÓCIO DE ACORDO COM A AVALIAÇÃO
                    switch ($cor) {

                        case 'Vermelho':
                            $desconto = $preco * 0.2;
                            break;

                        case 'Azul':
                            $desconto = $preco * 0.2;
                            break;

                        case 'Amarelo':
                            $desconto = $preco * 0.1;
                            break;
                    }

                    if($preco > 50 && $cor = "Vermelho"){
                        $desconto = $preco * 0.05;
                    }
                ?>
                <!--LAÇO FOREACH TRAZENDO OS PARAMETROS EM ARRAY JUNTAMENTE COM A FORMATAÇÃO DOS NÚMEROS-->
                    <td data-label="Produto"><?= $produto ?></td>
                    <td data-label="Cor"><?= $cor ?></td>
                    <td data-label="Preço">R$ <?= number_format($preco, 2, ',', '.'); ?></td>
                    <td data-label="Desconto">R$ <?= number_format($desconto, 2, ',', '.'); ?></td>
                    <td data-label="Desconto">R$ <?= number_format($preco - $desconto, 2, ',', '.'); ?></td>
                    <td data-label="Ações"><a href="funcoes/editar.php?id=<?= $id_prod?>" style="text-decoration: none; color:#FFD700">Editar</a> <a href="funcoes/excluir.php?id=<?= $id_prod?>" style="text-decoration: none; color: red">Excluir</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://kit.fontawesome.com/24e5214c5f.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#tabela').DataTable();
    });
</script>

</html>