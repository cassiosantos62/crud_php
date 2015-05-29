<?php
include "conecta_mysql.php";

$prepara = $pdo->prepare(
    "UPDATE form SET nome = ? WHERE id = ? "
);


$parametros = array('Padre', 3);

$verifica = $prepara->execute( $parametros );

if ( $verifica ) {
    echo 'Dados enviados à base de dados com sucesso';
} else {
    $erro = $prepara->errorInfo();
    echo 'Ocorreu um erro na sua consulta. <br>';
    echo 'Erro: ' . $erro[2];
}