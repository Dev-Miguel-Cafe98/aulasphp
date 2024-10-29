<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 Condicionais </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1>Exercício 02</h1>
    <div class="container"></div>
    <?php
    $salario = 500;


    if ($salario < 500) {
        $salario = $salarioAjuste * 1.15;
    } elseif ($salario <= 1000) {
        $salarioAjuste = $salario * 1.10;
    } else {
        $salarioAjuste = $salario * 1.05;
    }


    ?>

    <p>Salario antigo: R$
        <?= number_format($salario, 2, ",", ".") ?>
    </p>

    <p>Novo Salario: R$
        <?= number_format($salarioAjuste, 2, ",", ".") ?>
    </p>
    <hr>
    <!-- Entrada de dados, informação do salário atual -->
    <?php
    $salarioB = 1000;

    // Análise das condições, e cálculos
    if ($salarioB < 1000) {
        $salarioB = $salarioAjusteD *  1.15;
    } elseif ($salarioB <= 1100) {
        $salarioAjusteD = $salarioB * 1.10;
    } else {
        $salarioAjusteD = $salarioB * 1.05;
    }


    ?>
    <!--Saída de dados -->
    <p>Salario antigo: R$
        <?= number_format($salario, 2, ",", ".") ?>
    </p>

    <p>Novo Salario: R$
        <?= number_format($salarioAjusteD, 2, ",", ".") ?>
    </p>



    </div>


</body>

</html>