<?php
include "includes/conecta_mysql.php";

// Prepara o comando a ser executado
$id = $_GET["id"];
$prepara = $pdo->prepare("DELETE FROM form WHERE id = '$id'");

// Parâmetros do comando SQL
$parametros = array(  );

// Executa o comando
$verifica = $prepara->execute( $parametros );

// Verifica se o comando foi executado
if ( $verifica ) {
    echo 'Cadastro excluído com sucesso. <a href="select.php">Voltar</a>';
} else {
    $erro = $prepara->errorInfo();
    echo 'Ocorreu um erro na sua consulta. <a href="select.php">Voltar</a> <br>';
    echo 'Erro: ' . $erro[2];
}
