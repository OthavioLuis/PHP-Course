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
            $valor = rand(0, 100);
            echo "<p>O valor gerado foi <strong>$valor</strong></p>"
        ?>
        <input type="button" value="Gerar outro número" onclick="window.location.reload()">
    </main>
</body>
</html>