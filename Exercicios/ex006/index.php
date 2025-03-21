<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores e funções aritméticas</title>
</head>
<body>
    <?php 
    $res=50/2+3**2;
    echo "A operação 50/2+3**2 o resultado é $res <br>";   
    $res=50/(2+3)**2; 
    echo "A operação 50/(2+3)**2 o resultado é $res <br>";
    $r=abs(-50550);
    print "A resposta é $r <br>";
    $base=base_convert(254,10,8);
    print "A base ficou $base <br>";
    $result=intdiv(5,2);
    print "A resposta é $result<br>";
    $n=max(356,84,635,12,9,222222);
    print "A resposta é $n <br>";
    $o=5**10;
    print "5 a decima é $o<br>";

    ?>
</body>
</html>