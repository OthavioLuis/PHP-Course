<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reajuste de Preço</title>
</head>
<body>
    <?php 
        $preco = $_GET['preco'] ?? '0';
        $percentual = $_GET['percentual'] ?? '0';
    ?>
    <main>
        <h2>Reajustador de Preços</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" value="<?=$preco?>" step="0.01">
            <label for="preco">Qual será o percentual do reajuste? (
                <strong>
                    <span id="p">
                        ?
                    </span>%
                </strong>)
            </label>
            <input type="range" name="percentual" id="percentual" value="<?=$percentual?>" min="0" max="100" step="1" oninput="mudaValor()">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            $porcentagem = (($preco * $percentual) / 100);
            $reajuste = $porcentagem + $preco;

            echo "O produto que custava R$ ". number_format($preco, 2, ",", ".") ." com <strong>$percentual% de aumento</strong> vai passar a custar R$ ". number_format($reajuste, 2, ",", ".") ." a partir de agora.";
        ?>
    </section>

    <script>
        mudaValor()

        function mudaValor() {
            var p = document.getElementById('p');
            var percentual = document.getElementById('percentual');

            p.innerText = percentual.value;
        }
    </script>
</body>
</html>