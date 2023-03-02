Exemplo #1 Abrindo e fechando tags PHP

1.
<?php 
    echo 'se você deseja rodar código PHP dentro de documentos XHTML ou XML, utilize essas tags'; 
?>

2. Você pode utilizar a tag curta:
<?= 'imprima essa string' ?>.

É o equivalente de:
<?php echo 'print this string' ?>.

3. 
<?
    echo 'Este código está entre tags curtas, mas somente funcionará ' . 'se short_open_tag estiver ativo';
?>
