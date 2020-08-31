<!DOCTYPE html> 
<html lang="{{ app()->getLocale() }}">
    <head>
        @component('components.helpers.headers')@endcomponent
    </head>
    <body class="grad">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144354164-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-144354164-1');
            clearInterval(timerXat);
            clearInterval(myTimer);
            clearInterval(timerPostagem);
            clearInterval(senhordomal);
            clearInterval(xat);
        </script>
        <div id="app">
            <div class="col-md-12">
                <nav class="navbar navbar-default navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">

                            <!-- Collapsed Hamburger -->
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                                <span class="sr-only"> Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- Branding Image -->
                            <a class="navbar-brand" href="{{ route('home') }}">
                                {{ config('app.name', 'Laravel') }}
                            </a>
                        </div>

                        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                            <!-- Left Side Of Navbar -->
                            <ul class="nav navbar-nav">
                                &nbsp;
                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        Blogs (idéias de ambientação)<span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="https://subreviventeshistoria.blogspot.com/" target="_blank">
                                                Sobreviventes
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://refugiodolucky.blogspot.com/" target="_blank">
                                                Refúgio do Lucky
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- Authentication Links -->
                                @if (Auth::guest())                        
                                <li><a href="{{ route('login') }}">Login (usuários cadastrados)</a></li>
                                {{--<li><a href="{{ route('mostrarlogingoogle') }}"><img src="{{ asset('images/google.png') }}" alt="login com o google"/></a></li>--}}
                                <li><a href="{{ route('users.create') }}">Cadastre-se</a></li>                            
                                @else
                                @if(Auth::user()->tipo=='admin')
                                <li><a href="{{ route('admin.users') }}">Administração</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        RPG <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ route('admin.classes') }}">
                                                Classes
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                @else
                                <li><a href="{{ route('users.edit', ['id' => Auth::user()->id]) }}">Alterar meu cadastro</a></li>
                                @endif
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="row">
                    <div class="col-md-12" style="background-color: black;">
                        <div class="text-center visible-lg">
                            <img src="{{ asset('images/mundo sombrio.png') }}" alt="logo"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <br>@yield('content')
                    </div>
                    <div class="col-md-3">
                        @component('components.gerais.links')@endcomponent
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12 text-center visible-lg">
                        <img src="{{ asset('images/bloddy.png') }}" alt="logo"/>
                    </div>
                    <div class="col-md-12"> 
                        <div class="text-center"><h2>Funciona em</h2></div>
                    </div>
                    <div class="col-md-12 text-center"> 
                        <a href="https://www.google.com/intl/pt-BR/chrome/" target="_blank">
                            <img src="{{ asset('images/chrome.png') }}" alt="logo"/>
                        </a>
                        <a href="https://www.mozilla.org/pt-BR/firefox/new/" target="_blank">
                            <img src="{{ asset('images/firefox.png') }}" alt="logo"/>
                        </a>
                        <a href="https://www.opera.com/pt-br" target="_blank">
                            <img src="{{ asset('images/opera.png') }}" alt="logo"/>
                        </a>
                    </div>
                    <div class="col-md-12 text-center"> 
                        <div class="text-center"><h2>por enquanto</h2></div>
                    </div>
                </div>
        </div>


        <!-- Scripts -->
        {{--<script src="{{ asset('js/app.js') }}"></script>--}}
</body>
</html>
