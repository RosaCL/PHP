<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números</title>
    
</head>
<body>
    <main>
        <?php 
    $min=0;
    $max=100;

    $num=mt_rand($min, $max);
    // $num=random_int($min, $max); // tem criptografia melhor, mais é lento
    echo "Gerando um número laeatório entre $min e $max...\n";
    echo "O número gerado foi $num";

    
    ?>   





    </main>
 
    
</body>
</html>