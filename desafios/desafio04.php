<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 04</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>

        <?php
            $start = date("m-d-Y", strtotime("-7 days"));
            $end = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $start .'\'&@dataFinalCotacao=\''. $end .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
            $data = json_decode(file_get_contents($url), true);
        
            $cotacao = $data["value"][0]["cotacaoCompra"];
            $real = $_REQUEST["real"];

            $dolar = $real / $cotacao;

            echo "<p>Seus R$ " . number_format($real, 2, ",", "."). " equivalem a <strong>US$ " . number_format($dolar, 2, ",", ".") . "*</strong></p>";
            echo "<p>* Cotação obtida diretamente do site do <strong>Banco Central do Brasil</strong></p>"
        ?>

        <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </main>
</body>

</html>