<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio - 03</title>
    <style>
        
        li:nth-child(odd) {
            color: blue;
            
        }

        li:nth-child(even) {
            color: red;
            
        }
    </style>
</head>


<body>
    
    <ol class="">
        <?php
        $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
        for ($i = 0; $i < count($meses); $i++) { ?>

        <li>
            <?=$meses[$i]?>
        </li>

        <?php
        }
        ?>
        
    </ol>
</body>
</html>