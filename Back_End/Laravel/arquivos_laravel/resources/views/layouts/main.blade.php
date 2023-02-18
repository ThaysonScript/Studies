<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- APLICACAO CSS -->
    <link rel="stylesheet" href="css/style.css">

    {{-- O TITULO EXTENDIDO SERA RETORNADO E PARARA NO YIELD ABAIXO --}}
    <title>@yield('title')
    </title>
</head>
<body>

    {{-- CONTEUDO EXTENDIDO SERA RETORNADO E PARARA NO YIELD ABAIXO --}}
    @yield('content')
    <footer>
        <p>HDC Events &copy; 2020</p>
    </footer>
</body>
</html>