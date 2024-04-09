<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $dividendo = $_GET['v1'] ?? 0;
        $divisor = $_GET['v2'] ?? 1;
        $inteiro = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" min="0" id="v1" value="<?=$dividendo?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" min="1" id="v2" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <div>
            <div class="box1">
                <div class="bx b1"><?=$dividendo?></div>
                <div class="bx b2"><?=$divisor?></div>
            </div>
            <div class="box1">
                <div class="bx b3"><?=$resto?></div>
                <div class="bx b4"><?=$inteiro?></div>
            </div>
        </div>
    </section>
</body>
</html>