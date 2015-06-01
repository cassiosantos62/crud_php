<?php

include "includes/conecta_mysql.php";

$id = $_GET['id'];

/*Seleciona um item por ID*/
$prepara = $pdo->prepare("SELECT * FROM form WHERE id=$id LIMIT 1");
$prepara->execute();
$resultado = $prepara->fetch(PDO::FETCH_ASSOC);

/*Define as variaveis que serão exibidas na view*/
$nome = $resultado['nome'];
$email = $resultado['email'];
$fone = $resultado['fone'];
$mensagem = $resultado['mensagem'];


include 'atualizar_view.php';

