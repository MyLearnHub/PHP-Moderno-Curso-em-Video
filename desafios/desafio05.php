<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 05</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $number = $_POST["number"];

            echo "<p>Analisando o número <strong>". number_format($number, 3, ",", ".") ." </strong>informado pelo usuário:</p>";

            $int = (int) $number;
            $fra = $number - $int;

            echo "<ul><li> A parte inteira do número é: <strong>". number_format($int, 0, ",", ".") ."</strong></li>";
            echo "<li> A parte fracionário do número é: <strong>". number_format($fra, 3, ",", ".") ."</strong></li></ul>";
        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>