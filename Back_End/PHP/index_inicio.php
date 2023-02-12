<?php

// O php pode ser executado antes da pagina html, durante e depois

echo 'Hello World!';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducao ao php</title>
</head>
<body>

    <h1>Só funciona o php se o arquivo tiver a extensao .php e nao aparece no cod font do dev tools</h1>
    
    <?php

    echo 'aprendendo php com uso dentro do html <br>';

    // comentario de linha
    # comentario de linha
    /*
        comentario de linha multipla
    */

    ?>

    <?php echo 'full php de linha unica <br>'; ?>

</body>
</html>

<?php
echo 'php do final de pagina';
?>