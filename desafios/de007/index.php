<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $valor1 = $_GET['v1'] ?? 0;
        $salario = 1_380.60;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Salário (R$)</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$1.380,00</strong></p>
            <input type="submit" value="Enviar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php 
            $inteiro = intdiv($valor1, $salario);
            $resto = $valor1 % $salario;
            echo "<p>Quem recebe um salário de R$". number_format($valor1, 2, ",", ".") ." ganha <strong>$inteiro salários mínimos</strong> + R$". number_format($resto, 2, ",", ".") .".</p>";
        ?>
    </section>
</body>
</html>