<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Exercicio PHP</h1>

        <?php


        /* Array ASSOCIATIVO */
        $dados1 = [
            "nome_usuario" => "chapolin.colorado",
            "senha" => 123,
            "idade" => 30,
            "cidade" => "São Paulo",
            "telefone" => ["(11)999-5488", "(11)924-5468"]

        ];

        /* Array NUMÉRICO/INDEXADO */
        $dados2 = [
            'chapolin.colorado',
            '123teste',
            30,
            'São Paulo',
            ["(11)999-5478", "(11)924-5478"]

        ]
        ?>

        <hr>

        <!--  Array NUMÉRICO/INDEXADO   -->
        <ol>
            <li>Nome de Usuário : <?= $dados1["nome_usuario"] ?></li>
            <li>Senha : <?= $dados1["senha"] ?></li>
            <li>Idade : <?= $dados1["idade"] ?></li>
            <li>Cidade : <?= $dados1["cidade"] ?></li>
            <li>1 Telefone : <?= $dados1["telefone"][0] ?></li>
            <li>2 Telefone : <?= $dados1["telefone"][1] ?></li>
        </ol>


        <hr>
        <h1>Correção do Exercícios</h1>
        <br>
        <br>
        <h2>Versão de saida usando arrays NUMÉRICO/INDEXADO</h2>
        <ol>
            <li>Nome: <?= $dados2[0] ?></li>
            <li>Idade: <?= $dados2[2] ?></li>
            <li>Cidade: <?= $dados2[3] ?></li>
            <li>Celular: <?= $dados2[4][0] ?></li>
            <li>Celular: <?= $dados2[4][1] ?></li>
        </ol>

        <h2>Versão de saida usando arrays ASSOCIATIVO</h2>

        <ol>
            <li>Nome de Usuário : <?= $dados1["nome_usuario"] ?></li>
            <li>Senha : <?= $dados1["senha"] ?></li>
            <li>Idade : <?= $dados1["idade"] ?></li>
            <li>Cidade : <?= $dados1["cidade"] ?></li>
            <li>1 Telefone : <?= $dados1["telefone"][0] ?></li>
            <li>2 Telefone : <?= $dados1["telefone"][1] ?></li>
        </ol>
    </div>

</body>

</html>