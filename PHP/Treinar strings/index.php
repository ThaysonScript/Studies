<?php

    $nome = 'Thayson Guedes';
    $apelido = 'Thayson';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apresentar o nome em php</title>
</head>
<body>
    <h3>Meu Nome É:</h3>
    <h1>
        <?= "$nome $apelido"; ?> <!-- SUBSTITUI O ECHO E O . -->
    </h1>

</body>
</html>