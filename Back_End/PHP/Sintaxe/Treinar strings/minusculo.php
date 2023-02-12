<?php

    $nome = 'Thayson';
    $apelido = 'Guedes';

    #   mb_     deve ser usados para acentuacoes

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome e apelido em php</title>
</head>
<body>
    <p>
        <?= "O meu nome é: " . strtoupper($nome) . " e meu apelido é: " . strtoupper($apelido) ?>
    </p>
</body>
</html>