<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="/pictures/logo.ico" type="image/x-icon">
   <title>@yield ('title')</title>
</head>
<body>

<div class="banner">
    <header>
        <div class="container">
            <div class="header_inner">
                <div class="logo">
                    <img src="/pictures/logo.png" alt="logo">
                    <blockquote>Книжковий клуб</blockquote>
                </div>
                <nav>
                    <a href="{{url('/')}}">Головна</a>
                    <a href="{{url('/genres')}}">Жанри</a>
                    <a href="{{url('/books')}}">Книги</a>
                    <a href="{{url('/authors')}}">Автори</a>
                </nav>
            </div>
        </div>
    </header>
</div>

@yield('content')
</body>
</html>
