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
    $bandas = ["Slayer", "Nightwush","Pink Floyd", "Savatage"];
    $cursos = Array("Node.js", "Design", "Nutriçao");
    ?>
    

        <h2>Acessar os dados do Array</h2>
        <p>Rock Progressivo: <?=$bandas[2]?></p>
        <p>Ontem estivemos com a turma de <?=$cursos [2]?></p>
    </div>
    

    
</body>

</html>