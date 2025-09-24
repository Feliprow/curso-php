<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        $num = 0b1010;
        echo "O valor da variável é $num\n";
        echo "<br>";
        $vetor = [1,5,false,1.4 ];

        var_dump($vetor);


        class pessoa {
            private string $nome;
        }

        $p = new pessoa;

        var_dump($p);


        echo "PHP \u{1F418}";
    ?>
</body>
</html>