<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 001 - Resultado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #555d61;
        }

        .container {
            background-color: #e7e7e7;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 25px;
        }

        /* ************************************** */
        /* NOVO CSS PARA FORMATAR O TEXTO DE RESULTADO */
        /* ************************************** */
        
        /* Estilo para o bloco que contém o resultado */
        .resultado-texto {
            margin: 20px 0; /* Espaçamento vertical para afastar do título */
            font-size: 1.1em;
            line-height: 1.6; /* Aumenta o espaçamento entre as linhas, facilita a leitura! */
            color: #444;
            text-align: left; /* Alinha o texto à esquerda para um visual mais limpo */
        }
        
        /* Destaque para os números */
        .resultado-texto strong {
            color: #333;
            font-size: 1.2em; /* Deixa o número maior para dar ênfase */
        }
        
        /* Estilo do Link de Voltar */
        .container a {
            display: block;
            text-align: center;
            margin-top: 30px; /* Mais espaço acima do link */
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }
        
        .container a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        /* O resto do seu CSS não precisou de alteração */
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

    </style>
</head>
<body>

<div class="container">
    <h1>Resultado do Formulário</h1>
    
    <div class="resultado-texto">
        <?php
            $input = $_GET["dado_numerico"] ?? "0";
            $sucessor = $input + 1;
            $antecessor = $input - 1;

            // Cada echo agora gera uma linha formatada com <p>
            echo "<p>O número da sua escolha foi <strong>$input</strong>.</p>";
            echo "<p>Seu Sucessor é <strong>$sucessor</strong>.</p>";
            echo "<p>E seu Antecessor é <strong>$antecessor</strong>.</p>";
        ?>
    </div>
    
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
   
</div>

</body>
</html>