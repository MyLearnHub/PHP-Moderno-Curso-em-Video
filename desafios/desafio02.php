<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Desafio PHP 02</title>
    <link rel="stylesheet" href="../style.css" />
  </head>
  <body>
    <section>
      <h1>Trabalhando com números aleatórios</h1>
      <p>Gerando um número aleatório entre 0 e 100...</p>

      <?php 
        $number = mt_rand(1, 100);
        echo "<p>O valor gerado foi <strong>$number</strong></p>";
      ?>

      <button onclick="javascript:document.location.reload()">🔁Gerar outro</button>
    </section>
  </body>
</html>
