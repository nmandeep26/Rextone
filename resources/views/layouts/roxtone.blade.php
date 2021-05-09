<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roxtone</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="resources/css/roxtone.css" rel="stylesheet">
    <link href="{{asset('storage/css/roxtone-custom.css')}}" rel="stylesheet">
   

</head>

<body>
    <div class="navmenu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="{{ asset('storage/images/app-logo.png') }}"
                        alt="Roxtone Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

                    <div class="navbar-nav">
                        <a class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}" href="#">About</a>
                        <a class="nav-item nav-link {{ Request::is('Projects') ? 'active' : '' }}" href="#">Projects</a>
                        <a class="nav-item nav-link {{ Request::is('Blog') ? 'active' : '' }}" href="#">Blog</a>
                        <a class="nav-item nav-link {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}">Log in</a>
                        <a class="nav-item nav-link {{ Request::is('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a>

                        @if (Auth::check())

                            <div class="nav-item nav-link" aria-labelledby="navbarDropdown">
                                <a class="nav-item nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>

                        @endif

                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if (Session::has('alert-' . $msg))
                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
            @endif
        @endforeach
    </div>
    <div class="container">
        <div class="row">
            @yield('roxtone_content')


        </div>
    </div>






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
