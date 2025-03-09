<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salário Mínimo</title>
</head>
<body>
    <main>
        <?php 
        $smin=1_518.00;
        $salario=$_GET['salario']??0;

        ?>

        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" step="0.01" value="<?=$salario?>">
            <p>Considerando o Salário mínimo de 2025 R$ <?=number_format($smin,2,",",".")?> </p>
            <input type="submit" value="Calcular">
        </form>
        
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
        $total=intdiv($salario,$smin);
        $dif=$salario%$smin;
        
        echo" <p>Você ganha $total salários mínimos + R\$" .number_format($dif,2,",",".").".</p>"
        ?>
    </section>
    
</body>
</html>