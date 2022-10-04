<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    {{-- Google fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    {{-- CSS --}}
    <link rel="stylesheet" href="/css/myStyles.css">

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand ms-3">
                    <img src="/img/logo.png" alt="">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/create" class="nav-link">Criar Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contacts/create" class="nav-link">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/products/create" class="nav-link">Produtos</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="bg-success text-white text-center p-4 rounded my-4">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>

    <footer>Events &copy;2022</footer>

</body>

</html>
