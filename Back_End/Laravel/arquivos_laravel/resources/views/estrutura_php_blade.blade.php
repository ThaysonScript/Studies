<!--

    Aqui será um arquivo exemplo do suporte a linguagem php no blade da view
    if, else, while ... etc

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura php no blade</title>
</head>
<body>
    <h1>Algum Título</h1>

    <!-- Exemplo de estrutura condicional simples no blade -->
    @if(10 > 5)
        <p>"10 é maior que 5"</p>
    @endif

    <!-- Usando os dados criados na route (use o $/chave sempre) -->
    <p>{{ $nome }}</p>

    <!-- Exemplo de estrutura condicional completa no blade -->
    @if($nome == 'Thayson')
        <p>O nome passado foi: {{$nome}} e ele tem {{$idade}} anos e a profissão é: {{$profiss}}</p>

    @elseif($nome == 'Arnaldo')
        <p>O nome passado não foi Thayson, mas sim o nome: {{$nome}}</p>

    @else
        <p>Não foi passado nenhum nome ou nome inválido</p>

    @endif

    <a href="/">voltar para home</a>
</body>
</html>