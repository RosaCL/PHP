<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máquina do Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $atual=date("Y");
    $nasc=$_POST['nasc'] ?? '2000';
    $ano=$_POST['ano'] ?? $atual;
    
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="nasc">Que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1900"  value="<?=$nasc?>" max="<?=$atual-1?>">
            <label for="ano">Quer saber sua idade em que ano?</label>
            <input type="number" name="ano" id="ano" min="1900" value="<?=$ano?>">
            <input type="submit" value="Enviar">
        </form>
    </main>
    <section>
        <?php 
        $idade=$ano-$nasc;
        
        ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$nasc?> vai ter <strong><?=$idade?> anos</strong> em <?=$ano?></p>
    </section>
    
</body>
</html>