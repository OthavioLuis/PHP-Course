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
    <h1>Resultado Final</h1>
        <?php
            $numero = $_GET["numero"];
            echo "<p>O número escolhido foi <strong>$numero</strong></p>";
            echo "<p>O seu antecessor é ". ($numero - 1). "</p>";
            echo "<p>O seu sucessor é ". ($numero + 1). "</p>";
        ?>
        <a href="javascript:history.go(-1)"><input type="button" value="Voltar"></a>
    </main>
</body>
</html>