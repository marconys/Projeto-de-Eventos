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

    {{-- Icons-bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

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
                    {{-- Autenticado --}}
                    @auth
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Meus eventos</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <a href="/logout" class="nav-link"
                                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                                    Sair
                                </a>
                            </form>
                        </li>
                    @endauth
                    {{-- logar --}}
                    @guest
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" class="nav-link">Cadastrar</a>
                    </li>
                    @endguest
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
