<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Número aleatório</title>
</head>
<body>
    <main>
        <h1>Números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100....</p>
        <?php

            //rand() = 1951 - Linear Congrential Generator
            //mt_rand() = 1997 - Mersenne Twister
            //A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
            //randm_int() gera números aleatórios criptograficamente seguros

            $valor = mt_rand(0, 100);
            echo "<p>O valor gerado foi <strong>$valor</strong></p>"
        ?>
        <input type="button" value="Gerar outro número" onclick="window.location.reload()">
    </main>
</body>
</html>