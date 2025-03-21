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
        <h1>Reajustador de preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

            <label for="preco">Preço</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" >
            <label for="porc">Qual será o percentual de reajuste? <strong><span id="p">%</span></strong></label>
            <input type="range" name="porc" id="porc" min="0" max="100" step="1" oninput="mudaValor()">
            <input type="submit" value="Reajustar">
        </form>
       
       
    </main>
    <section>
        <h2>Resultado do reajuste</h2>
        <p>O produto que custava <strong>R$ <?=$preco?></strong>, com <strong><?=$porc?>% de aumento</strong> vai passar a custar <strong>R$<?=$soma?></strong> a partir de agora.
        </p>

    </section>
   <script>
    mudaValor()
    function mudaValor(){
        p.innerText=porc.value;
    }
   </script> 
</body>
</html>