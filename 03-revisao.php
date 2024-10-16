<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisao HTML e PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <h1>Revisando o básico</h1>
    <hr>

    <?php
    /* Criar duas variáveis e /ou constantes */
    const NOME = "Chapolin Colorado";
    $idade = 26;

    /* Exibir no Html uma frase da seguinte forma */

    // Olá! Meu nome é Chapolin Colorado e tenho 26 ano.
    
    /* Desafio: 
    - O nome deve aparecer em itálico e com cor diferente no texto
    - A idade deve aparecer apenas com cor de fundo diferente  */

     
    ?>
    <p>Olá! Meu nome é  <i class="text-danger" ><?=NOME?></i>  e tenho <span class="bg-warning"><?=$idade?></span> anos.</p>
</body>
</html>