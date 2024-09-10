<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
        // 0x = hexadecimal 
        // 0b = binário 
        // 0 = octal

        // $num = 300;
        // $num = 0x1A;
        // $num = 0b1010;
        // $num = 0b1011;
        // $num = 010;
        // echo "O valor da variável é $num";
        
        // $v = 300;
        // $v = 45.2;
        // $v = true;
        // $v = "Gustavo";
        // var_dump($v);

        // $num = 3e2; // 3 x 10(2) coerção
        // $num = (int) 3e2;
        // $num = (integer) 3e2;
        // echo "O valor é $num";
        // var_dump($num)

        // $num = (int) "950";    
        // $num = (float) "950";    
        // $num = (double) "950";    
        // var_dump($num);
        
        // $casado = false;
        // $casado = true;
        // var_dump($casado);
        // echo "O valor para casado é $casado";

        // $vet = [6, 2, 9, 3, 5];
        // $vet = [6, 2.5, "Maria", 3, false];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>