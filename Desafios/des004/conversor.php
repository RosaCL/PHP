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
        //Cotação banco central api
        
        $inicio= date('m-d-y',strtotime("-7 days"));
        $fim=date('m-d-y');



        $url='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados=json_decode(file_get_contents($url), true);

        // var_dump($dados);

        $cotacao=$dados["value"][0]["cotacaoCompra"];
        
        echo "A cotação foi $cotacao";

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