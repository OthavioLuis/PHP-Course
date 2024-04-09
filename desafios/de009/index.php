<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $v1 = $_GET['valor1'] ?? 0;
        $v2 = $_GET['valor2'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 1;
        $peso2 = $_GET['peso2'] ?? 1;
    ?>
    <main>
        <h2>Média Aritmética</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1º Valor</label>
            <input type="number" name="valor1" id="valor1" value="<?=$v1?>">
            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
            <label for="valor2">2º Valor</label>
            <input type="number" name="valor2" id="valor2" value="<?=$v2?>">
            <label for="peso2">2º Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">            
            <input type="submit" value="Calcular média">
        </form>
    </main>

    <section>
        <h2>Cálculo das Médias</h2>
        <?php 

            //conversão obrigatória para o PHP fazer a equação direito
            $v1 = intval($v1);
            $v2 = intval($v2);
            $peso1 = intval($peso1);
            $peso2 = intval($peso2);

            $simples = ($v1 + $v2) / 2;
            $ponderada = (($v1 * $peso1) + ($v2 * $peso2)) / ($peso1 + $peso2);

            echo "<p>Analisando os valores $v1 e $v2:</p>";
            echo "<ul><li><p>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <strong>". number_format($simples, 2, ",", ".") ."</strong></p></li>";
            echo "<li><p>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a <strong>". number_format($ponderada, 2, ",", ".") ."</strong></p></li></ul>";
        ?>
        
    </section>
</body>
</html>