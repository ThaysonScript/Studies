<p>
    Isto vai ser ignorado pelo PHP e exibido pelo navegador
</p>
<?php 
    echo 'Enquanto isto vai ser interpretado.';
    // o interpretador php só lerá o que tá dentro das tags php enquanto o resto fora será interpretado pelo navegador
?>
<p>
    Isto também vai ser ignorado pelo PHP e exibido no navegador.
</p>


Exemplo #1 Escape avançado usando condições
<?php if ($expression == true): // definir laço ?>

    Isto irá aparecer se a expressão for verdadeira.

<?php else: // senao ?>

    Senão isso que aparecerá.

<?php endif; // para parar o laço, indicar o seu fim ?>