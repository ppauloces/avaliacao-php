<?php
//INCLUDE DO ARQUIVO DE CONEXÃO
include 'funcoes/conn.php';
//PAGINA PRINCIPAL ONDE O USUÁRIO FARÁ O CADASTRO DO PRODUTO

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Titan Software</title>
</head>

<body>

    <nav>
        <a href="index.php"><span style="color: #ff8c00;">Titan</span> Software</a>
        <ul>
            <li><a href="tabela.php">VISUALIZAR PRODUTOS CADASTRADOS</a></li>
        </ul>
    </nav>
    <!-- FORMULÁRIO ONDE RECEBERÁ OS PARAMETROS DE CADASTRO -->
    <form action="funcoes/cadastro.php" method="post">
        <div>
            <label for="name">Produto:</label>
            <input type="text" name="produto">
        </div>
        <div>
            <label for="name">Preço:</label>
            <input type="text" name="preco">
        </div>
        <div>
            <label for="msg">Cor:</label>
            <select name="cor">
                <option value="Amarelo">Amarelo</option>
                <option value="Vermelho">Vermelho</option>
                <option value="Azul">Azul</option>
            </select>
        </div>
        <div class="button">
            <button type="submit">INSERIR</button>
        </div>
    </form>
</body>

</html>