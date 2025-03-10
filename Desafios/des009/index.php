<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $v1=$_POST['v1'] ?? '';
        $v2=$_POST['v2'] ?? '';
        $p1=$_POST['p1'] ?? '';
        $p2=$_POST['p2'] ?? '';
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" required value="<?=$v1?>">
            <label for="p1">Peso 1</label>
            <input type="number" name="p1" id="p1" required min="1" value="<?=$p1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" required value="<?=$v2?>">
            <label for="p2">Peso 2</label>
            <input type="number" name="p2" id="p2" required min="1" value="<?=$p2?>">
            <input type="submit" value="Calcular médias">
        </form>
    </main>
    <section>
        <h1>As médias</h1>
        <?php 
        $mediaAri=($v1+$v2)/2;
        $mediaPond=($v1*$p1 + $v2*$p2)/($p1+$p2);      
            ?>
    <p>Ananalisando os valores <?=$v1?> e <?=$v2?>:</p>
        <ul>
            <li>A <strong>média aritimética simples</strong> entre os valores é igual a: <?=$mediaAri?></li>
            <li>A <strong>média ponderada</strong> entre os valores com pesos <?=$p1?> e <?=$p2?>  é igual a: <?=$mediaPond?></li>
        </ul>

    

    </section>

    
</body>
</html>