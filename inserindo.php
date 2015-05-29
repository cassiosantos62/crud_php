<?php
include "conecta_mysql.php";
 $nome = $_POST ["nome"];
 $fone = $_POST ["fone"];
 $email = $_POST ["email"];
 $mensagem= $_POST ["mensagem"];

/*$sql = "SELECT * FROM form WHERE nome = '$nome'";
$resultado = executa($sql);

$total_registros = pg_num_rows($resultado);
if ($total_registros >= 1) {  // Se numero de linhas encontradas/retornadas for 1 (um), indica que valor/variavel já esta cadastrada
    $erro=1;
    $msg_erro = "<center><b><font color=#FF0000>Valor já cadastrado!</font></b></center>";
}
*/
$sql = "INSERT INTO form ( nome , fone , email , mensagem )
                        VALUES ( :nome, :fone, :email, :mensagem)";


$query = $pdo->prepare($sql);
$query->bindValue(":nome", $nome);
$query->bindValue(":fone", $fone);
$query->bindValue(":email", $email);
$query->bindValue(":mensagem", $mensagem);

$result = $query->execute();

echo "Usuario inserido com sucesso!!!";


echo '<a href="index.html">Voltar</a>';

//echo '<p class="submit"><input type="submit" onclick="Enviar();" value="Excluir" /></p>'
//$sql ="('$nome', '$fone', '$email, '$mensagem')";
//$resultado = mysql_query ($sql);

//echo "Usuario incluido com sucesso!";

//mysql_close ($conexao);
