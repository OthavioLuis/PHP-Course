<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        .nota {
            width: 100px;
        }
    </style>
</head>
<body>
    <?php 
        $valor = $_GET['valor'] ?? 0;
        $resto = $valor;

        $cem = floor($resto / 100);
        $resto %=  100;

        $cinquenta = floor($resto / 50);
        $resto %= 50;

        $vinte = floor($resto / 20);
        $resto %= 20;

        $dez = floor($resto / 10);
        $resto %= 10;

        $cinco = floor($resto / 5);
        $resto %= 5;
    ?>
    <main>
        <h2>Caixa Eletrônico</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="valor" value="<?=$valor?>" step="5">
            <p style="font-size: 0.6em;">*Notas disponíveis: R$100, R$50, R$10, R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <h2>Saque de R$<?=number_format($valor, 2, ",", ".")?> realizado</h2>
        <ul>
            <li>
                <img class='nota' src="img/100-reais.jpg"> x<?=$cem?>
            </li>
            <li>
                <img class='nota' src='img/50-reais.jpg'> x<?=$cinquenta?>
            </li>
            <li>
                <img class='nota' src='img/20-reais.jpg'> x<?=$vinte?>
            </li>
            <li>
                <img class='nota' src='img/10-reais.jpg'> x<?=$dez?>
            </li>
            <li>
                <img class='nota' src='img/5-reais.jpg'> x<?=$cinco?>
            </li>
        </ul>
    </section>
</body>
</html>