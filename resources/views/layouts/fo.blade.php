<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <title>@yield('title', 'O meu site')</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-WyOxWvTyr1QaMPfiPJSv76iReVthorl5uWlFtZPyK0IEB0hGzo9y5Bp9mYanr8Bu" crossorigin="anonymous" defer>
    </script>
    {{-- CSS Próprio --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- javascript priprio --}}
    <script src="{{asset('js/script.js')}}" defer></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img class="navbar-brand" src="{{asset('images/icon-32.png')}}"></img>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">All Series</a>
                    </li>
                </ul>
                @if (Route::has('login'))
                    <nav class="flex items-center justify-end gap-4">
                        @auth
                        <div class="d-flex align-items-center gap-2">
                            <a href="{{ route('dashboard.all') }}"
                                class="btn btn-info">
                                Dashboard
                            </a>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button class="btn btn-info ">Logout</button>
                            </form>
                        </div>
                        @else
                            <a href="{{ route('login') }}"
                                class="btn btn-info">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="btn btn-info">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </div>
        </div>
    </nav>

    <div class="container">

        @yield('content')

    </div>



</body>

</html>
