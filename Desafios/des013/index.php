<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $total=$_REQUEST['time'];   
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="time">Qual é o total de segundos?</label>
            <input type="number" name="time" id="time" min="0" step="1" required value="<?=$total?>">
            <input type="submit" value="Calcular">

            
        </form>
    </main>
    <?php 
    $sobra=$total;
    // Total Semana
    $semana=(int)($sobra/604800);
    $sobra=$sobra%604800;
    // Total dia
    $dia=(int)($sobra/86400);
    $sobra=$sobra%86400;    
    // Total hora
    $hora=(int)($sobra/3600);
    $sobra=$sobra%3600;
    // Total minutos
    $min=(int)($sobra/60);
    $sobra=$sobra%60;
    // Total segundos
    $segundo=$sobra;
    ?>
    <section>
        <h2>totalizando tudo</h2>
        <p>Analizando o valor que você digitou. <strong><?=$total?> segundos</strong> equivalem a um total de: </p>
        <ul>
            <li><?=$semana?> semana</li>
            <li><?=$dia?> dias</li>
            <li><?=$hora?> horas</li>
            <li><?=$min?> minutos</li>
            <li><?=$segundo?> segundos</li>
            
        </ul>
        
    </section>

</body>
</html>