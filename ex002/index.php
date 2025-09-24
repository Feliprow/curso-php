<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php
        date_default_timezone_set("America/Sao_paulo");

        echo "Hoje é dia " . date("d/M/y");
        echo "\nO horário atual é" . date ("g:i:m");
    ?>
</body>
</html>