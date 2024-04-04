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
        $valor = $_GET['v1'] ?? 0;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">número</label>
            <input type="number" name="v1" id="v1" value="<?=$valor?>">
            <input type="submit" value="Somar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php
            $quadrada = sqrt($valor);
            $cubica = pow($valor, 1.0/3.0);

            echo "<p>Analisando o <strong>número $valor</strong>, temos:</p>";
            echo "<ul><li>A sua raiz quadrada é <strong>". number_format($quadrada, 3, ",", ".") ."</strong></li>";
            echo "<li>A sua raiz cública é <strong>". number_format($cubica, 3, ",", ".") ."</strong></li></ul>";
        ?>
    </section>
</body>
</html>