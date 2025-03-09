<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
            
            $n=$_REQUEST ["num"];
            $a=$n-1;
            $s=$n+1;
            echo "O número escolhido $n tem como antecessor $a e o sucessor $s.";

            
            ?>
        </p>
    </main>
    
</body>
</html>