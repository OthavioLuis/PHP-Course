<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 12</title>
</head>
<body>
    <?php 
        $total_segundos = $_GET['valor'] ?? 0;
        $resto = $total_segundos;

        $semana = (int)($resto / 604_800);
        $resto = $resto % 604_800;
        //total de semanas acima
        $dia = (int)($resto / 86_400);
        $resto = $resto % 86_400;
        //total de dias acima
        $hora = (int)($resto / 3_600);
        $resto = $resto % 3_600;
        //total de horas
        $minuto = (int)($resto / 60);
        $resto = $resto % 60;
        //total de minutos
        $segundo = $resto;
    ?>
    <main>
        <h2>Calculadora de Tempo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual é o total de segundos?</label>
            <input type="number" name="valor" id="valor" value="<?=$total_segundos?>" min="0" step="1" required>

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando Tudo</h2>
        <?php 
            echo "Analisando o valor que você digitou, <strong>". number_format($total_segundos, 0, ",", ".") ." segundos</strong><br> equivalem a um total de:";
            echo "<ul><li><strong>$semana</strong> Semana</li>";
            echo "<li><strong>$dia</strong> Dia</li>";
            echo "<li><strong>$hora</strong> Hora</li>";
            echo "<li><strong>$minuto</strong> Minuto</li>";
            echo "<li><strong>$segundo</strong> Segundo</li></ul>";
        ?>
    </section>
</body>
</html>