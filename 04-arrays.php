<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays no PHP</title>

</head>

<body>
    <div class="container">
        <h1>Arrays no PHP</h1>
        <hr>
        <?php

            // Array numérico/tradicional
            $bandas = ["Slayer", "Nightwush", "Pink Floyd", "Savatage"];
            $cursos = array("Node.js", "Design", "Nutriçao");
        ?>


        <h2>Acessar os dados do Array</h2>
        <p>Rock Progressivo: <?= $bandas[2] ?></p>
        <p>Ontem estivemos com a turma de <?= $cursos[2] ?></p>

        <hr>
        <?php
            // Array Associativo
            $filme =[
                "titulo" => "Senhor dos Anéis",
                "autor" => "J.R.R Tolkien",
                "lancamento" => 2021,
                "genero" => "Fantasia"
            ];
        ?>

            <h2>Acessando os dados do array associativo</h2>
            <p>O filme <?=$filme["titulo"]?> foi lançado em <?=$filme["lancamento"]?>.</p>

            <hr>

            <h2>Comando úteis para análise de arrays</h2>
            
            <h3>print_r(nomeArray)</h3>
            <pre><?=print_r($bandas)?></pre>
            
            <h3>var_dump(nomeArray)</h3>
            <pre><?=var_dump($bandas)?></pre>
    </div>



</body>

</html>