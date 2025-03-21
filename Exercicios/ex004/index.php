<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "PHP \u{1F418}";
    $nome="Rosa";
    $sobrenome="Chagas";
    $ano=('Y')
    echo "Olá $nome $sobrenome \u{1F596}!";
    const CIDADE="Maceió";
    echo "Moro em CIDADE";//Errado
    echo 'Moro em CIDADE';//Errado
    echo "Moro em ".CIDADE;//Correto
    ?>  
</body>
</html>