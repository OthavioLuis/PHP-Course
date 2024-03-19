<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de String</title>
</head>
<body>
    <h1>Tipos de String</h1>
    <?php 
        // $nome = "Gustavo";
        // $sobrenome = "Guanabara";
        // //não importa se as variaveis estão com single ou double aspas
        // echo "$nome $sobrenome"; //com aspas duplas
        // echo ' e $nome $sobrenome'; //com aspas simples
    
        // const CANAL = "Curso em Video";
        // echo "Eu adoro o ". CANAL;
    
        // echo "Estamos no ano de " . date('Y');

        $nome = "Gustavo";
        $sobrenome = "Guanabara";
        $apelido = "Gafanhoto";
        echo "$nome \"$apelido\" $sobrenome";
    ?>
</body>
</html>