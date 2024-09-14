<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 01</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        
        <?php
            $number = $_GET["number"] ?? 0;

            $predecessor = $number - 1;
            $successor = $number + 1;

            echo "<p>O número escolhido foi <strong>$number</strong></p>";
            echo "<p>O seu antecessor é $predecessor</p>";
            echo "<p>O seu sucessor é $successor</p>";
        ?>

        <button onclick="javascript:history.go(-1)">&#x2B05Voltar</button>
    </main>
</body>

</html>