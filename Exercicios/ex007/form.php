<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST formulário</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="ex007.php?tipo=Aluno&turno=Noite" method="post">
            <input type="text" name="usu" id="usu">
            <label for="usu">Usúario</label>
            <input type="password" name="sen" id="sen">
            <label for="sen">Senha</label>
            <input type="submit" value="Enviar">
        </form>
    </main>
    
</body>
</html>