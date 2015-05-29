<!DOCTYPE html>
<html >
<head>
    <title>--Formulário Contato--</title>
    <meta charset="utf-8" />
    <link href="style.css" rel="stylesheet" media="all" />
</head>
<body>

    <form action="update.php" method="POST">
        <h1>Entre em contato</h1>
        <p class="id">
            <label for="id">ID:</label><br>
            <input type="text" id="id" name="id" value="<?php   echo $id?>" />
        </p>
        <p class="nome">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nomeid" name="nome" value="<?php  echo $nome ?>" />
        </p>
        <p class="fone">
            <label for="fone">Fone:</label><br>
            <input type="text" id="foneid" placeholder="(xx)xx-xx-xx-xx" name="fone"  value="<?php  echo $fone ?>" />
        </p>
        <p class="email">
            <label for="email">Email:</label><br>
            <input type="email" id="emailid" placeholder="fulano@mail.com" name="email" value="<?php  echo $email ?>"/>
        </p>
        <p class="mensagem">
            <label for="mensagem">Mensagem:</label><br>
            <textarea  name="mensagem" placeholder="fulano@mail.com" id="mensagemid"><?php  echo $mensagem ?></textarea>
        </p>
        <p class="submit">
            <input type="submit" onclick="Atualizar();" value="Atualizar" />
        </p>
    </form>

</body>
</html>
