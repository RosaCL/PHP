<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        //Cotação banco central
        $cotacao=5.7282988;

        //Quantos reais tenho
        $real=$_REQUEST["din"] ??0 ;

        //Coversão real ->dolar
        $dolar=$real/$cotacao;

        //formatação tradicional
        // echo "Seus R\$" .number_format($real,2,",",'.'). " equivalem a U\$" .number_format($dolar,2,",",".");

        //formatação de moedas com internacionalização
        $padrao=numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "Seus " .numfmt_format_currency($padrao,$real,"BRL"). " equivalem a  " .numfmt_format_currency($padrao,$dolar,"USD");



        ?>
    </main>
</body>
</html>