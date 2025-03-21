<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustar Preços</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
    $preco=$_POST['preco'];
    $porc=$_POST['porc'];
    $formula=($preco*$porc)/100;
    $soma=$preco+$formula;
    $desconto=$preco-$formula;
    ?>
    <main>
        <form action="">
            <input type="submit" value="Enviar">
        </form>
    </main>
    
</body>
</html>