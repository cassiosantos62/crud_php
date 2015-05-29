<?php
include "conecta_mysql.php";

// Prepara o comando a ser executado

/*$prepara = $pdo->prepare("DELETE FROM form WHERE id ='$id' ");

// Parâmetros do comando SQL
$parametros = array(  );

// Executa o comando
$verifica = $prepara->execute( $parametros );

// Verifica se o comando foi executado
if ( $verifica ) {
    echo 'Linha excluída.';
} else {
    $erro = $prepara->errorInfo();
    echo 'Ocorreu um erro na sua consulta. <br>';
    echo 'Erro: ' . $erro[2];
}*/

//$id = 5;
$id = $_POST["id"];
try {
    $stmt = $pdo->prepare('DELETE FROM minhaTabela WHERE id = :id');
    $stmt->bindParam(':id', $id); $stmt->execute();
    echo $stmt->rowCount();
    }
    catch(PDOException $e) {
     echo 'Error: ' . $e->getMessage();
     }
     ?>
