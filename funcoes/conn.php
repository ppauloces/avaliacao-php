<?php

//CONEXAO COM O BANCO DE DADOS EM PDO
try { 
    $pdo = new PDO('mysql:host=localhost;dbname=avaliacao', 'root', ''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch(PDOException $e) { 
    echo 'Error: ' . $e->getMessage();
}



?>