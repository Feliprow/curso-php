<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 002</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Gerador de números</h1>
        <p class="numeros">

            <?php
                $aleatorio = rand(0,2000);
                if ($aleatorio < 1000) {
                    echo "Toma esse número aí <br>";
                    echo "$aleatorio";

                } elseif ($aleatorio >= 1000) {
                    echo "TOMA AI ESSA ME\$@ <br>";
                    echo "$aleatorio";
                }
            ?>
        </p>

        <button>
            <a href="index.html">Voltar</a>
        </button>


    </div>
</body>
</html>