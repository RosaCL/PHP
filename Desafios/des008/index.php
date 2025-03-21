<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz quadrada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $num=$_POST['num']??1;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="num">Valor</label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
        
    </main>
    <section>
        <h2>Resultado</h2>
        <?php  
        $rq=$num**(1/2);  
        $rc=$num**(1/3);     
        // $raiz=sqrt($num);
        echo"<p>Analisando o <strong>$num</strong> :
        <ul>
            <li>A raiz quadrada é <strong>$rq</strong> </li>
            <li>A raiz cúbica é <strong>$rc</strong></li>
        </ul>
    </p>";
        
        ?> 
        

    </section>
</body>
</html>