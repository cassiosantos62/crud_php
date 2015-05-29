<?php
include "includes/conecta_mysql.php";


//echo $id = isset($_GET['id']) ? $_GET['id'] : NULL;
//exit;

//echo $where = isset($id) ? 'WHERE id=' . $id : '';

$prepara = $pdo->prepare("SELECT * FROM form");

$prepara->execute();
$resultados = $prepara->fetchAll(PDO::FETCH_CLASS);


include "select_view.php";