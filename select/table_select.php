<!DOCTYPE html>
<html >
<head>
    <title>--Formulário Contato--</title>
    <meta charset="utf-8" />
    <link href="style.css" rel="stylesheet" media="all" />
</head>
<body>
    <form action="select.php" method="POST">
        <h1>Entre em contato</h1>
        <p class="nome">
            <label for="nome">Nome</label> </p>
            <input type="text" id="nomeid" placeholder="Tiago Vale" required="required" name="nome" />
            <p class="fone">
            <label for="fone">Fone</label> </p>
            <input type="text" id="foneid" placeholder="(xx)xx-xx-xx-xx" name="fone" />
        <p>
            <label for="email">Email</label>
            <input type="email" id="emailid" placeholder="fulano@mail.com" name="email" />
        </p>
        <p>
            <textarea placeholder="Deixe sua opnião" name="mensagem"></textarea>
        </p>
        <p class="submit">
            <input type="submit" onclick="Enviar();" value="Enviar" />
        </p>
    </form>


</body>
</html>