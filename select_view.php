
<!DOCTYPE html>
<html >
<head>
    <title>--Formulário Contato--</title>
    <meta charset="utf-8" />
    <link href="css/style.css" rel="stylesheet" media="all" />
</head>
<body>


<a href="index.html">Voltar</a><br><br>

<table>
    <thead>
        <th> ID  </th>
        <th> Nome </th>
        <th> Telefone </th>
        <th> Email </th>
        <th> Observação </th>
        <th> Ações </th>
    </thead>

    <?php foreach($resultados as $linha): ?>

        <tr>
            <td><?php echo $linha->id ?></td>
            <td><?php echo $linha->nome ?></td>
            <td><?php echo $linha->fone ?></td>
            <td><?php echo $linha->email ?></td>
            <td><?php echo $linha->mensagem ?></td>
            <td>
                <a href="atualizar.php?id=<?php echo $linha->id ?>">Editar</a>
                |
                <a href="delete.php?id=<?php echo $linha->id ?>">Deletar</a>
            </td>
        </tr>

    <?php endforeach; ?>

</table>

<a href="index.html">Voltar</a><br><br>

</body>