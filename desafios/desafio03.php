<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 03</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>

        <?php
            $cotacao = 5.22;
            $real = $_REQUEST["real"];

            $dolar = $real / $cotacao;

            echo "<p>Seus R$ " . number_format($real, 2, ",", "."). " equivalem a <strong>US$ " . number_format($dolar, 2, ",", ".") . "</strong></p>";
            echo "<p><strong>* Cotação fixa de R$$cotacao</strong> informada diretamente no código</p>";
        ?>

        <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </main>
</body>

</html>