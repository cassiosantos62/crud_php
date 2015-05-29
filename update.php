<?php
include "includes/conecta_mysql.php";

 $id = $_POST ["id"];
 $nome = $_POST ["nome"];
 $fone = $_POST ["fone"];
 $email = $_POST ["email"];
 $mensagem= $_POST ["mensagem"];


$prepara = $pdo->prepare(
    "UPDATE form SET nome = '$nome', fone = '$fone', email = '$email', mensagem = '$mensagem'  WHERE id = '$id'"
);
//$parametros = array('Noruega',  36428044, 'cassio@cassio.com', 'Say my name', 3);

$verifica = $prepara->execute();

    if ( $verifica ) {
    echo 'Dados atualizados com sucesso. <a href="select.php">Voltar</a>';
} else {
    $erro = $prepara->errorInfo();
    echo 'Ocorreu um erro na sua atualização. <a href="select.php">Voltar</a><br>';
    echo 'Erro: ' . $erro[2];
}