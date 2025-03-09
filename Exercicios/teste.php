<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variável e Constante</title>
</head>
<body>
    <?php 
    $nome='Rosa';
    $sobrenome="Chagas";
    const PAIS = "Brasil";
    $idade=38;
    $peso=64.5;
    $casado=false;


    // $nome='Ângela';

    echo "Muito prazer, $nome $sobrenome! Você tem $idade anos, $peso Kg e é $casado. Você mora no " .PAIS;
    
    ?>
    
</body>
</html>