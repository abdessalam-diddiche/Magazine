<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c2b9c1dd85.js"></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<style>
body{
    background-image: url({{ asset('images/fond3.jpg') }});
    /* background-position: center;
    background-repeat: repeat; */
    width:100%;
    height:100%;
}
i{
    color:white;
}
.menu{
    font-size:15px;
    margin-left:20px;
}
.logo{
    font-size:30px;
}
</style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container-fluid">
            <img src="{{ asset('images/images.png') }}" alt="" width="90px" height="50px"> 
                <a class="navbar-brand logo" href="{{ url('/') }}">
                Dream Magazine
                    <!-- {{ config('app.name', 'Laravel') }} -->
                </a>
                <a href="{{ url('articles') }}" class="navbar-brand menu">Documents</a>
                
                <a href="{{ url('events') }}" class="navbar-brand menu">Events</a>
                <a href="{{ url('articles/create') }}" class="navbar-brand menu">Creat</a>
                <a href="{{ url('/home') }}" class="navbar-brand menu">Home</a>

                

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                    <form class="form-inline active-pink-3 active-pink-4" method="get" action="{{ url('/search') }}" enctype="multipart/form-data">
                    @csrf
                      <i class="fas fa-search" aria-hidden="true"></i>
                      <input class="form-control form-control-sm ml-3 w-75" type="search" placeholder="Search"
                         aria-label="Search" name="search">
                    </form>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <li class="nav-item" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>



    <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>

    @yield('javascript')

</body>
</html>
