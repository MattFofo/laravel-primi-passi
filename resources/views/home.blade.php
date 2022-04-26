<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel primi passi</title>

    <style>
        .flex-center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        ul {
            text-align: center;
            padding: 0;
            margin: 0;
        }
        ul > li {
            display: inline-block;
        }
    </style>
</head>
<body class="flex-center">
    <header>
        <h1>{{ $type }} {{ $name }} with Laravel!</h1>
        <ul>
            <li>
                <a href="{{ route('pagina1') }}">pagina1</a>
            </li>
            <li>
                <a href="{{ route('pagina2') }}">pagina2</a>
            </li>
            <li>
                <a href="{{ route('pagina3') }}">pagina3</a>
            </li>
        </ul>
    </header>
</body>
</html>
