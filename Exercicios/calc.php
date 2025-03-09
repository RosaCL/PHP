<?php 
        $num1=0;
        $num2=0;
        $calculo="somar";
        $resultado=0;
        if(isset($_GET['num1'],$_GET['num2'],$_GET['calculo'])){
            $num1=$_GET['num1'];
            $num2=$_GET['num2'];
            $calculo=$_GET['calculo'];
        }

        switch ($calculo) {
            case 'soma':
                $resultado=$num1+$num2;
                break;
            case 'sub':
                $resultado=$num1-$num2;
                break;
            case 'mult':
                $resultado=$num1*$num2;
                break;
            case 'div':
                $resultado=$num1/$num2;
                break;
                }
        
        
        
        ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    <h1>Calculadora</h1>
    <form  method="get">
        <label for="">Número:</label>
        <input type="number" name="num1" id="num1" value="<?= $num1?>"><br>
        <select name="calculo" id="">
        <option value="soma" <?=($calculo=='soma')?'Selected':'';?>>+</option>
        <option value="sub" <?=($calculo=='sub')?'Selected':'';?>>-</option>
        <option value="mult" <?=($calculo=='mult')?'Selected':'';?>>*</option>
        <option value="div" <?=($calculo=='div')?'Selected':'';?>>/</option>
        </select>
        <br>
        <label for="">Número:</label>
        <input type="number" name="num2" id="num2" value="<?= $num2?>"><br>  
        <input type="submit" value="=">        
        
    
        <p>O resultado é <?= $resultado?> </p>
        
    </form>




    </main>
</body>
</html>