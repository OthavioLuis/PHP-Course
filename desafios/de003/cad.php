<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $valor = $_GET["valor"];
            $conversor = $valor / 5.22;
            $conversor = number_format($conversor, 2, ',', '.');
            echo "<p>Seus R$ $valor equivalem a <strong>US $ $conversor</strong></p>"
        ?>
        <p><strong>Cotação fixa de 5,22</strong> informada diretamente no código</p>
        <a href="javascript:history.go(-1)">
            <input type="button" value="Voltar">
        </a>
    </main>
</body>
</html>