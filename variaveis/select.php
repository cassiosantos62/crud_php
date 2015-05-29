<?php
include "conecta_mysql.php";


//echo $id = isset($_GET['id']) ? $_GET['id'] : NULL;
//exit;

//echo $where = isset($id) ? 'WHERE id=' . $id : '';

$prepara = $pdo->prepare("SELECT * FROM form");

$prepara->execute();

echo '<a href="index.html">Voltar</a><br><br>';


while ( $linha = $prepara->fetch()) {
    echo 'Id: ' . $linha['id'] . '<br>';
    echo 'Nome: ' . $linha['nome'] . '<br>';
    echo 'Telefone: ' . $linha['fone'] . '<br>';
    echo 'Email: ' . $linha['email'] . '<br>';
    echo 'Mensagem: ' . $linha['mensagem'] . '<br><br>' ;
    echo '<a href="atualizar.php?id='. $linha['id'] .'&nome='. $linha['nome'] .'&fone='. $linha['fone'] .'&email='. $linha['email'] .'&mensagem='. $linha['mensagem'].'">Editar</a> ',
             '<a href="delete.php?id='. $linha['id'] .'&nome='. $linha['nome'] .'&fone='. $linha['fone'] .'&email='. $linha['email'] .'&mensagem='. $linha['mensagem'].'">Deletar</a><br><br>';

}


echo '<a href="index.html">Voltar</a>';
