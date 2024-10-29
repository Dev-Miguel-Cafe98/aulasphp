<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio - 03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        li:nth-child(odd) {
            /*Ímpar */
            color: blue;

        }

        li:nth-child(even) {
            /* Par*/
            color: red;

        }
    </style>
</head>


<body>
    <div class="container">

        <h1>Exercício 03</h1>

        <?php
        $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
        ?>


        <!-- Utilizando a tag  For  👇-->
        <!-- 
    <ol >
        <?php
        $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
        for ($i = 0; $i < count($meses); $i++) { ?>

        <li>
            <?= $meses[$i] ?>
        </li>

        <?php
        }
        ?>
        
    </ol> -->

        <!-- Utilizando a variavel Foreach 👇 -->

        <ol>

            <?php foreach ($meses as $mes) { ?>

                <li><?= $mes ?></li>

            <?php } ?>

        </ol>
    </div>
</body>

</html>