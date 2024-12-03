<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массивы</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
        }
        .content {
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">Главная</a>
            <a href="{{ route('array') }}">Массивы</a>
        </nav>
    </header>

    <div class="content">
        <h1>Массивы</h1>
        <ul>
            @foreach ($array as $item)
                <li>
                    <strong>{{ $item['title'] }}</strong> - {{ $item['price'] }} руб.
                    <img src="{{ $item['path'] }}" alt="{{ $item['title'] }}">
                </li>
            @endforeach
        </ul>
    </div>

    <footer>
        &copy; {{ date('Y') }} Ваша ФИО. Все права защищены.
    </footer>
</body>
</html>