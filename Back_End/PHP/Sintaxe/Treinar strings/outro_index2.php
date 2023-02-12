<?php

    $nome = "Thayson";
    $sobrenome = "Guedes de Medeiros";
    $nome_completo = "$nome $sobrenome"; # "" Junta as variaveis sem transforma-las em strings

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outro index.php</title>
</head>
<body>
    <p>
        <?= $nome_completo ?>
        <?= "<br><br>" . "O meu nome tem: " . strlen($nome_completo) . " caracteres" ?>
    </p>
</body>
</html>