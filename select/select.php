<?php
include "conecta_mysql.php";

$prepara = $pdo->prepare('SELECT * FROM form');

$prepara->execute();

while ( $linha = $prepara->fetch() ) {
    echo 'Id: ' . $linha['id'] . '<br>';
    echo 'Nome: ' . $linha['nome'] . '<br>';
    echo 'Sobrenome: ' . $linha['fone'] . '<br>';
    echo 'Sobrenome: ' . $linha['email'] . '<br>';
    echo 'Sobrenome: ' . $linha['mensagem'] . '<br>';
    // ... E assim por diante ...
}