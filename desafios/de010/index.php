<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $anoHoje = date("Y");
        $ano = $_GET['idade'] ?? 2000;
        $atual = $_GET['anoAtual'] ?? $anoHoje;
    ?>
    <main>
        <h2>Calculando a sua idade</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="idade">Em que ano você nasceu?</label>
            <input type="number" name="idade" id="idade" value="<?=$ano?>" min="1900" max="<?=$anoHoje?>">

            <label for="anoAtual">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$anoHoje?></strong>)</label>
            <input type="number" name="anoAtual" id="anoAtual" value="<?=$atual?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            $vaiTer = $atual - $ano;

            echo "Quem nasceu em $ano vai ter <strong>$vaiTer anos</strong> em $atual!";
        ?>
    </section>
</body>
</html>